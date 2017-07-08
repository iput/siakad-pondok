<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class C_landing extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_register');
 	}
 	public function random($panjang) {
        $karakter = '1234567890987654321';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        return $string;
    }

 	public function index()
 	{
 		$this->load->view('landing');
 	}

 	public function login()
 	{
 		$this->load->view('login');
 	}

 	public function add_register()
 	{
 		$idreg  = "STR00".$this->random(3);
 		$modul=$this->input->post('tambahModul');
 		$level='';
 		if ($modul==1) {
 			$level=1;
 		}
 		if($modul==0){
 			$level=0;
 		}
 		$data['id']=$idreg;
 		$data['nama']=$this->input->post('namaLengkap');
 		$data['panggilan']=$this->input->post('namaPanggilan');
 		$data['telepon']=$this->input->post('teleponBaru');
 		$data['alamat']=$this->input->post('alamatLengkap');
 		$data['password']=base64_encode($this->input->post('teleponBaru'));
 		$data['status']=$this->input->post('tambahModul');
 		$data['level']=$level;

 		$this->M_register->add_register($data);
 		
 		$wali['wali']="WALI0".$this->random(3);
 		$wali['santri']=$idreg;
 		$this->M_register->tambahWali($wali);

 		$edu['edu']="EDU00".$this->random(3);
 		$edu['santri']=$idreg;
		$this->M_register->tambahPendidikan($edu);
 		$this->session->set_flashdata('sukses','Data anda berhasil terdaftar kedalam sistem, gunakan nama panggilan sebagai username dan  nomor telepon sebagai password untuk login');
 		redirect('C_landing');
 		unset($idreg, $modul, $data, $edu, $wali);
 	}

 	public function tambahkan_saran()
 	{
 		$idsaran = "SARAN".$this->random(3);
 		$data['id']=$idsaran;
 		$data['nama']=$this->input->post('contact_name');
 		$data['email']=$this->input->post('contact_email');
 		$data['tentang']=$this->input->post('contact_subject');
 		$data['konten'] = $this->input->post('contact_message');
 		$data['tanggal']=date('Y:m:d');
 		$data['status']='0';
 		$this->M_register->add_saran($data);
 		$this->session->set_flashdata('sukses','Terima kasih atas saran yang anda berikan. semoga Allah SWT membalas kebaikan anda');
 		redirect('C_landing');
 		unset($data, $idsaran);
 	}
 } ?>