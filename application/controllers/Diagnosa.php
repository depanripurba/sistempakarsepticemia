<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Diagnosa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('Penyakit_model');
        $this->load->model('Gejala_model');
        $this->load->model('Pasien_model');
        $this->load->model('Basis_model');
        $this->load->model('Konsultasi_model');
    }

    public function prosesdiagnosa()
    {
		$this->session->set_userdata('hasildiagnosa','');
        if($_SESSION['hasildiagnosa']!=null){
            $this->session->unset_userdata('hasildiagnosa');
        }
        $newdata = [];
        foreach ($_POST as $data => $val) {
            if ($val == 1) {
                $newdata[$data] = $val;
            }
        }
        if (count($newdata) < 1) {
            redirect('diagnosa');
        }
        //proses filterisasi
        $kemungkinanpenyakit = $this->forwadchaining($newdata);
        // forward chaining

        $peluangpenyakit = [];
        // $mastercek = [];
        // awal dari looping penyakit
        foreach ($kemungkinanpenyakit as $penyakit) {
            $sqlquery = "";
            $indikator = 0;
            foreach ($newdata as $value => $n) {
                if ($indikator >= count($newdata) - 1) {
                    $sqlquery .= "kode_penyakit='" . $penyakit . "' AND kode_gejala='" . $value . "'";
                } else {
                    $sqlquery .= "kode_penyakit='" . $penyakit . "' AND kode_gejala='" . $value . "' OR ";
                }
                $indikator++;
            }
            $this->db->from('tbl_basispengetahuan');
            $this->db->where($sqlquery);
            $hasiltemp = $this->db->get()->result();

            //Menghitung Total Nilai Bobot Gejala yang dialami :

            $totalnilaicentang = 0;;
            foreach ($hasiltemp as $temp) {
                $totalnilaicentang += $temp->nilai;
            }

            //menghitung probabilitas nilai probabilitas gejala terhadap penyakit

            $kalibobottotal = 0;
            $nilaibagitotal = [];

            foreach ($hasiltemp as $temp) {
                $gejaladibagitotalbobot = $temp->nilai / $totalnilaicentang;
                // $nilaibagitotal[$temp->kode_gejala] = $gejaladibagitotalbobot;
                $kalibobottotal += $temp->nilai * $gejaladibagitotalbobot;
                $nilaibagitotal[$temp->kode_gejala] = $gejaladibagitotalbobot;
            }
            $totalbayes = 0;
            foreach ($hasiltemp as $temp) {
                $totalbayes += $temp->nilai * $temp->nilai * $nilaibagitotal[$temp->kode_gejala] / $kalibobottotal;
            }

            //a x b dibagi dengan total c menghitung bayes akhir
            $peluangpenyakit[$penyakit] = round($totalbayes, 3);
        }
        // akhir dari looping penyakit

        //mengambil gejala dari tabel gejala
        $sqll = "";
        $indi = 0;
        foreach ($newdata as $gej => $v) {
            if ($indi >= count($newdata) - 1) {
                $sqll .= "kode_gejala='" . $gej . "'";
            } else {
                $sqll .= "kode_gejala='" . $gej . "' OR ";
            }
            $indi++;
        }
        $this->db->from('tbl_gejala');
        $this->db->where($sqll);
        $gejalacentang = $this->db->get()->result();

        arsort($peluangpenyakit);
        $noresult = count($peluangpenyakit);
        if ($noresult == 0) {
            $hasildiagnosakirim['namapenyakit'] = null;
            $hasildiagnosakirim['kodepenyakit'] = null;
            $hasildiagnosakirim['solusi'] = null;
            $hasildiagnosakirim['nilaipeluang'] = null;
        }
        // $hasildiagnosakirim['nama'] = $_POST['nama'];

        foreach ($peluangpenyakit as $hasilkonsultasi => $values) {
            $ektrak = $this->db->get_where('tbl_penyakit', array('kode_penyakit' => $hasilkonsultasi))->result()[0];
            $hasildiagnosakirim['kodepenyakit'] = $ektrak->kode_penyakit;
            $hasildiagnosakirim['namapenyakit'] = $ektrak->nama_penyakit;
            $hasildiagnosakirim['solusi'] = $ektrak->solusi;
            $hasildiagnosakirim['nilaipeluang'] = $values;
            $hasildiagnosakirim['persenpeluang'] = $values*100;
            break;
        }
        $hasildiagnosakirim['gejalacentang'] = $gejalacentang;
        $stringjson = "";
        $inor = 0;
        foreach ($newdata as $indi => $ng) {
            if ($inor >= count($newdata) - 1) {
                $stringjson .= $indi;
            } else {
                $stringjson .= $indi . ',';
            }
            $inor++;
        }
        
        $this->session->set_userdata('hasildiagnosa', $hasildiagnosakirim);

        $propertiview['judul'] = 'SISTEM PAKAR DIAGNOSA ENDOKRIN - DIAGNOSA USER';
        $propertiview['aktif'] = 'Diagnosa Pasien';
        $propertiview['hasil'] = $hasildiagnosakirim;
        $propertiview['user'] = $this->session->userdata();
		$propertiview['userdata'] = [
			"kode_konsultasi"=>(int)$_POST['kode'],
			"nama"=>$_POST['nama'],
			"telepon"=>$_POST['telepon'],
			"alamat"=>$_POST['alamat'],
		];
		// var_dump($propertiview['userdata'],$propertiview['hasil']);die;

		$gejalaselected =  $hasildiagnosakirim['gejalacentang'];
		// var_dump($gejalaselected);die;

		// Simpan Hasil Ke Dalam Database
		$data_to_Insert = [
			"kode_konsultasi"=>$_POST['kode'],
			"nama"=>$_POST['nama'],
			"telepon"=>$_POST['telepon'],
			"alamat"=>$_POST['alamat'],
			"penyakit"=>$propertiview['hasil']['namapenyakit'],
			"solusi"=>$propertiview['hasil']['solusi'],
			"tanggal"=>date('d / M / Y')
		];
		// var_dump($data_to_Insert);die;
		$insertData = $this->Konsultasi_model->insertKonsultasi($data_to_Insert);

        $this->load->view('template/header_user', $propertiview);
        $this->load->view('user/hasildiagnosa', $propertiview);
        $this->load->view('template/footer', $propertiview);
    }

    private function forwadchaining($newdata)
    {
        // proses forward chaining
        $prediksipenyakit = [];
        foreach ($newdata as $result => $value) {
            $this->db->select('kode_penyakit');
            $ektrak = $this->db->get_where('tbl_basispengetahuan', array('kode_gejala' => $result))->result();
            foreach ($ektrak as $zip) {
                $prediksipenyakit[] = $zip->kode_penyakit;
            }
        }

        $realprediksi = [];
        for ($i = 0; $i < count($prediksipenyakit); $i++) {
            if (count($realprediksi) == 0) {
                $realprediksi[] = $prediksipenyakit[$i];
            } else {
                $tambah = false;
                foreach ($realprediksi as $real) {
                    if ($prediksipenyakit[$i] == $real) {
                        $tambah = false;
                        break;
                    } else {
                        $tambah = true;
                    }
                }
                if ($tambah) {
                    $realprediksi[] = $prediksipenyakit[$i];
                }
            }
        }
        return $realprediksi;
    }
}