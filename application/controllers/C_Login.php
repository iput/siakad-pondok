<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class C_Login extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_login');
 	}

 	public function filter($data)
 	{
 		$data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
 		return $data;
 		unset($data);
 	}

 	public function cek_login()
 	{
 		$username = $this->input->post('txtusername');
 		$username = $this->filter($username);

 		$password = $this->input->post('txtpassword');
 		$password = $this->filter($password);
 		// $username = strip_tags($this->input->post('txtusername'));
   //  	$password = strip_tags($this->input->post('txtpassword'));

 		$level = $this->input->post('levelPengguna');

 		$cek = $this->M_login->login($username, $level)->row();
 		if ($cek) {
 		$newpassword = base64_decode($cek->password_santri);
 		if (($cek->status==1)) {
 			if ($cek->level==2) {
 				if ($cek->jenis_kelamin==1) {
	 				if ($password==$newpassword) {
	 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->nama_panggilan,
	 						'email'=>$cek->email_santri,
	 						'level'=>$cek->level,
	 						'password'=>$newpassword);
	 					$this->session->set_userdata($arraySession);
	 					redirect('Putra/Putra');
	 				}else{
	 					$this->session->set_flashdata('gagal','Kombinasi Kata Sandi dan username salah');
	 					redirect('C_landing/login');
	 				}
 				}else if($cek->jenis_kelamin==0){
	 				if ($password==$newpassword) {
	 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->nama_panggilan,
	 						'email'=>$cek->email_santri,
	 						'level'=>$cek->level,
	 						'password'=>$newpassword);
	 					$this->session->set_userdata($arraySession);
	 					redirect('Putri/Putri');
	 				}else{
	 					$this->session->set_flashdata('gagal','Kombinasi Kata Sandi dan username salah');
	 					redirect('C_landing/login');
	 				}
 				}else{
	 				$this->session->set_flashdata('gagal','Kesalahan cek jenis pengurus');
	 				redirect('C_landing/login');
 				}
 			} else if ($cek->level==1) {
 				if ($password==$newpassword) {
 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->nama_panggilan,
	 						'email'=>$cek->email_santri,
	 						'level'=>$cek->level,
	 						'password'=>$newpassword);
	 					$this->session->set_userdata($arraySession);
 					redirect('Santri/Santri');
 				}else{
 					$this->session->set_flashdata('gagal','Kombinasi Kata Sandi dan username salah');
	 				redirect('C_landing/login');
 				}
 			}else if ($cek->level==0) {
 				if ($password==$newpassword) {
 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->nama_panggilan,
	 						'email'=>$cek->email_santri,
	 						'level'=>$cek->level,
	 						'password'=>$newpassword);
	 					$this->session->set_userdata($arraySession);
 					redirect('Santri/Santri');
 				}else{
 					$this->session->set_flashdata('gagal','Kombinasi Kata Sandi dan username salah');
	 				redirect('C_landing/login');
 				}
 			}else if($cek->level==3){
 				if ($password==$newpassword) {
 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->nama_panggilan,
	 						'email'=>$cek->email_santri,
	 						'level'=>$cek->level,
	 						'password'=>$newpassword);
	 					$this->session->set_userdata($arraySession);
 					redirect('Dashboard');
 				}else{
 					$this->session->set_flashdata('gagal','Kombinasi Kata Sandi dan username salah');
	 				redirect('C_landing/login');
 				}
 			}else{
 				$this->session->set_flashdata('gagal','Kombinasi level tidak terpenuhi');
	 			redirect('C_landing/login');
 			}
 		}else if ($cek->status==0) {
 			if ($cek->level==0) {
 				if ($password==$newpassword) {
 					$arraySession = array(
	 						'iduser'=>$cek->id_santri,
	 						'username'=>$cek->nama_panggilan,
	 						'email'=>$cek->email_santri,
	 						'level'=>$cek->level,
	 						'password'=>$newpassword);
	 					$this->session->set_userdata($arraySession);
 					redirect('Alumni/Alumni');
 				}else{
 					$this->session->set_flashdata('gagal','Kombinasi Kata Sandi dan username salah');
	 				redirect('C_landing/login');
 				}
 			}else{
 				$this->session->set_flashdata('gagal','Anda tidak terdaftar dalam sistem');
	 				redirect('C_landing/login');
 			}
 		}
 		}else{
 			$this->session->set_flashdata('gagal','Data tidak sesuai');
 			redirect('C_landing/login');
 		}
 	}

 	public function logout()
 	{
 		$this->session->sess_destroy();
        redirect('C_landing');
 	}
 } ?>