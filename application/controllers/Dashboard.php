<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Dashboard extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('ModSantri');
 		$this->load->model('ModAlumni');
        $this->load->model('ModSaBa');
        $this->load->model('ModInformasi');
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
 			$this->load->view('Dashboard');
 		}else{
 			redirect('actLanding');
 		}
 	}

 	public function SantriBaru()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='santri_baru';
 		$data['data_santri']= $this->ModSantri->SemuaSantri();
 		$this->load->view('Dashboard', $data);
 		unset($data);
 		}else{
 			redirect('actLanding');
 		}
 	}

 	public function Alumni()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page'] = 'data_alumni';
 			$data['master_alumni']=$this->ModAlumni->DataAlumni();
 			$this->load->view('Dashboard', $data);
 			unset($data);	
 		}else{
 			redirect('actLanding');
 		}
 		
 	}

 	public function TambahSantri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page'] = 'tambah_santri';
 			$this->load->view('Dashboard', $data);
 			unset($data); 			
 		}else{
 			redirect('actLanding');
 		}
 	}

 	public function Pengurus()
 	{
 		if ($this->session->userdata('iduser')AND($this->session->userdata('username'))) {
 			$data['page']='dataPengurus';
 			$data['santriaktif']=$this->ModSantri->calonPengurus();
 			$data['pengurus']=$this->ModSantri->semuaPengurus();
 			$this->load->view('Dashboard', $data);
 		}else{
 			redirect('actLanding');
 		}
 	}

     public function myProfile(){
        if(($this->session->userdata('iduser'))AND ($this->session->userdata('username'))){
            $data['page']='profileDiri';
            $data['profileku']=$this->ModSaBa->DetailSantri($this->session->userdata('iduser'))->row();
            $data['myWali']=$this->ModSaBa->DetailWali($this->session->userdata('iduser'))->row();
            $data['myEdu']=$this->ModSaBa->DetailEdu($this->session->userdata('iduser'))->row();
            $this->load->view('Dashboard', $data);
        }else{
            redirect('actLanding');
        }
     }

     public function kotakSaran()
     {
     	if(($this->session->userdata('iduser'))AND ($this->session->userdata('username'))){
     		$this->load->model('ModRegister');
            $data['page']='kotakSaran';
            $data['saranku']=$this->ModRegister->SaranMasuk();
            $this->load->view('Dashboard', $data);
        }else{
            redirect('actLanding');
        }
     }

     public function newBerita()
     {
         if(($this->session->userdata('iduser'))AND ($this->session->userdata('username'))){
            $data['page']='beritaterbaru';
            $data['datainfo']=$this->ModInformasi->semuaInformasi();
            $this->load->view('Dashboard', $data);
        }else{
            redirect('actLanding');
        }
     }

     public function tambahInfo()
     {
         $data['id']=$this->random(8);
         $data['judul']=$this->input->post('judulInfo');
         $data['penulis']=$this->session->userdata('username');
         $data['tanggal']=date('Y:m:d H:m:i');
         $data['konten']=$this->input->post('isiInfo');

         $this->ModInformasi->tambahInformasi($data);
         $this->session->set_flashdata('sukses','<i class="fa fa-exclamation-circle"></i> Data informasi berhasil didistribusikan');
         redirect('Dashboard/newBerita');
     }

     public function hapusInformasi($id)
     {
         $data = $this->ModInformasi->hapusInformasi($id);
         if ($data) {
             $this->session->set_flashdata('sukses','Data berhasil dihapus');
             redirect('Dashboard/newBerita');
         }
     }
 } ?>