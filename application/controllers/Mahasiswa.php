<?php

class Mahasiswa extends CI_Controller{
	public function index()
	{
		$data['mahasiswa'] =$this->m_mahasiswa->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('mahasiswa', $data);
		$this->load->view('templates/footer');
	}
}
