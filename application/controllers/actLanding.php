<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 *
 */
 class ActLanding extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('ModRegister');
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
 		$this->load->view('Landing');
 	}

 	public function Login()
 	{
 		$this->load->view('Login');
 	}

 	public function AddRegister()
 	{

 		$nickname = strlen($this->input->post('namaPanggilan'));
 		if ($nickname<4) {
 			$this->session->set_flashdata('gagal','Nama panggilan kurang dari 4 karakter. Harap tambahkan karakter untuk akses username');
 			redirect('ActLanding');
 		}else{

 		$idreg  = "STR00".$this->random(3);
 		$data['id']=$idreg;
 		$data['nama']=$this->input->post('namaLengkap');
 		$data['panggilan']=$this->input->post('namaPanggilan');
 		$data['telepon']=$this->input->post('teleponBaru');

 		$this->ModRegister->AddRegister($data);

 		$userlog['idlog']="LOG00".$this->random(3);
 		$userlog['santri']=$idreg;
 		$userlog['username']=$this->input->post('namaPanggilan');
 		$userlog['password']=md5(str_replace(" ", "", $this->input->post('teleponBaru')));
 		$userlog['waktu']=date('Y:m:d H:m:i');
 		$userlog['level']='santri';
 		$userlog['key']=str_replace(" ", "", $this->input->post('teleponBaru'));

 		$this->ModRegister->createUserlog($userlog);
 		$this->session->set_flashdata('sukses','<i class="fa fa-info-circle"></i> Data anda berhasil terdaftar kedalam sistem, gunakan nama panggilan sebagai username dan  nomor telepon sebagai password untuk login');
 		redirect('ActLanding');
 		unset($idreg, $modul, $data);
 	}
 	}

 	public function TambahkanSaran()
 	{
 		$idsaran = "SARAN".$this->random(3);
 		$data['id']=$idsaran;
 		$data['nama']=$this->input->post('contact_name');
 		$data['email']=$this->input->post('contact_email');
 		$data['tentang']=$this->input->post('contact_subject');
 		$data['konten'] = $this->input->post('contact_message');
 		$data['tanggal']=date('Y:m:d');
 		$data['status']='0';
 		$this->ModRegister->AddSaran($data);
 		$this->session->set_flashdata('sukses','Terima kasih atas saran yang anda berikan. semoga Allah SWT membalas kebaikan anda');
 		redirect('ActLanding');
 		unset($data, $idsaran);
 	}
 } ?>
