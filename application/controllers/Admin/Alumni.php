<?php defined('BASEPATH')OR exit('tidak ada akses menuju halaman terkait');
/**
 * 
 */
 class Alumni extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_Alumni');
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

 	public function tambah_alumni()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='tambah_alumni';
 			$this->load->view('dashboard', $data);
 			unset($data);
 		}else{
 			redirect('C_landing');
 		}
 	}

 	public function alumni_baru()
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
 		$data['tahun_boyong']=$this->input->post('alumniTahunBoyong');
 		$data['password']=base64_encode($this->input->post('alumniPanggilan'));
 		$data['status']='0';
 		$data['level']='0';
 		$this->M_Alumni->tambah_alumni($data);
 		unset($id_alumni, $data);
 		$this->session->set_flashdata('sukses','Data Alumni berhasil ditambahkan');
 		redirect('Dashboard/alumni');
 	}

 	public function editAlumni($id)
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='edit_alumni';
 			$data['edit_almn']=$this->M_Alumni->edit_alumni($id)->row();
 			$this->load->view('Dashboard',$data);
 			unset($data);
 		}
 	}

 	public function update_alumni()
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
 		$data['tahun_boyong']=$this->input->post('editalumniTahunBoyong');	
 		$this->M_Alumni->update_alumni($id_alumni, $data);
 		$this->session->set_flashdata('sukses','Data alumni berhasil diupdate');
 		redirect('Dashboard/alumni');
 		unset($id_alumni, $data);
 	}

 	public function hapusAlumni($id)
 	{
 		$hapus = $this->M_Alumni->hapus_alumni($id);
 		if ($hapus) {
 			$this->session->set_flashdata('sukses','data alumni berhasil dihapus');
 			redirect('Dashboard/alumni');
 		}
 		unset($hapus, $id);
 	}
 } ?>