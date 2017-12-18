<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModKelas');
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

	public function index()
	{
		$data['page'] = 'data-kelas';
		$data['ac1']="";
        $data['ac2']="";
        $data['ac2_1']="";$data['ac2_2']="";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="active";
        $data['ac4_1']="active";$data['ac4_2']="";
        $data['ac5']="";
        $data['ac6']="";
        $data['ac7']="";
        $data['kelasMadin'] = $this->ModKelas->dataKelas();
        $data['waliSantri'] = $this->ModKelas->dataWali();
		$this->load->view('sa_Dashboard', $data);
	}

	public function detail()
	{
		$data['ac1']="";
        $data['ac2']="";
        $data['ac2_1']="";$data['ac2_2']="";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="active";
        $data['ac4_1']="active";$data['ac4_2']="";
        $data['ac5']="";
        $data['ac6']="";
        $data['ac7']="";

		$idKelas = $_GET['detail'];
		$data['page'] = 'detailKelas';
		$data['datakelas'] = $this->ModKelas->detailKelas($idKelas);
		$data['detailAnggota'] = $this->ModKelas->personilKelas($idKelas);
		$data['dataSantri'] = $this->ModSantri->SemuaSantri();
		$this->load->view('sa_Dashboard', $data);
	}

	public function tutup()
	{
		$idkelas = $_GET['idkelas'];
		$data['status']='close';
		$this->ModKelas->nonAktifkanPersonil($idkelas, $data);
		redirect('admin/kelas','refresh');
	}
	public function tambahKelas()
	{
		$data['id'] = $this->random(8);
		$data['nama'] = $this->input->post('namaKelas');
		$data['kuota'] = $this->input->post('kuotaKelas');
		$data['lokasi'] = $this->input->post('lokasiKelas');
		$data['wali'] = $this->input->post('waliKelas');
		$data['keterangan'] = $this->input->post('keteranganKelas');
		$data['status'] = 'open';

		$this->ModKelas->tambahKelas($data);
		$this->session->set_flashdata('sukses', 'Data Kelas berhasil ditambahkan');
		redirect('admin/kelas','refresh');

	}

	public function tambahPersonil()
	{
		$id_kelas  = $this->input->post('id_kelas');
		$personil = $this->input->post('personil');
		$keterangan = $this->input->post('keterangan_personil');

		$jumlah = count($personil);
		for ($k = 0; $k <$jumlah ; $k++) {
			$data['id_transkelas'] = $this->random(8);
			$data['id_kelas'] = $id_kelas;
			$data['id_santri'] = $personil[$k];
			$data['ket'] = $keterangan;
			$data['status_aktif'] = 'open';
			$this->ModKelas->tambahPersonil($data);
		}
		$this->session->set_flashdata('sukses', 'data personil berhasil ditambahkan');
		redirect('admin/kelas','refresh');
	}

}

/* End of file Kelas.php */
/* Location: ./application/controllers/Admin/Kelas.php */