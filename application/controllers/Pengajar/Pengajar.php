<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pengajar/home');
	}

}

/* End of file Pengajar.php */
/* Location: ./application/controllers/Pengajar/Pengajar.php */