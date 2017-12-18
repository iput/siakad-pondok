<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Sa_Dashboard extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
        if($this->session->userdata('level')!="superadmin"){
            redirect('actLanding/Login');
        }
 		$this->load->model('ModSantri');
 		$this->load->model('ModAlumni');
        $this->load->model('ModSaBa');
        $this->load->model('ModInformasi');
 	}
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('actLanding');
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
            $data['ac1']="active";
            $data['ac2']="";
            $data['ac2_1']="";$data['ac2_2']="";$data['ac2_3']="";
            $data['ac3']="";
            $data['ac3_1']="";$data['ac3_2']="";
            $data['ac4']="";
            $data['ac4_1']="";$data['ac4_2']="";
            $data['ac5']="";$data['ac6']="";$data['ac7']="";
 			$this->load->view('sa_dashboard',$data);
 		}else{
 			redirect('actLanding');
 		}
 	}

 	public function SantriBaru()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='santri_baru';
 		$data['data_santri']= $this->ModSantri->SemuaSantri();
        $data['ac1']="";
        $data['ac2']="active";
        $data['ac2_1']="active";$data['ac2_2']="";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="";
        $data['ac4_1']="";$data['ac4_2']="";
        $data['ac5']="";$data['ac6']="";$data['ac7']="";
 		$this->load->view('sa_dashboard', $data);
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
        $data['ac1']="";
        $data['ac2']="active";
        $data['ac2_1']="";$data['ac2_2']="active";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="";
        $data['ac4_1']="";$data['ac4_2']="";
        $data['ac5']="";$data['ac6']="";$data['ac7']="";
 			$this->load->view('sa_dashboard', $data);
 			unset($data);	
 		}else{
 			redirect('actLanding');
 		}
 		
 	}

 	public function TambahSantri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page'] = 'tambah_santri';
        $data['ac1']="";
        $data['ac2']="active";
        $data['ac2_1']="active";$data['ac2_2']="";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="";
        $data['ac4_1']="";$data['ac4_2']="";
        $data['ac5']="";$data['ac6']="";$data['ac7']="";    
 			$this->load->view('sa_dashboard', $data);
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
        $data['ac1']="";
        $data['ac2']="active";
        $data['ac2_1']="";$data['ac2_2']="";$data['ac2_3']="active";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="";
        $data['ac4_1']="";$data['ac4_2']="";
        $data['ac5']="";$data['ac6']="";$data['ac7']="";
 			$this->load->view('sa_dashboard', $data);
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
        $data['ac1']="";
        $data['ac2']="";
        $data['ac2_1']="";$data['ac2_2']="";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="";
        $data['ac4_1']="";$data['ac4_2']="";
        $data['ac5']="";$data['ac6']="active";$data['ac7']="";   
            $this->load->view('sa_dashboard', $data);
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
        $data['ac1']="";
        $data['ac2']="";
        $data['ac2_1']="";$data['ac2_2']="";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="";
        $data['ac4_1']="";$data['ac4_2']="";
        $data['ac5']="active";$data['ac6']="";$data['ac7']="";
            $this->load->view('sa_dashboard', $data);
        }else{
            redirect('actLanding');
        }
     }

     public function newBerita()
     {
         if(($this->session->userdata('iduser'))AND ($this->session->userdata('username'))){
            $data['page']='beritaterbaru';
            $data['datainfo']=$this->ModInformasi->semuaInformasi();
        $data['ac1']="";
        $data['ac2']="";
        $data['ac2_1']="";$data['ac2_2']="";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="";
        $data['ac4_1']="";$data['ac4_2']="";
        $data['ac5']="";$data['ac6']="";$data['ac7']="active";  
            $this->load->view('sa_dashboard', $data);
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
         redirect('sa_dashboard/newBerita');
     }

     public function hapusInformasi($id)
     {
         $data = $this->ModInformasi->hapusInformasi($id);
         if ($data) {
             $this->session->set_flashdata('sukses','Data berhasil dihapus');
             redirect('sa_dashboard/newBerita');
         }
     }
 } ?>