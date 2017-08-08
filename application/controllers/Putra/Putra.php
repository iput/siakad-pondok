<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Putra extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('ModPutra');
 		$this->load->model('ModKamar');
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
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$this->load->view('Putra/PengurusPutra');
 		}else{
 			redirect('actLanding/Login');
 		}
 	}
 	public function DataSantri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='datasantri';
 			$data['santriPutra']=$this->ModPutra->semuaSantri();
 			$this->load->view('Putra/PengurusPutra', $data);
 			unset($data);
 		}else{
 			redirect('actLanding');
 		}
 	}

 	public function SantriBaru()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='santribaru';
 			$this->load->view('Putra/PengurusPutra', $data);
 			unset($data);
 		}else{
 			redirect('actLanding');
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
 		$this->ModPutra->SantriBaru($data);

 		$userlog['idlog']="LOG00".$this->random(3);
 		$userlog['santri']=$id_santri;
 		$userlog['username'] = $this->input->post('tambahPanggilan');
 		$userlog['password']=md5($this->input->post('tambahNoTelp'));
 		$userlog['waktu']=date('Y:m:d H:m:i');
 		$userlog['level'] = 'santri';
 		$userlog['key']=$this->input->post('tambahNoTelp');
 		$this->ModRegister->createUserlog($userlog);

 		$this->session->set_flashdata('sukses','santri baru berhasil ditambahkan');
 		redirect('Putra/Putra/DataSantri');
 		unset($data, $id_santri);
 	}

 	public function EditDataSantri($id_santri)
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='editdatasantri';
 			$data['detailsantri']=$this->ModPutra->EditSantri($id_santri)->row();
 			$this->load->view('Putra/PengurusPutra', $data);
 			unset($data);
 		}else{
 			redirect('actLanding/Login');
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
 		$this->ModPutra->UpdateSantri($idSantri, $data);
 		$this->session->set_flashdata('sukses','Data santri berhasil di update');
 		redirect('Putra/Putra/DataSantri');
 		unset($idSantri, $data);
 	}

 	public function HapusDataSantri($id)
 	{

 		$relasi = count($this->ModPutra->cekRelasi($id)->row());
 		if ($relasi>0) {
 			$this->session->set_flashdata('gagal','Data ini memiliki beberapa keterkaitan terhadap beberapa operasi lain. Untuk proses penghapusan data silahakn hubungi pengelola pusat');
 			redirect('Putra/Putra/DataSantri');
 		}else{
 			$data = $this->ModPutra->HapusSantri($id);
 			if ($data) {
 				$this->session->set_flashdata('sukses','Data santri berhasil dihapus');
 				unset($data);
 			}
 		}
 		
 	}

 	public function AnggotaKamar()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='personilkamar';
 			$data['santriPutra']=$this->ModPutra->SemuaSantri();
 			$data['personilputra']= $this->ModKamar->PersonilPutra();
 			$data['detailkamar']=$this->ModKamar->KamarPutra();
 			$this->load->view('Putra/PengurusPutra', $data);
 			unset($data);
 		}else{
 			redirect('actLanding/Login');
 		}	
 	}

 	public function TambahPersonil()
 	{
 		$personil = $this->input->post('nama_santri');
 		$idkamar = $this->input->post('listKamar');
 		$kuota = $this->ModKamar->AmbilKuota($idkamar);
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
 			$this->ModKamar->TambahPersonil($data);
 		}
 		$kuotabaru = $sisa - $kurangiKuota;
 		$datakuota['kuota']=$kuotabaru;
 		$this->ModKamar->UpdateKuotaKamar($idkamar, $datakuota);
 		$this->session->set_flashdata('sukses','Data personil Kamar Berhasil Di tambahkan');
 		redirect('Putra/Putra/AnggotaKamar');
 		}else if ($sisa<=0) {
 			$this->session->set_flashdata('gagal','Data tidak bisa dimasukan, kuota kamar tidak memenuhi syarat');
 			redirect('Putra/Putra/AnggotaKamar');
 		}
 		unset($data,$personil,$idKamar, $kuota, $sisa, $k,$leng,$kuotabaru, $datakuota);
 	}

 	public function EditPersonilKamar()
 	{
 		$dataPersonil = $this->ModKamar->EditPersonil();
 		echo json_encode($dataPersonil);
 		unset($dataPersonil);
 	}

 	public function UpdatePersonil()
 	{
 		$idtransaksi = $this->input->post('idtransaksi');
 		$data['idkamar']= $this->input->post('editlistKamar');
 		$data['idsantri']=$this->input->post('editnama_santri');
 		$data['ket']= $this->input->post('editketerangan');
 		$this->ModKamar->UpdatePersonil($idtransaksi, $data);
 		$this->session->set_flashdata('sukses','Data Personil kamar berhasil diperarui');
 		redirect('Putra/Putra/AnggotaKamar');
 		unset($data, $idtransaksi);
 	}

 	public function HapusPersonilKamar($id)
 	{
 		$datai = $this->ModKamar->HapusPersonil($id);
 		if ($datai) {
 			$idkamar = $this->input->post('idKamar');
 			$datakuota = $this->ModKamar->AmbilKuota($idkamar);
 			$kuota='';
 			foreach ($datakuota as $row) {
 				$kuota=$row['kuota_kamar'];
 			}
 			$newkuota = $kuota+1;
 			$data['kuota']=$newkuota;
 			$this->ModKamar->UpdateKuotaKamar($data, $idkamar);
 			$this->session->set_flashdata('sukses','Data personil Kamar berhasil dihapus.');
 			redirect('Putra/Putra/AnggotaKamar');
 			unset($data, $datai, $datakuota, $row);
 		}
 	}

 	public function SaranMasukan()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='saranmasukan';
 			$data['saranmasuk']=$this->ModRegister->SaranMasuk();
 			$this->load->view('Putra/PengurusPutra', $data);
 			unset($data);
 		}else{
 			redirect('actLanding/Login');
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
 		$this->ModRegister->AddSaran($data);
 		$this->session->set_flashdata('sukses','Data saran berhasil dimasukan, terimakasih atas perhatian demi kemajuan pondok ');
 		redirect('Putra/Putra/saranMasukan');
 		unset($data, $idsaran);
 	}
 } ?>