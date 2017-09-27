<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 *
 */
 class Santri extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('ModSantri');
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

 	public function TambahSantri()
 	{
 		$id_santri = "STR00".$this->random(3);
 		$data['id']=$id_santri;
 		$data['nama']= $this->input->post('TambahNamaSantri');
 		$data['panggilan']=$this->input->post('tambahPanggilan');
 		$data['tempat_lahir']=$this->input->post('TambahKelahiran');
 		$data['tgl_lahir']=$this->input->post('tambahTglLahir');
 		$data['jenis_kelamin']=$this->input->post('tambahGender');
 		$data['alamat']=$this->input->post('tambahAlamat');
 		$data['noTelpon']=$this->input->post('tambahNoTelp');
 		$data['email']=$this->input->post('tambahEmail');
 		$data['facebook']=$this->input->post('tambahFacebook');
 		$data['tahun_masuk']=$this->input->post('tambahTahunMasuk');
 		$this->ModSantri->TambahSantri($data);

    $userlog['idlog']="LOG00".$this->random(3);
    $userlog['santri']=$id_santri;
    $userlog['username']=$this->input->post('tambahPanggilan');
    $userlog['password']=md5($this->input->post('tambahNoTelp'));
    $userlog['waktu']=date('Y:m:d h:m:i');
    $userlog['level']='santri';
    $userlog['key']=$this->input->post('tambahNoTelp');
    $this->ModSantri->createUserlog($userlog);
 		$this->session->set_flashdata('sukses','santri baru berhasil ditambahkan');
 		redirect('Dashboard/SantriBaru');
 		unset($id_santri, $data);

 	}

 	public function EditSantri($id_santri)
 	{
 		$data['page'] = 'ubah_santri';
 		$data['ubah_str'] = $this->ModSantri->EditSantri($id_santri)->row();
        $data['ac1']="";
        $data['ac2']="active";
        $data['ac2_1']="active";$data['ac2_2']="";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="";
        $data['ac4_1']="";$data['ac4_2']="";
        $data['ac5']="";$data['ac6']="";$data['ac7']="";
 		$this->load->view('Dashboard', $data);
 		unset($id_santri, $data);
 	}

 	public function UpdateSantri()
 	{
 		$idSantri = $this->input->post('editIDSantri');
 		$data['nama']=$this->input->post('editNamaSantri');
 		$data['panggilan']=$this->input->post('editPanggilan');
 		$data['kelahiran']=$this->input->post('editKelahiran');
 		$data['tgl_lahir']=$this->input->post('editTglLahir');
 		$data['kelamin']=$this->input->post('editGender');
 		$data['alamat']=$this->input->post('editAlamat');
 		$data['telpon']=$this->input->post('editNoTelp');
 		$data['email']=$this->input->post('editEmail');
 		$data['facebook']=$this->input->post('editFacebook');
 		$data['tahun_masuk']=$this->input->post('editTahunMasuk');
 		$data['tahun_boyong']=$this->input->post('editTahunBoyong');
 		$this->ModSantri->UpdateSantri($idSantri, $data);
 		$this->session->set_flashdata('sukses','Data santri berhasil di update');
 		redirect('Dashboard/SantriBaru');
 		unset($idSantri, $data);
 	}

 	public function HapusSantri($id)
 	{
    $datasantri= count($this->ModSantri->cekRelasi($id)->row());
    if ($datasantri>0) {
      $this->session->set_flashdata('gagal','data ini mempunya relasi dengan userlog . harap hapus data dari userlog terlebih dahulu');
      redirect('Dashboard/SantriBaru');
    }else{
      $data = $this->ModSantri->HapusSantri($id);
      if ($data) {
     		$this->session->set_flashdata('sukses','Data santri berhasil dihapus');
     		redirect('Dashboard/SantriBaru');
      }else{
        $this->session->set_flashdata('gagal','Data santri gagal berhasil dihapus');
     		redirect('Dashboard/SantriBaru');
      }
    }
 		unset($data, $id);
    
 	}


  public function TambahPengurus()
  {
    $idnama =$this->input->post('namaSantriAktif');
    $level = $this->input->post('Kepengurusan');

    $dataSantri= $this->ModSantri->dataSantri($idnama);
    foreach ($dataSantri as $data) {
      $username = $data['nama_panggilan'];
      $password= $data['noTelpon_santri'];
    }

    $userlog['idlog']="LOG00".$this->random(3);
    $userlog['santri']=$idnama;
    $userlog['username']=$username;
    $userlog['password']=md5($password);
    $userlog['waktu']=date('Y:m:d H:m:i');
    $userlog['level']=$level;
    $userlog['key']=$password;
    $this->ModSantri->createUserlog($userlog);
    $this->session->set_flashdata('sukses','Data Santri berhasil dijadikan pengurus');
    redirect('Dashboard/Pengurus');
  }

  public function editSaran()
  {
    $data = $this->ModRegister->Tanggapi();
    echo json_encode($data);
  }

  public function tanggapiSaran()
  {
    $data['tanggapan']=$this->input->post('tanggapan');
    $id = $this->input->post('idSaran');
    $this->ModRegister->updateTanggapan($id, $data);
    $this->session->set_flashdata('sukses','Saran Masuk telah ditanggapi');
    redirect('Dashboard/kotakSaran');
  }
  public function HapusSaran($id)
  {
    $data = $this->ModRegister->hapusSaran($id);
    if ($data) {
      $this->session->set_flashdata('sukses','Data berhasil dihapus');
      redirect('Dashboard/kotakSaran');
    }
  }
 } ?>
