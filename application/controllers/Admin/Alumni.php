<?php defined('BASEPATH')OR exit('tidak ada akses menuju halaman terkait');
/**
 * 
 */
 class Alumni extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('ModAlumni');
 		$this->load->model('ModSantri');
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

 	public function TambahAlumni()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='tambah_alumni';
 			$this->load->view('Dashboard', $data);
 			unset($data);
 		}else{
 			redirect('actLanding');
 		}
 	}

 	public function AlumniBaru()
 	{
 		$id_alumni = "STR00".$this->random(3);
 		$data['id']=$id_alumni;
 		$data['nama']= $this->input->post('alumniNamaSantri');
 		$data['panggilan']=$this->input->post('alumniPanggilan');
 		$data['tempat_lahir']=$this->input->post('alumniKelahiran');
 		$data['tgl_lahir']=$this->input->post('alumniTglLahir');
 		$data['jenis_kelamin']=$this->input->post('alumniGender');
 		$data['alamat']=$this->input->post('alumniAlamat');
 		$data['noTelpon']=$this->input->post('alumniNoTelp');
 		$data['email']=$this->input->post('alumniEmail');
 		$data['facebook']=$this->input->post('alumniFacebook');
 		$data['tahun_masuk']=$this->input->post('alumniTahunMasuk');
 		
 		$this->ModAlumni->TambahAlumni($data);

 		$userlog['idlog']="LOG00".$this->random(3);
    	$userlog['santri']=$id_alumni;
    	$userlog['username']=$this->input->post('alumniPanggilan');
    	$userlog['password']=md5($this->input->post('alumniNoTelp'));
    	$userlog['waktu']=date('Y:m:d h:m:i');
    	$userlog['level']='alumni';
    	$userlog['key']=$this->input->post('alumniNoTelp');
    	$this->ModSantri->createUserlog($userlog);
 		unset($id_alumni, $data);
 		$this->session->set_flashdata('sukses','Data Alumni berhasil ditambahkan');
 		redirect('Dashboard/Alumni');
 	}

 	public function EditAlumni($id)
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='edit_alumni';
 			$data['edit_almn']=$this->ModAlumni->EditAlumni($id)->row();
 			$this->load->view('Dashboard',$data);
 			unset($data);
 		}
 	}

 	public function UpdateAlumni()
 	{
 		$id_alumni = $this->input->post('editIDAlumni');
 		$data['nama']= $this->input->post('editalumniNamaSantri');
 		$data['panggilan']=$this->input->post('editalumniPanggilan');
 		$data['kelahiran']=$this->input->post('editalumniKelahiran');
 		$data['tgl_lahir']=$this->input->post('editalumniTglLahir');
 		$data['kelamin']=$this->input->post('editalumniGender');
 		$data['alamat']=$this->input->post('editalumniAlamat');
 		$data['telpon']=$this->input->post('editalumniNoTelp');
 		$data['email']=$this->input->post('editalumniEmail');
 		$data['facebook']=$this->input->post('editalumniFacebook');
 		$data['tahun_masuk']=$this->input->post('editalumniTahunMasuk');
 		$this->ModAlumni->UpdateAlumni($id_alumni, $data);
 		$this->session->set_flashdata('sukses','Data alumni berhasil diupdate');
 		redirect('Dashboard/Alumni');
 		unset($id_alumni, $data);
 	}

 	public function HapusAlumni($id)
 	{
 		$hapus = $this->ModAlumni->HapusAlumni($id);
 		if ($hapus) {
 			$this->session->set_flashdata('sukses','data alumni berhasil dihapus');
 			redirect('Dashboard/Alumni');
 		}
 		unset($hapus, $id);
 	}
 } ?>