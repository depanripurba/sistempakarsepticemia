<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Master extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Jika tidak ada user yang berhasil login, kembalikan ke halaman login
		if (!$this->session->userdata('username') || $this->session->userdata('role')!=='Admin'){
			redirect('auth');
		}
		// Load Model
		$this->load->model('Penyakit_model');
		$this->load->model('Gejala_model');
		$this->load->model('Pasien_model');
		$this->load->model('Basis_model');
		$this->load->model('Konsultasi_model');
		// Load FPDF (libraries)
		$this->load->library('Pdf');
	}


	public function index()
	{
		$data['aktif'] = 'home';
		$data['judul'] = 'SP Theorema Bayes - Dashboard';
		// NumRows
		$this->db->from('tbl_gejala');
		$data['gejala'] = $this->db->count_all_results();
		$this->db->from('tbl_penyakit');
		$data['penyakit'] = $this->db->count_all_results();
		$this->db->from('tbl_konsultasi');
		$data['pasien'] = $this->db->count_all_results();
		$this->db->from('tbl_basispengetahuan');
		$data['basispengetahuan'] = $this->db->count_all_results();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template/footer');
		// }
	}

	public function datagejala()
	{
		$data['aktif'] = 'datagejala';
		$data['judul'] = 'SP Theorema Bayes Endokrin - Data Gejala';
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datagejala',$data);
		$this->load->view('template/footer');
	}

	public function datapenyakit()
	{
		$data['penyakit'] = $this->Penyakit_model->getAllData();
		$data['aktif'] = 'datapenyakit';
		$data['judul'] = 'Data Penyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datapenyakit',$data);
		$this->load->view('template/footer');
	}
	public function basispengetahuan()
	{

		$data['aktif'] = 'basispengetahuan';
		$data['judul'] = 'Basis Pengetahuan';
		$data['basis'] = $this->Basis_model->getAllData();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/basispengetahuan',$data);
		$this->load->view('template/footer');
	}
	public function datapasien()
	{
		$data['aktif'] = 'datapasien';
		$data['judul'] = 'Data Pasien';
		$data['pasien'] = $this->Pasien_model->getAllData();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datapasien',$data);
		$this->load->view('template/footer');
	}

	public function delete_pasien($id){
		$this->Pasien_model->deleteData($id);
		$this->session->set_flashdata('message', '
		<div class="alert alert-danger" role="alert">
			Anda Telah Menghapus Data Pasien
		</div>
		');
		redirect('/datapasien');
	}

	public function tambahdatagejala()
	{
		$data['kode'] = $this->Gejala_model->getcode();
		$data['aktif'] = 'datagejala';
		$data['judul'] = 'Form Tambah Data Gejala';
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahdatagejala',$data);
		$this->load->view('template/footer');
	}

	public function ubahdatagejala($id)
	{
		$data['aktif'] = 'datagejala';
		$data['judul'] = 'Form Ubah Data Gejala';
		$data['selected'] = $this->Gejala_model->selectGejala($id);
		// $data['kode_gejala'] = $this->Gejala_model->getNewGejala();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formubahdatagejala',$data);
		$this->load->view('template/footer');
	}

	public function addGejala(){
		$data_to_insert = array(
			'kode_gejala' => $_POST['kode_gejala'],
			'nama_gejala' => $_POST['nama_gejala'],
		);
		$insertGejala = $this->Gejala_model->insertGejala($data_to_insert);
		if($insertGejala===null){
			$this->session->set_flashdata('message', '
			<div class="alert alert-success" role="alert">
				Anda Berhasil Menambah Data Gejala
			</div>
			');
			redirect('/datagejala');
		}else{
			redirect('/tambahdatagejala');
		}
	}

	public function edtGejala(){
		$data_to_update=array(
			'nama_gejala' => $_POST['nama_gejala'],
		);

		$this->db->where('kode_gejala', $_POST['kode_gejala']);
		$update = $this->db->update('tbl_gejala', $data_to_update);

		if($update){
			$this->session->set_flashdata('message', '
			<div class="alert alert-info" role="alert">
				Anda Berhasil Merubah Data Gejala
			</div>
			');
			redirect('/datagejala');
		}
	}

	public function deleteGejala($id){
		$this->Gejala_model->deleteGejala($id);
		$this->session->set_flashdata('message', '
		<div class="alert alert-danger" role="alert">
		Data Gejala Berhasil Di Hapus
		</div>');
		redirect('/datagejala');
	}

	public function tambahdatapenyakit()
	{
		$data['kode'] = $this->Penyakit_model->getcode();
		$data['aktif'] = 'datapenyakit';
		$data['judul'] = 'Form Tambah Data Penyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahdatapenyakit');
		$this->load->view('template/footer');
	}

	public function addpenyakit()
	{
		$kodepenyakit = $_POST['kode_penyakit'];
		$namapenyakit = $_POST['nama_penyakit'];
		$solusi = $_POST['solusi'];
		$tambahpenyakitbaru = $this->Penyakit_model->insertData($kodepenyakit, $namapenyakit, $solusi);
		if ($tambahpenyakitbaru) {
			$this->session->set_flashdata('message', '
			<div class="alert alert-success" role="alert">
				Anda Berhasil Menambah Data Penyakit ke dalam database
			</div>
			');
			redirect(base_url('datapenyakit'));
		}
	}

	public function editpenyakit($id)
	{
		$data['dataedit'] = $this->Penyakit_model->ambildata($id);
		$data['judul'] = 'Form Edit Penyakit';
		$data['aktif'] = 'datapenyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/editpenyakit',$data);
		$this->load->view('template/footer');
	}

	public function posteditpenyakit()
	{
		$cek = $this->Penyakit_model->updatedata();
		if ($cek) {
			$this->session->set_flashdata('message', '
			<div class="alert alert-info" role="alert">
				Anda Berhasil Merubah Data Penyakit
			</div>
			');
			redirect(base_url('datapenyakit'));
		}
	}

	public function hapuspenyakit($kodepenyakit)
	{
		$cek = $this->Penyakit_model->hapusdata($kodepenyakit);
		if ($cek) {
			$this->session->set_flashdata('message', '
			<div class="alert alert-danger" role="alert">
				Anda Berhasil Menghapus Data Penyakit
			</div>
			');
			redirect(base_url('datapenyakit'));
		}
	}

	public function tambahdatapengetahuan()
	{
		$data['penyakit'] = $this->Penyakit_model->getAllspes();
		$data['gejala'] = $this->Gejala_model->getAllspes();
		$data['judul'] = 'Form Add Basis Pengetahuan';
		$data['aktif'] = 'basispengetahuan';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahbasis',$data);
		$this->load->view('template/footer');
	}
	
	public function diagnosa(){
		$data['judul']='Diagnosa Pasien';
		$data['aktif']='home';
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('user/diagnosa',$data);
		$this->load->view('template/footer',$data);
	}	public function postpengetahuan()
	{

		$cek = $this->Basis_model->insertData($this->input->post('kode_gejala'),$this->input->post('kode_penyakit'),$this->input->post('nilai'));
		if ($cek) {
			$this->session->set_flashdata('berhasil', 'Basis pengetahuan berhasil di tambahkan');
			redirect(base_url('basispengetahuan'));
		}
	}
	public function editbasis($id)
	{
		$data['aktif'] = 'basispengetahuan';
		$data['judul'] = 'Edit Basis Pegetahuan';
		$data['id'] =$id;
		$data['basis'] = $this->Basis_model->selectBasis($id);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/editbasis',$data);
		$this->load->view('template/footer');
	}
	public function postupdatebasis()
	{
		$cek = $this->Basis_model->updatedata();
		if ($cek) {
			$this->session->set_flashdata('berhasil', 'Basis Pengetahuan Berhasil di update');
			redirect(base_url('basispengetahuan'));
		}
	}
	
	public function hapusbasis($id)
	{
		$cek = $this->Basis_model->hapusdata($id);
		if ($cek) {
			$this->session->set_flashdata('deleted', 'berhasil dihapus');
			redirect(base_url('basispengetahuan'));
		}
	}

	public function konsultasi()
	{

		$data['aktif'] = 'konsultasi';
		$data['judul'] = 'Riwayat Konsultasi';
		$data['riwayat'] = $this->Konsultasi_model->getAllData();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datakonsultasi',$data);
		$this->load->view('template/footer');
	}

	public function deleteKonsultasi($kode){
		$this->Konsultasi_model->delteKonsultasi($kode);
		$this->session->set_flashdata('message', '
		<div class="alert alert-danger" role="alert">
			Data Konsultasi Berhasil Di Hapus
		</div>');
		redirect('master/konsultasi');
	}

	public function laporan(){
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
		$report = $this->Konsultasi_model->getAllData();
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();
		$logo_path = FCPATH . 'assets/img/logo.png';
		$pdf->Image($logo_path,15,11,15);
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(0,7,'DINAS PERKEBUNAN DAN PETERNAKAN',0,1,'C');
		$pdf->Cell(0,6,'PROVINSI SUMATERA UTARA',0,1,'C');
		$pdf->SetFont('Arial','B',9);
		$pdf->Cell(0,7,'Jl. Jenderal Besar A.H. Nasution No. 24, Pangkalan Masyhur, Kec. Medan',0,1,'C');
		$pdf->Cell(0,2,'Johor, Kota Medan, Sumatera Utara',0,1,'C');
		$pdf->Line(0,37,210,37);
		$pdf->Line(0,37.5,210,37.5);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,5,'',0,1);
		$pdf->Cell(0,25,'LAPORAN HASIL RIWAYAT KONSULTASI',0,1,'C');

		// New Table
		$pdf->Cell(100,6,'Data Konsultasi',1,0,'C');
		$pdf->Cell(90,6,'Data Diagnosa',1,1,'C');
		$pdf->Cell(10,6,'No',1,0,'C');
		$pdf->Cell(30,6,'Nama',1,0,'C');
		$pdf->Cell(30,6,'No. Telp',1,0,'C');
		$pdf->Cell(30,6,'Alamat',1,0,'C');
		$pdf->Cell(30,6,'Diagnosa',1,0,'C');
		$pdf->Cell(35,6,'Solusi',1,0,'C');
		$pdf->Cell(25,6,'Tanggal',1,1,'C');
		$pdf->SetFont('Arial','',10);

		// Row Data
		$no=0;
		foreach ($report as $data){
			$no++;

			// Special Case pada nama

			$cellWidth  = 30;
			$cellHeight = 6;

			// Periksa Apakah Teksnya melebihu kolom?
			if($data->nama < $cellWidth){
				// Jika Tidak
				$line = 1;
			}else{
				// Jika Ya,
				// Maka hitung ketinggian yang dibutuhkan untuk sel akan dirapikan dengan
				// Memisahkan teks agar sesuai dengan lebar sel
				// lalu kemudian Hitung berapa banayak baris yang dibutuhkan agar teks pas dengan sel

				$textLength=strlen($data->nama);	//total panjang teks
				$errMargin=5;		//margin kesalahan lebar sel, untuk jaga-jaga
				$startChar=0;		//posisi awal karakter untuk setiap baris
				$maxChar=0;			//karakter maksimum dalam satu baris, yang akan ditambahkan nanti
				$textArray=array();	//untuk menampung data untuk setiap baris
				$tmpString="";		//untuk menampung teks untuk setiap baris (sementara)

				while($startChar < $textLength){
					// Perulangan Sampai Akhir Teks
					while($pdf->GetStringWidth($tmpString) < ($cellWidth-$errMargin) && ($startChar + $maxChar) < $textLength){
						$maxChar++;
						$tmpString=substr($data->nama,$startChar,$maxChar);
					}
					// Pindah ke baris berikutnya
					$startChar=$startChar+$maxChar;
					// Kemudian tambahkan ke dalam array sehingga kita tahu berapa banyak baris yang dibutuhkan
					array_push($textArray,$tmpString);
					// Reset variable penampung
					$maxChar=0;
					$tmpString='';
				}
				// Dapatkan jumlah baris
				$line=count($textArray);
			}

			// Tinggi cell solusi
			$solusi = $data->solusi;
			$pecah = explode('+',$solusi);
			$h = count($pecah)-1;

			// Special Case pada sub_task
			$pdf->Cell(10,($line * ($cellHeight * $h)),$no,1,0, 'C');

			//memanfaatkan MultiCell sebagai ganti Cell
			//atur posisi xy untuk sel berikutnya menjadi di sebelahnya.
			//ingat posisi x dan y sebelum menulis MultiCell
			$xPos=$pdf->GetX();
			$yPos=$pdf->GetY();
			$pdf->MultiCell($cellWidth,($cellHeight * $h),$data->nama,1);
			//kembalikan posisi untuk sel berikutnya di samping MultiCell 
			//dan offset x dengan lebar MultiCell
			$pdf->SetXY($xPos + $cellWidth , $yPos);
	
			$pdf->Cell(30,($line * ($cellHeight * $h)),$data->telepon,1,0,'C');
			$pdf->Cell(30,($line * ($cellHeight * $h)),$data->alamat,1,0,'C');
			$pdf->Cell(30,($line * ($cellHeight * $h)),$data->penyakit,1,0,'C');
			
			// Solusi

			$xPos=$pdf->GetX();
			$yPos=$pdf->GetY();
			$pdf->MultiCell(35,($line * $cellHeight),$data->solusi,1);
			$pdf->SetXY($xPos+5 + $cellWidth , $yPos);
			// Dapat disimpulkan 1 baris solusi, tinggi cellnya 6;

			$pdf->Cell(25,($line * ($cellHeight * $h)),$data->tanggal,1,1,'C');
		}
		$pdf->Cell(190,10,'',0,1,'R');
		$pdf->Cell(190,10,'Mengetahui',0,1,'R');
		$pdf->Cell(190,0,'Dokter Spesialis Hewan',0,1,'R');
		$pdf->Cell(190,20,'',0,1,'R');
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(190,20,'drh. Lia Brutu',0,1,'R');
		$pdf->Output();
	}

	public function profile(){
		$data['aktif'] = 'home';
		$data['judul'] = 'SP Theorema Bayes Endokrin - Dashboard';

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/profile',$data);
		$this->load->view('template/footer');
		// }
	}
}
