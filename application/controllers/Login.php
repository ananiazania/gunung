<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login_view');
	}
	public function cekDb($password)
 	{
 		$this->load->model('user');
 		$username = $this->input->post('username');
 		$result = $this->user->login($username,$password);
 		if($result){
 			$sess_array = array();
 			foreach ($result as $row) {
 				$sess_array = array(
 					'id'=>$row->id,
 					'username'=> $row->username,
 					'level' => $row->level
 				);
 				$this->session->set_userdata('logged_in',$sess_array);
 			}
 			return true;
 		}else{
 			$this->form_validation->set_message('cekDb',"Login Gagal Username dan Password Tidak Valid");
 			return false;
 		}
 	}

	// public function cekDb()
	// {
	// 	$this->load->model('user');
	// 	$username = $this->input->post('username');
	// 	$result = $this->user->Login($username,$password);
	// 	if ($result) {
	// 		$sess_array = array();
	// 		foreach ($result as $row) {
	// 			$sess_array= array(
	// 			'id'=>$row->id,
	// 			'username'=> $row->username );
			
	// 		$this->session->set_userdata('logged_in', $sess_array);
	// 		}
	// 		return true;
	// 	} else {
	// 		$this->form_validtaion->set_message('cekDb', "Login Gagal");
	// 		return FALSE;
	// 	}
		
	// }

	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username' , 'trim|required');
		$this->form_validation->set_rules('password', 'Password' , 'trim|required|callback_cekDb');
		if  ($this->form_validation->run() == FALSE) {

			$this->load->view('Login_view');

		} else 
		{
			redirect('Pegawai','refresh');
		} 
	}

	public function Logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}

	public function Registrasi()
	{
		//$this->load->view('registrasi');
      $this->load->library('form_validation');

 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('registrasi');
 		} else {
 			$this->load->model('user');
 			$this->user->InsertUser();
 			redirect('Login','refresh');
 		}
	}

	public function Daftar()
	{
		$this->load->model('user');
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('registrasi');
			# code...
		} else {
			$this->user->insertUser();
			echo '<script>alert("Anda Berhasil Daftar")</script>';

			$this->load->view('Login_view', $data, FALSE);
			# code...
		}
		# code...
	}

	

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */