<?php

class Mahasiswa extends CI_Controller{
	public function index()
	{
		$data['mahasiswa'] =$this->m_mahasiswa->tampil_data()->result();
	}
}
