<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Alumni extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_SaBa');
 		$this->load->model('M_Santri');
 		$this->load->model('M_Register');
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
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['dataku']=$this->M_SaBa->detailSantri($this->session->userdata('iduser'))->row();
 			$data['wali']=$this->M_SaBa->detailWali($this->session->userdata('iduser'))->row();
 			$data['edu']=$this->M_SaBa->detailEdu($this->session->userdata('iduser'))->row();
 			$this->load->view('Alumni/Alumni', $data);
 			unset($data);
 		}
 	}

 	public function DetilDiri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='detaildiri';
 			$data['dataku']=$this->M_SaBa->detailSantri($this->session->userdata('iduser'))->row();
 			$this->load->view('Alumni/Alumni', $data);
 			unset($data);
 		}
 	}

 	public function WaliSantri()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='walisantri';
 			$data['wali']=$this->M_SaBa->DetailWali($this->session->userdata('iduser'))->row();
 			$this->load->view('Alumni/Alumni', $data);
 			unset($data);
 		}
 	}

 	public function UpdateDataSantri()
 	{
 		$idSantri = $this->input->post('detailID');
 		$data['nama']=$this->input->post('detilNamaLengkap');
 		$data['panggilan']=$this->input->post('detilNamapanggilan');
 		$data['kelahiran']=$this->input->post('detilKelahiran');
 		$data['tgl_lahir']=$this->input->post('detilTglLahir');
 		$data['kelamin']=$this->input->post('detilgender');
 		$data['alamat']=$this->input->post('detilAlamat');
 		$data['telpon']=$this->input->post('detiltelepon');
 		$data['email']=$this->input->post('detilemail');
 		$data['facebook']=$this->input->post('detilfacebook');
 		$data['tahun_masuk']=$this->input->post('detilmasuk');
 		$data['tahun_boyong']=$this->input->post('detilboyong');
 		$data['password']=base64_encode($this->input->post('detilpassword'));
 		$this->M_SaBa->Update_Santri($idSantri, $data);
 		$this->session->set_flashdata('sukses','Data santri berhasil di update');
 		redirect('Alumni/Alumni');
 		unset($idSantri, $data);
 	}
 	public function UpdateDataWali()
 	{
 		$idwali = $this->input->post('idwali');
 		$data['nmayah'] = $this->input->post('waliAyah');
 		$data['pkjayah'] = $this->input->post('pkjAyah');
 		$data['almtayah']= $this->input->post('almtAyah');
 		$data['tlpayah'] = $this->input->post('hpAyah');
 		$data['nmibu'] = $this->input->post('waliIbu');
 		$data['pkjibu'] = $this->input->post('pkjIbu');
 		$data['almtibu'] = $this->input->post('almtIbu');
 		$data['tlpibu'] = $this->input->post('hpIbu');
 		$this->M_SaBa->UpdateWali($idwali, $data);
 		$this->session->set_flashdata('sukses','Data santri berhasil di update');
 		redirect('Alumni/Alumni');
 		unset($data, $idwali);
 	}

 	public function RiwayatPendidikan()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='detailpendidikan';
 			$data['dataku']=$this->M_SaBa->detailEdu($this->session->userdata('iduser'))->row();
 			$this->load->view('Alumni/Alumni', $data);
 			unset($data);
 		}	
 	}

 	public function KotakSaran()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='saranmasukan';
 			$data['saranmasuk']=$this->M_Register->saranmasuk();
 			$this->load->view('Alumni/Alumni', $data);
 			unset($data);
 		}
 	}

 	public function TambahSaran()
 	{
 		$idsaran = "SARAN".$this->random(3);
 		$data['id']=$idsaran;
 		$data['nama']=$this->input->post('namaPengirim');
 		$data['email']=$this->input->post('emailPengirim');
 		$data['tentang']=$this->input->post('subjekMasukan');
 		$data['konten']=$this->input->post('isiSaran');
 		$data['tanggal']=date('Y:m:d');
 		$data['status']='0';
 		$this->M_Register->Add_Saran($data);
 		$this->session->set_flashdata('sukses','Data saran berhasil dimasukan, terimakasih atas perhatian demi kemajuan pondok ');
 		redirect('Alumni/Alumni');
 		unset($data, $idsaran);
 	}

 	public function UpdateEdukasi()
 	{
 		$idedukasi = $this->input->post('idedukasi');
 		$edu['sd']=$this->input->post('namasd');
 		$edu['almtsd']=$this->input->post('alamatsd');
 		$edu['lulussd']=$this->input->post('lulussd');
 		$edu['smp']=$this->input->post('namasmp');
 		$edu['almtsmp']=$this->input->post('alamatsmp');
 		$edu['lulussmp']=$this->input->post('lulussmp');
 		$edu['sma']=$this->input->post('namasma');
 		$edu['almtsma']=$this->input->post('alamatsma');
 		$edu['lulussma']=$this->input->post('lulussma');
 		$edu['pt']=$this->input->post('namapt');
 		$edu['jurusanpt']=$this->input->post('jurusanpt');
 		$edu['almtpt']=$this->input->post('alamatpt');
 		$edu['luluspt']=$this->input->post('luluspt');
 		$this->M_SaBa->UpdateEdu($idedukasi, $edu);
 		redirect('Alumni/Alumni');	
 		unset($edu, $idedukasi);
 	}
 } ?>