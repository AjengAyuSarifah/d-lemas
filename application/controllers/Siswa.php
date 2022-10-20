<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	 public function __construct()
     {
         parent::__construct();
         $this->load->model("m_siswa");
     }

	public function index(){
		$data = [
			'siswa' => $this->m_siswa->get_data('siswa', 'nama', 'asc')->result()
		];

		$this->load->view('v_siswa', $data);
	}

	public function tambah()
	{
		$this->load->view('v_siswa_tambah');
	}

	public function proses_tambah()
	{
		$data = [
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
		];

		$this->m_siswa->insert_data($data, 'siswa');
		redirect('siswa');
	}
}