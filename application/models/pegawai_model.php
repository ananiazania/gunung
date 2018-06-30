<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insertData($value='')
	{
		$data = array(
			'namaPegawai' => $this->input->post('nama')
			'alamatPegawai' => $this->input->post('alamat')
			'tanggalLahir' => $this->input->post('tanggallahir')

			 );
		$this->db->insert('pegawai', $data);
	}

}

/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */