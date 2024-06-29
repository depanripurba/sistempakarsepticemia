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
		$diagnosa = $this->Konsultasi_model->selectData($kode);
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
		// $report = $this->Admin_model->getTaskArea($id_area);
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
		$pdf->Cell(0,25,'Laporan Hasil Diagnosa Penyakit Food',0,1,'C');
		$pdf->Cell(0,-13,'And Mouth Disease Pada Domba',0,1,'C');
		$pdf->Cell(10,20,'',0,1);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(50,10,'Kode Konsultasi',0,0, 'B');
		$pdf->Cell(5,10,':',0,0, 'B');
		$pdf->Cell(0,10,$diagnosa[0]->kode_konsultasi,0,1, 'B');
		$pdf->Cell(50,10,'Nama Petani',0,0, 'B');
		$pdf->Cell(5,10,':',0,0, 'B');
		$pdf->Cell(0,10,$diagnosa[0]->nama,0,1, 'B');
		// Info
		$pdf->Cell(50,10,'No Telepon',0,0, 'B');
		$pdf->Cell(5,10,':',0,0, 'B');
		$pdf->Cell(0,10,$diagnosa[0]->telepon,0,1, 'B');
		$pdf->SetFillColor(255,255,255);
		$pdf->Cell(50,10,'Alamat',0,0, 'B');
		$pdf->Cell(5,10,':',0,0, 'B');
		$pdf->Cell(0,10,$diagnosa[0]->alamat,0,1, 'B');
		$pdf->Cell(50,10,'Penyakit',0,0, 'B');
		$pdf->Cell(5,10,':',0,0, 'B');
		$pdf->Cell(0,10,$diagnosa[0]->penyakit,0,1, 'B');

		// Solusi
		$solusi = explode('+',$diagnosa[0]->solusi);

		for($i=1;$i<count($solusi);$i++){
			$pdf->Cell(50,10,$i === 1 ? 'Solusi' : '',0,0, 'B');
			$pdf->Cell(5,8,$i === 1 ? ':' : '',0,0, 'B');
			$pdf->Cell(0,8,$solusi[$i],0,1, 'B');
		}
		
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','B',10);
		// Info
		$dateNow = date("d-m-Y");
		$pdf->Cell(190,30,'Medan, '.$dateNow,0,1,'R');
		$pdf->Cell(190,20,'Admin Sistem Pakar FMD',0,1,'R');
		$pdf->Output();
	}
}
