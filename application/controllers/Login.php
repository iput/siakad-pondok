<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Login extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('ModLogin');
 	}

 	public function filter($data)
 	{
 		$data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
 		return $data;
 		unset($data);
 	}

 	public function setLogin()
 	{
 		$username = $this->input->post('txtusername');
 		$username = $this->filter($username);

 		$password = $this->input->post('txtpassword');
 		$password = md5($password);
 		$password = $this->filter($password);

 		$level = $this->input->post('levelPengguna');
 		$cek = $this->ModLogin->Login($username, $password, $level)->row();
 		if ($cek>0) {
 			$newpassword=$cek->passwordlog;
 			$newuser=$cek->username;
 			if (($username==$newuser)) {
 				if (($password==$newpassword)) {
 					if ($cek->level=='alumni') {
 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->username,
	 						'idLog'=>$cek->idLog,
	 						'password'=>$cek->passwordlog);
	 					$this->session->set_userdata($arraySession);
	 					redirect('Alumni/Alumni');
 				}else if ($cek->level=='santri'){
 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->username,
	 						'idLog'=>$cek->idLog,
	 						'password'=>$cek->passwordlog);
	 					$this->session->set_userdata($arraySession);
	 					redirect('Santri/Santri');

	 				}else if($cek->level=='pengurusputra'){
	 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->username,
	 						'idLog'=>$cek->idLog,
	 						'password'=>$cek->passwordlog);
	 					$this->session->set_userdata($arraySession);
	 					redirect('Putra/Putra');
	 				}else if($cek->level=='pengurusputri'){
	 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->username,
	 						'idLog'=>$cek->idLog,
	 						'password'=>$cek->passwordlog);
	 					$this->session->set_userdata($arraySession);
	 					redirect('Putri/Putri');

	 				}else if($cek->level=='superadmin'){
	 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->username,
	 						'idLog'=>$cek->idLog,
	 						'password'=>$cek->passwordlog);
	 					$this->session->set_userdata($arraySession);
	 					redirect('Dashboard');

	 				}else{
	 					$this->session->set_flashdata('gagal','<i class="fa fa-warning"></i>Data level tidak terdaftar dalam sistem');
 						redirect('actLanding/Login');
	 				}	
 				}else{
 					$this->session->set_flashdata('gagal','<i class="fa fa-warning"></i>Password tidak cocok');
 						redirect('actLanding/Login');
 				}
 			}else{
 				$this->session->set_flashdata('gagal','<i class="fa fa-warning"></i>Data tidak terdaftar dalam sistem');
 				redirect('actLanding/Login');
 			}
 		}else{
 			$this->session->set_flashdata('gagal','<i class="fa fa-warning"></i>&nbsp;Data tidak terdaftar');
 			redirect('actLanding/Login');
 		}
 	}

 	public function Logout()
 	{
 		$this->session->sess_destroy();
        redirect('actLanding');
 	}
 } ?>