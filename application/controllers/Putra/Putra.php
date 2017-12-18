<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Putra extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		if($this->session->userdata('level')!="pengurusputra"){
 			redirect('actLanding/Login');
 		}
 		$this->load->model('ModPutra');
 		$this->load->model('ModKamar');
 		$this->load->model('ModRegister');
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
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['ac1']="active";$data['ac2']="";$data['ac3']="";$data['ac4']="";$data['ac5']="";
 			$this->load->view('Putra/PengurusPutra',$data);
 		}else{
 			redirect('actLanding/Login');
 		}
 	}
 	public function DataSantri()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['module']='datasantri';
 			$data['santriPutra']=$this->ModPutra->semuaSantri();
 			$data['ac1']="";$data['ac2']="active";$data['ac3']="";$data['ac4']="";$data['ac5']="";
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
 			$data['ac1']="";$data['ac2']="active";$data['ac3']="";$data['ac4']="";$data['ac5']="";
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
 			$data['ac1']="";$data['ac2']="active";$data['ac3']="";$data['ac4']="";$data['ac5']="";
 			$this->load->view('Putra/PengurusPutra', $data);
 			unset($data);
 		}else{
 			redirect('actLanding/Login');
 		}
 	}

 	public function UpdateSantri($id)
 	{
 		$idSantri = $id;
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

 		$relasi = $this->ModPutra->cekRelasi($id)->num_rows();
 		if ($relasi>1) {
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
 			$data['ac1']="";$data['ac2']="";$data['ac3']="active";$data['ac4']="";$data['ac5']="";
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
 		$sisa=$this->ModKamar->ambil_kuota($idkamar)->kuota_kamar;
	 	$leng = count($personil);
 		if ($sisa>=$leng) {
 		$jum_n=0;
 		$kurangiKuota=0;
	 		for ($i=0; $i < $leng; $i++) {
		 		$cek_id=$this->ModKamar->cek_id_s($personil[$i]); 
	 			if($cek_id){	 			
		 			$kurangiKuota+=1;
		 			$data['idtrans']="TRAN0".$this->random(3);
		 			$data['idkmr']=$this->input->post('listKamar');
		 			$data['idstr']=$personil[$i];
		 			$data['ket']=$this->input->post('keterangan');
		 			$this->ModKamar->TambahPersonil($data);
	 			}else{
	 				$jum_n+=1;
	 			}
	 		}
	 		$kuotabaru = $sisa - $kurangiKuota;
	 		$this->ModKamar->update_kuota_k($idkamar, $kuotabaru);
	 		if($kurangiKuota>0&&$jum_n>0){
	 			$this->session->set_flashdata('sukses',$kurangiKuota.' Data personil Kamar Berhasil Di tambahkan,<br>'.$jum_n.' Data tidak bisa masuk karena sudah masuk kamar');
	 		}else if($kurangiKuota>0){
	 			$this->session->set_flashdata('sukses',$kurangiKuota.' Data personil Kamar Berhasil Di tambahkan');
	 		}else if($jum_n>0){
	 			$this->session->set_flashdata('gagal',$jum_n.' Data personil Kamar tidak Berhasil Di tambahkan karena sudah mendapatkan kamar');
	 		}
 		}else{
 			$this->session->set_flashdata('gagal','Data tidak bisa dimasukan, kuota kamar tidak memenuhi syarat');
 		}
	 	redirect('Putra/Putra/AnggotaKamar');
 		unset($data,$personil,$idKamar, $kuota, $sisa, $k,$leng,$kuotabaru, $datakuota);
 	}
 	public function EditPersonilKamar()
 	{
 		$dataPersonil = $this->ModKamar->EditPersonil();
 		$data_san = $this->ModKamar->cari_nama($dataPersonil->id_santri);
 		$data_lo['id_trans']=$dataPersonil->id_trans;
 		$data_lo['id_kamar']=$dataPersonil->id_kamar;
 		$data_lo['id_santri']=$dataPersonil->id_santri;
 		$data_lo['nama_santri']=$data_san->nama_santri;
 		$data_lo['keterangan']=$dataPersonil->keterangan;
 		echo json_encode($data_lo);
 		unset($data_lo);
 	} 	
 	public function UpdatePersonil()
 	{
 		$idtransaksi = $this->input->post('idtransaksi');
 		$id_kamar_lama = $this->ModKamar->cek_kamar($idtransaksi)->id_kamar;
 		$data['idkamar']= $this->input->post('editlistKamar');
 		if($id_kamar_lama!=$data['idkamar']){
 			$kuota_lama=$this->ModKamar->ambil_kuota($id_kamar_lama)->kuota_kamar + 1;
 			$kuota_baru=$this->ModKamar->ambil_kuota($data['idkamar'])->kuota_kamar - 1;
 			$this->ModKamar->update_kuota_k($id_kamar_lama, $kuota_lama);
 			$this->ModKamar->update_kuota_k($data['idkamar'], $kuota_baru);
 		}
 			$data['idsantri']=$this->input->post('id_santri');
	 		$data['ket']= $this->input->post('editketerangan');
	 		$this->ModKamar->UpdatePersonil($idtransaksi, $data);
	 		$this->session->set_flashdata('sukses','Data Personil kamar berhasil diperarui');
	 		redirect('Putra/Putra/AnggotaKamar');
	 		unset($data, $idtransaksi);
 	}

 	public function HapusPersonilKamar($id)
 	{
 		$idkamar = $this->ModKamar->cek_kamar($id)->id_kamar;
 		$datai = $this->ModKamar->HapusPersonil($id);
 		if ($datai) {
 			$datakuota = $this->ModKamar->ambil_kuota($idkamar)->kuota_kamar + 1;
 			$this->ModKamar->update_kuota_k($idkamar, $datakuota);
 			$this->session->set_flashdata('sukses','Data personil Kamar berhasil dihapus.');
 		}else{
 			$this->session->set_flashdata('gagal','Data personil Kamar gagal dihapus.');
 		}
 			redirect('Putra/Putra/AnggotaKamar');
 			unset($data, $datai, $datakuota, $row);
 	}

 	public function SaranMasukan()
 	{
 		if (($this->session->userdata('iduser'))AND ($this->session->userdata('username'))) {
 			$data['module']='saranmasukan';
 			$data['saranmasuk']=$this->ModRegister->SaranMasuk();
 			$data['ac1']="";$data['ac2']="";$data['ac3']="";$data['ac4']="active";$data['ac5']="";
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
 		$data['nama']=$this->session->userdata('username');
 		$data['email']=$this->session->userdata('email');
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