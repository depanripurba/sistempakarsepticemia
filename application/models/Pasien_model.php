<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

	// Function Get All Data
	public function getAllData() {
        // Query untuk mengambil semua data dari tabel
        $query = $this->db->get('tbl_pasien');
        // Mengembalikan hasil query dalam bentuk array
        return $query->result_array();
    }

	// Function Insert Data
    public function insertData($data) {
        // Masukkan data ke dalam tabel database
        $this->db->insert('tbl_pasien', $data);
    }

	public function selectDataUsername($username){
		$selected = $this->db->get_where('tbl_pasien', array('username' => $username))->row_array();
		return $selected;
	}

	public function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_pasien');

        // Mengembalikan jumlah baris yang terpengaruh oleh operasi penghapusan
        return $this->db->affected_rows();
	}
}
