<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model{
	
	public function get_data($table, $nama = null, $order_by = null){
	    $this->db->order_by($nama, $order_by);
	    return $this->db->get($table);
	}


	public function insert_data($data, $table){
        $this->db->insert($table, $data);
    }
}