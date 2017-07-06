<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Alumni extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$this->load->view('alumni/alumni');
 		}else{
 			redirect('C_landing/login');
 		}
 	}
 } ?>