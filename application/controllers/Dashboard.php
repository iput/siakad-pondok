<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Dashboard extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_Santri');
 		$this->load->model('M_Alumni');
 	}

 	public function index()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$this->load->view('Dashboard');
 		}else{
 			redirect('C_Landing');
 		}
 	}

 	public function Santri_Baru()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='santri_baru';
 		$data['data_santri']= $this->M_Santri->Semua_Santri();
 		$this->load->view('Dashboard', $data);
 		unset($data);
 		}else{
 			redirect('C_Landing');
 		}
 	}

 	public function Alumni()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page'] = 'data_alumni';
 			$data['master_alumni']=$this->M_Alumni->Data_Alumni();
 			$this->load->view('Dashboard', $data);
 			unset($data);	
 		}else{
 			redirect('C_Landing');
 		}
 		
 	}

 	public function Tambah_Santri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page'] = 'tambah_santri';
 			$this->load->view('Dashboard', $data);
 			unset($data); 			
 		}else{
 			redirect('C_Landing');
 		}

 	}
 } ?>