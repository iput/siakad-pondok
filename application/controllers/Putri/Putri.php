<?php defined('BASEPATH')OR exit('No direct script access allowed');
/**
 * 
 */
 class Putri extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_putri');
 		$this->load->model('M_Kamar');
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
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$this->load->view('Putri/PengurusPutri');
 		}
 	}

 	public function dataSantri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='datasantri';
 			$data['santriputri']=$this->M_putri->semuaSantri();
 			$this->load->view('Putri/PengurusPutri', $data);
 		}
 		
 	}
 	public function tambahSantri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='tambahsantri';
 			$this->load->view('Putri/PengurusPutri', $data);
 		}
 	}

 	public function tambahSantriBaru()
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

 		$this->M_putri->santriBaru($data);
 		$this->session->set_flashdata('sukses','santri baru berhasil ditambahkan');
 		redirect('Putri/Putri/dataSantri');
 	}

 	public function editDataSantri($id_santri)
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='editdatasantri';
 			$data['detailsantri']=$this->M_putri->editSantri($id_santri)->row();
 			$this->load->view('Putri/PengurusPutri', $data);
 		}else{
 			redirect('C_landing/login');
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
 		$this->M_putri->update_santri($idSantri, $data);
 		$this->session->set_flashdata('sukses','Data santri berhasil di update');
 		redirect('Putri/Putri/dataSantri');
 		unset($idSantri, $data);
 	}

 	public function hapusDataSantri($id)
 	{
 		$data = $this->M_putri->hapusSantri($id);
 		if ($data) {
 			$this->session->set_flashdata('sukses','Data santri berhasil dihapus');
 			redirect('Putri/Putri/dataSantri');
 		}
 	}
 	public function AnggotaKamar()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='personilkamar';
 			$data['santriPutri']=$this->M_putri->semuaSantri();
 			$data['personilputri']= $this->M_Kamar->personilPutri();
 			$data['detailkamar']=$this->M_Kamar->kamarPutri();
 			$this->load->view('Putri/PengurusPutri', $data);
 		}else{
 			redirect('C_landing/login');
 		}	
 	}

 	public function tambahPersonil()
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
 			$this->M_Kamar->tambahPersonil($data);
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
 	}

 	public function editPersonilKamar()
 	{
 		$dataPersonil = $this->M_Kamar->editPersonil();
 		echo json_encode($dataPersonil);
 	}

 	public function updatePersonil()
 	{
 		$idtransaksi = $this->input->post('idtransaksi');
 		$data['idkamar']= $this->input->post('editlistKamar');
 		$data['idsantri']=$this->input->post('editnama_santri');
 		$data['ket']= $this->input->post('editketerangan');
 		$this->M_Kamar->updatePersonil($idtransaksi, $data);
 		$this->session->set_flashdata('sukses','Data Personil kamar berhasil diperarui');
 		redirect('Putri/Putri/AnggotaKamar');
 	}

 	public function hapuspersonilKamar($id)
 	{
 		$data = $this->M_Kamar->hapusPersonil($id);
 		if ($data) {
 			$idkamar = $this->input->post('idKamar');
 			$datakuota = $this->M_Kamar->ambilKuota($idkamar);
 			$kuota='';
 			foreach ($datakuota as $row) {
 				$kuota=$row['kuota_kamar'];
 			}
 			$newkuota = $kuota+1;
 			$data['kuota']=$newkuota;
 			$this->M_Kamar->updateKuotaKamar($data, $idkamar);
 			$this->session->set_flashdata('sukses','Data personil Kamar berhasil dihapus.');
 			redirect('Putri/Putri/AnggotaKamar');
 		}
 	}

 	public function saranMasukan()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='saranmasukan';
 			$data['saranmasuk']=$this->M_register->saranmasuk();
 			$this->load->view('Putri/PengurusPutri', $data);
 		}else{
 			redirect('C_landing/login');
 		}
 	}

 	public function tambahSaran()
 	{
 		$idsaran = "SARAN".$this->random(3);
 		$data['id']=$idsaran;
 		$data['nama']=$this->input->post('namaPengirim');
 		$data['email']=$this->input->post('emailPengirim');
 		$data['tentang']=$this->input->post('subjekMasukan');
 		$data['konten']=$this->input->post('isiSaran');
 		$data['tanggal']=date('Y:m:d');
 		$data['status']='0';
 		$this->M_register->add_saran($data);
 		$this->session->set_flashdata('sukses','Data saran berhasil dimasukan, terimakasih atas perhatian demi kemajuan pondok ');
 		redirect('Putri/Putri/saranMasukan');
 	}
 } ?>