<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load Model
		$this->load->model('Pasien_model');
		$this->load->model('Gejala_model');
		$this->load->model('Konsultasi_model');
		// Load FPDF (libraries)
		$this->load->library('Pdf');
	}

	public function index(){
		$data['judul']='SISTEM PAKAR - HOME';
		$this->load->view('user/home',$data);
	}

	public function tentang(){
		$data['judul']='SISTEM PAKAR - TENTANG';
		$this->load->view('user/tentang',$data);
	}

	public function diagnosa(){
		$data['judul']='SISTEM PAKAR DIAGNOSA ENDOKRIN - DIAGNOSA USER';
		$data['aktif']='Diagnosa Pasien';
		$data['kode']=$this->Konsultasi_model->getCode();
		$data['user']=$this->session->userdata();
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		$this->load->view('template/header_user',$data);
		$this->load->view('user/diagnosa',$data);
		$this->load->view('template/footer',$data);
	}

	// public function cetakhasil()
	// {
	// 	$this->load->view('user/cetakhasil');
	// }

	public function printDiagnosa($kode){
		$this->load->library('pdf');
		$this->pdf->set_option('isRemoteEnabled', true);
		$data['diagnosa'] = $this->Konsultasi_model->selectData($kode);
		// $data['riwayat'] = $this->Riwayat_model->getAllData();
		// $customPaper = array(0,0,700,700);
		$this->pdf->setPaper('a4', 'portrait');
		$this->pdf->filename = "hasildiagnosa.pdf";
		$this->pdf->load_view('user/cetakhasil',$data);
	}

	public function searchKode() {
        $kode = $this->input->post('kode');
        
        $result = $this->Konsultasi_model->selectData($kode);
        
		// var_dump($result);
		$data = count($result);
        if ($data > 0) {
			echo json_encode(
				[
					'success' => true,
					'kode' => $kode
				]
			);
        } else {
            echo json_encode(['success' => false]);
        }
    }
}
