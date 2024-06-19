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
	}

	public function index(){
		$data['judul']='SISTEM PAKAR - HOME';
		$this->load->view('user/home',$data);
	}

	public function diagnosa(){
		$data['judul']='SISTEM PAKAR DIAGNOSA ENDOKRIN - DIAGNOSA USER';
		$data['aktif']='Diagnosa Pasien';
		$data['user']=$this->session->userdata();
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		$this->load->view('template/header',$data);
		$this->load->view('user/diagnosa',$data);
		$this->load->view('template/footer',$data);
	}

	public function cetakhasil()
	{
		$this->load->view('user/cetakhasil');
	}
}
