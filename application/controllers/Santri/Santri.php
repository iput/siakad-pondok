<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Santri extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_SaBa');
 	}

 	public function index()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['dataku']=$this->M_SaBa->detailSantri($this->session->userdata('iduser'))->row();
 			$data['wali']=$this->M_SaBa->detailWali($this->session->userdata('iduser'))->row();
 			$this->load->view('Santri/Santri', $data);
 		}
 	}

 	public function DetilDiri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='detaildiri';
 			$data['dataku']=$this->M_SaBa->detailSantri($this->session->userdata('iduser'))->row();
 			$this->load->view('Santri/Santri', $data);
 		}
 	}

 	public function WaliSantri()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='walisantri';
 			$data['wali']=$this->M_SaBa->detailWali($this->session->userdata('iduser'))->row();
 			$this->load->view('Santri/Santri', $data);
 		}
 	}
 } ?>