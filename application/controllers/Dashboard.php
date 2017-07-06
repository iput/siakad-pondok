<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Dashboard extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_santri');
 		$this->load->model('M_Alumni');
 	}

 	public function index()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$this->load->view('dashboard');
 		}else{
 			redirect('C_landing');
 		}
 	}

 	public function santri_baru()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='santri_baru';
 		$data['data_santri']= $this->M_santri->semua_santri();
 		$this->load->view('Dashboard', $data);
 		unset($data);
 		}else{
 			redirect('C_landing');
 		}
 	}

 	public function alumni()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page'] = 'data_alumni';
 			$data['master_alumni']=$this->M_Alumni->data_alumni();
 			$this->load->view('Dashboard', $data);
 			unset($data);	
 		}else{
 			redirect('C_landing');
 		}
 		
 	}

 	public function tambah_santri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page'] = 'tambah_santri';
 			$this->load->view('Dashboard', $data);
 			unset($data); 			
 		}else{
 			redirect('C_landing');
 		}

 	}
 } ?>