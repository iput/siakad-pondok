<?php defined('BASEPATH')OR exit('No direct script access allowed');
/**
 * 
 */
 class Putri extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_Putri');
 		$this->load->model('M_Kamar');
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
 			$this->load->view('Putri/PengurusPutri');
 		}else{
 			redirect('C_Landing/Login');
 		}
 	}

 	public function DataSantri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='datasantri';
 			$data['santriputri']=$this->M_Putri->SemuaSantri();
 			$this->load->view('Putri/PengurusPutri', $data);
 			unset($data);
 		}
 		
 	}
 	public function TambahSantri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='tambahsantri';
 			$this->load->view('Putri/PengurusPutri', $data);
 			unset($data);
 		}
 	}

 	public function TambahSantriBaru()
 	{
 		$id_santri = "STR00".$this->random(3);
 		$data['id']=$id_santri;
 		$data['nama']= $this->input->post('tambahNamaSantri');
 		$data['panggilan']=$this->input->post('tambahPanggilan');
 		$data['tempat_lahir']=$this->input->post('tambahKelahiran');
 		$data['tgl_lahir']=$this->input->post('tambahTglLahir');
 		$data['jenis_kelamin']=$this->input->post('tambahGender');
 		$data['alamat']=$this->input->post('tambahAlamat');
 		$data['noTelpon']=$this->input->post('tambahNoTelp');
 		$data['email']=$this->input->post('tambahEmail');
 		$data['facebook']=$this->input->post('tambahFacebook');
 		$data['tahun_masuk']=$this->input->post('tambahTahunMasuk');
 		$data['tahun_boyong']=$this->input->post('tambahTahunMasuk');
 		$data['password']=base64_encode($this->input->post('tambahNoTelp'));
 		$data['status']='1';
 		$data['level']='1';

 		$this->M_Putri->santriBaru($data);
 		$this->session->set_flashdata('sukses','santri baru berhasil ditambahkan');
 		redirect('Putri/Putri/DataSantri');
 		unset($data, $id_santri);
 	}

 	public function EditDataSantri($id_santri)
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='editdatasantri';
 			$data['detailsantri']=$this->M_Putri->EditSantri($id_santri)->row();
 			$this->load->view('Putri/PengurusPutri', $data);
 			unset($data);
 		}else{
 			redirect('C_Landing/Login');
 		}
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
 		$this->M_Putri->Update_Santri($idSantri, $data);
 		$this->session->set_flashdata('sukses','Data santri berhasil di update');
 		redirect('Putri/Putri/dataSantri');
 		unset($idSantri, $data);
 	}

 	public function HapusDataSantri($id)
 	{
 		$data = $this->M_Putri->HapusSantri($id);
 		if ($data) {
 			$this->session->set_flashdata('sukses','Data santri berhasil dihapus');
 			redirect('Putri/Putri/dataSantri');
 			unset($data);
 		}
 	}
 	public function AnggotaKamar()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='personilkamar';
 			$data['santriPutri']=$this->M_Putri->SemuaSantri();
 			$data['personilputri']= $this->M_Kamar->PersonilPutri();
 			$data['detailkamar']=$this->M_Kamar->kamarPutri();
 			$this->load->view('Putri/PengurusPutri', $data);
 			unset($data);
 		}else{
 			redirect('C_Landing/Login');
 		}	
 	}

 	public function TambahPersonil()
 	{
 		$personil = $this->input->post('nama_santri');
 		$idkamar = $this->input->post('listKamar');
 		$kuota = $this->M_Kamar->ambilKuota($idkamar);
 		$sisa="";
 		foreach ($kuota as $k) {
 			$sisa=$k['kuota_kamar'];
 		}
 		$kurangiKuota=0;
 		if ($sisa>0) {
 		$leng = count($personil);
 		for ($i=0; $i < $leng; $i++) { 
 			$kurangiKuota++;
 			$data['idtrans']="TRAN0".$this->random(3);
 			$data['idkmr']=$this->input->post('listKamar');
 			$data['idstr']=$personil[$i];
 			$data['ket']=$this->input->post('keterangan');
 			$this->M_Kamar->TambahPersonil($data);
 		}
 		$kuotabaru = $sisa - $kurangiKuota;
 		$datakuota['kuota']=$kuotabaru;
 		$this->M_Kamar->updateKuotaKamar($idkamar, $datakuota);
 		$this->session->set_flashdata('sukses','Data personil Kamar Berhasil Di tambahkan');
 		redirect('Putri/Putri/AnggotaKamar');
 		}else if ($sisa<=0) {
 			$this->session->set_flashdata('gagal','Data tidak bisa dimasukan, kuota kamar tidak memenuhi syarat');
 			redirect('Putra/Putra/AnggotaKamar');
 		}
 		unset($data, $personil, $idKamar, $sisa, $k, $datakuota);
 	}

 	public function EditPersonilKamar()
 	{
 		$dataPersonil = $this->M_Kamar->EditPersonil();
 		echo json_encode($dataPersonil);
 		unset($dataPersonil);
 	}

 	public function UpdatePersonil()
 	{
 		$idtransaksi = $this->input->post('idtransaksi');
 		$data['idkamar']= $this->input->post('editlistKamar');
 		$data['idsantri']=$this->input->post('editnama_santri');
 		$data['ket']= $this->input->post('editketerangan');
 		$this->M_Kamar->UpdatePersonil($idtransaksi, $data);
 		$this->session->set_flashdata('sukses','Data Personil kamar berhasil diperarui');
 		redirect('Putri/Putri/AnggotaKamar');
 		unset($data, $idtransaksi);
 	}

 	public function HapusPersonilKamar($id)
 	{
 		$data1 = $this->M_Kamar->HapusPersonil($id);
 		if ($data1) {
 			$idkamar = $this->input->post('idKamar');
 			$datakuota = $this->M_Kamar->AmbilKuota($idkamar);
 			$kuota='';
 			foreach ($datakuota as $row) {
 				$kuota=$row['kuota_kamar'];
 			}
 			$newkuota = $kuota+1;
 			$data['kuota']=$newkuota;
 			$this->M_Kamar->UpdateKuotaKamar($data, $idkamar);
 			$this->session->set_flashdata('sukses','Data personil Kamar berhasil dihapus.');
 			redirect('Putri/Putri/AnggotaKamar');
 		}
 		unset($data, $data1, $idkamar, $datakuota, $row, $newkuota);
 	}

 	public function SaranMasukan()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='saranmasukan';
 			$data['saranmasuk']=$this->M_Register->SaranMasuk();
 			$this->load->view('Putri/PengurusPutri', $data);
 			unset($data);
 		}else{
 			redirect('C_Landing/Login');
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
 		redirect('Putri/Putri/SaranMasukan');
 		unset($data, $idsaran);
 	}
 } ?>