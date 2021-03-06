<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (! $this->acl->is_public($current_controller)) {
				if (! $this->acl->is_allowed($current_controller,$data['level'])) 
				{
					redirect('Login/logout','refresh');
				}
			}
		} else {
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Jabatan', $data, FALSE);
		
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */