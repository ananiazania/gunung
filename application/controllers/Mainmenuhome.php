<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mainmenuhome extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){
		$this->render_page('home');
	}
 
	public function masuk(){
		$this->render_page('generic');
	}
 
	public function kontakkami(){
		$this->render_page('elements');
	}
}
