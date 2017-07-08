<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Kamar extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_Kamar');
 		$this->load->model('M_santri');
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
 		$this->M_Kamar->TambahKamar($db_kamar);
 		unset($idkamar,$db_kamar);
 		$this->session->set_flashdata('sukses','Data Kamar berhasil ditambhakan');
 		redirect('Admin/Kamar/dataKamar');
 	}

 	public function DataKamar()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='dataKamar';
 			$data['db_kamar']=$this->M_Kamar->SemuaKamar();
 			$this->load->view('Dashboard', $data);
 			unset($data);
 		}
 	}
 	public function personilKamar()
 	{
 		if (($this->session->userdata('iduser'))AND($this->session->userdata('username'))) {
 			$data['page']='datapersonilKamar';
 			$data['list_kamar']=$this->M_Kamar->SemuaKamar();
 			$data['list_santri']=$this->M_santri->Semua_Santri();
 			$data['list_personil']=$this->M_Kamar->SemuaPersonil();
 			$this->load->view('Dashboard', $data);
 			unset($data);
 		}else{
 			redirect('C_Landing');
 		}
 	}

 	public function EditKamar()
 	{
 		$detilKamar = $this->M_Kamar->editKamar();
 		echo json_encode($detilKamar);
 		unset($detilKamar);
 	}

 	public function UpdateKamar()
 	{
 		$id =$this->input->post('editIdKamar');
 		$data['nama']=$this->input->post('editnamaKamar');
 		$data['kuota']=$this->input->post('editkuotakamar');
 		$data['modul']=$this->input->post('editmodulKamar');
 		$this->M_Kamar->UpdateKamar($id, $data);
 		$this->session->set_flashdata('sukses','Data Kamar berhasil di update');
 		redirect('Admin/Kamar/DataKamar');
 		unset($id,$data);
 	}

 	public function HapusKamar($idkamar)
 	{
 		$datakmr= $this->M_Kamar->HapusKamar($idkamar);
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
 			$data['idkmr']=$this->input->post('listNamaKamar');
 			$data['idstr']=$personil[$i];
 			$data['ket']=$this->input->post('ketPersonil');
 			$this->M_Kamar->TambahPersonil($data);
 		}
 		$kuotabaru = $sisa - $kurangiKuota;
 		$datakuota['kuota']=$kuotabaru;
 		$this->M_Kamar->UpdateKuotaKamar($idkamar, $datakuota);
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
 		$datapersonil = $this->M_Kamar->HapusPersonil($id);
 		if ($datapersonil) {
 			$this->session->set_flashdata('sukses','data personil berhasil di hapus');
 			redirect('Admin/Kamar/PersonilKamar');
 			unset($datapersonil);
 		}
 	}
 } ?>