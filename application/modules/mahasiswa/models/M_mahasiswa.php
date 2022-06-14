<?php 
/**
 * 
 */
class M_mahasiswa extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function get()
	{
		return $this->db->get('tbl_mahasiswa');
	}

	function insert($data)
	{
		return $this->db->insert('tbl_mahasiswa', $data);
	}

	function update($id, $data)
	{
		$this->db->where('id_mhs', $id);
		return $this->db->update('tbl_mahasiswa', $data);
	}
	function delete($id)
	{
		$this->db->where('id_mhs', $id);
		return $this->db->delete('tbl_mahasiswa');
	}
}