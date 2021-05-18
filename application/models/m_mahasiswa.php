<?php
class M_mahasiswa extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tb_mahasiswa');
	}

	public function input_data($data)
	{
		$this->db->insert('tb_mahasiswa', $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
