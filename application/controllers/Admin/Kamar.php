<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Kamar extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('ModKamar');
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

 	public function TambahKamar()
 	{
 		$idkamar = "KMR00".$this->random(3);
 		$db_kamar['idkmr']=$idkamar;
 		$db_kamar['nmkmr']=$this->input->post('namaKamar');
 		$db_kamar['kuota']=$this->input->post('kuotakamar');
 		$db_kamar['ketkmr']=$this->input->post('modulKamar');
 		$this->ModKamar->TambahKamar($db_kamar);
 		unset($idkamar,$db_kamar);
 		$this->session->set_flashdata('sukses','Data Kamar berhasil ditambhakan');
 		redirect('Admin/Kamar/dataKamar');
 	}

 	public function DataKamar()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='dataKamar';
 			$data['db_kamar']=$this->ModKamar->SemuaKamar();
 			$this->load->view('Dashboard', $data);
 			unset($data);
 		}
 	}
 	public function personilKamar()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='datapersonilKamar';
 			$data['list_kamar']=$this->ModKamar->SemuaKamar();
 			$data['list_santri']=$this->ModSantri->SemuaSantri();
 			$data['list_personil']=$this->ModKamar->SemuaPersonil();
 			$this->load->view('Dashboard', $data);
 			unset($data);
 		}else{
 			redirect('actLanding');
 		}
 	}

 	public function EditKamar()
 	{
 		$detilKamar = $this->ModKamar->editKamar();
 		echo json_encode($detilKamar);
 		unset($detilKamar);
 	}

 	public function UpdateKamar()
 	{
 		$id =$this->input->post('editIdKamar');
 		$data['nama']=$this->input->post('editnamaKamar');
 		$data['kuota']=$this->input->post('editkuotakamar');
 		$data['modul']=$this->input->post('editmodulKamar');
 		$this->ModKamar->UpdateKamar($id, $data);
 		$this->session->set_flashdata('sukses','Data Kamar berhasil di update');
 		redirect('Admin/Kamar/DataKamar');
 		unset($id,$data);
 	}

 	public function HapusKamar($idkamar)
 	{
 		$datakmr= $this->ModKamar->HapusKamar($idkamar);
 		if ($datakmr) {
 			$this->session->set_flashdata('sukses','Data Kamar berhasil dihapus');
 			redirect('Admin/Kamar/DataKamar');
 			unset($datakmr);
 		}
 	}

 	public function TambahPersonilKamar()
 	{
 		$personil = $this->input->post('cb_personil');
 		$idkamar = $this->input->post('listNamaKamar');
 		$kuota = $this->ModKamar->ambilKuota($idkamar);
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
 			$data['idkmr']=$this->input->post('listNamaKamar');
 			$data['idstr']=$personil[$i];
 			$data['ket']=$this->input->post('ketPersonil');
 			$this->ModKamar->TambahPersonil($data);
 		}
 		$kuotabaru = $sisa - $kurangiKuota;
 		$datakuota['kuota']=$kuotabaru;
 		$this->ModKamar->UpdateKuotaKamar($idkamar, $datakuota);
 		$this->session->set_flashdata('sukses','Data personil Kamar Berhasil Di tambahkan');
 		redirect('Admin/Kamar/PersonilKamar');
 		}else if ($sisa<=0) {
 			$this->session->set_flashdata('gagal','Data tidak bisa dimasukan, kuota kamar tidak memenuhi syarat');
 			redirect('Admin/Kamar/PersonilKamar');
 		}
 		unset($personil, $idkamar, $kuota, $sisa, $data, $datakuota);
 		
 	}


 	public function HapusPersonil($id)
 	{
 		$datapersonil = $this->ModKamar->HapusPersonil($id);
 		if ($datapersonil) {
 			$this->session->set_flashdata('sukses','data personil berhasil di hapus');
 			redirect('Admin/Kamar/PersonilKamar');
 			unset($datapersonil);
 		}
 	}
 } ?>