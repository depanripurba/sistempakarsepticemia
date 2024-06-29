<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getAllData()
	{
		$this->db->order_by('tanggal', 'ASC');
		$data = $this->db->get('tbl_konsultasi')->result();
		return $data;
	}

	public function selectData($kode)
	{
		$this->db->where('kode_konsultasi', $kode);
		return $this->db->get('tbl_konsultasi')->result();
	}

	public function insertKonsultasi($data){
		// Simpan Data ke dalam table Database
		$this->db->insert('tbl_konsultasi',$data);
	}

	public function getCode(){
		return $this->generateKodeKonsultasi('K0');
	}

	private function generateKodeKonsultasi($prefix)
	{
		// Mengambil data gejala dari database
		$konsultasiData = $this->db->get('tbl_konsultasi')->result();

		// Menginisialisasi variabel
		$total_konsultasi = count($konsultasiData);
		$biggestCode = 0;
		$missingCode = 0;

		// Menemukan kode gejala terbesar
		if ($total_konsultasi > 0) {
			$lastKonsultasi = $konsultasiData[$total_konsultasi - 1]->kode_konsultasi;
			$biggestCode = (int)substr($lastKonsultasi, 1);
		}

		// Mencari kode yang hilang dalam urutan
		for ($i = 1; $i <= $biggestCode; $i++) {
			$found = false;
			foreach ($konsultasiData as $gejala) {
				$currentCode = (int)substr($gejala->kode_konsultasi, 1);
				if ($currentCode === $i) {
					$found = true;
					break;
				}
			}
			if (!$found) {
				$missingCode = $i;
				break;
			}
		}

		// Menentukan bagian akhir dari kode
		$partEnd = $missingCode > 0 ? $missingCode : $biggestCode + 1;

		// Menyusun kode gejala lengkap
		$generatedCode = $prefix . $partEnd;

		// Mengatur panjang kode
		if (strlen($generatedCode) > 3) {
			$generatedCode = 'K' . $partEnd;
		}

		return $generatedCode;
	}

}