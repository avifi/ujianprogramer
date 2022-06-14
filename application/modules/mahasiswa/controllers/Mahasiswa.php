<?php 
/**
 * 
 */
class Mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	function index()
	{
		$data = array(
			'no' => 1,
			'mahasiswa' => $this->m_mahasiswa->get() );
		$this->load->view('v_mahasiswa', $data);
	}

	function insert()
	{
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('gender'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'agama' => $this->input->post('agama'),
			'prodi' => $this->input->post('prodi'),
			'email' => $this->input->post('email'),
			'hp' => $this->input->post('hp'),
			'asal_sekolah' => $this->input->post('asal_sekolah'),
			 );
		$this->m_mahasiswa->insert($data);
		$this->session->set_flashdata('add1', 'Data berhasil ditambahkan');
		redirect('mahasiswa');
	}

	function update($id)
	{
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('gender'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'agama' => $this->input->post('agama'),
			'prodi' => $this->input->post('prodi'),
			'email' => $this->input->post('email'),
			'hp' => $this->input->post('hp'),
			'asal_sekolah' => $this->input->post('asal_sekolah'),
			 );
		$this->m_mahasiswa->update($id, $data);
		$this->session->set_flashdata('add1', 'Data berhasil diupdate');
		redirect('mahasiswa');
	}

	function delete($id)
	{
		$this->m_mahasiswa->delete($id);
		$this->session->set_flashdata('add1', 'Data berhasil diupdate');
		redirect('mahasiswa');
	}
}