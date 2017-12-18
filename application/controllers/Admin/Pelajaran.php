<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModKelas');
		$this->load->model('ModPelajaran');
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
		$data['page'] = 'data_pelajaran';
		$data['ac1']="";
        $data['ac2']="";
        $data['ac2_1']="";$data['ac2_2']="";$data['ac2_3']="";
        $data['ac3']="";
        $data['ac3_1']="";$data['ac3_2']="";
        $data['ac4']="active";
        $data['ac4_1']="";$data['ac4_2']="active";
        $data['ac5']="";
        $data['ac6']="";
        $data['ac7']="";
        $data['pengajar']  = $this->ModPelajaran->data_pengajar();
        $data['kelas_umum'] = $this->ModKelas->dataKelas();
        $data['mapel'] = $this->ModPelajaran->data_mapel();
        $this->load->view('sa_Dashboard', $data, FALSE);
	}

	public function tambah_mapel()
	{
		$data['id_pelajaran'] = $this->random(8);
		$data['nama_pelajaran'] = $this->input->post('nama_pelajaran');
		$data['id_pengajar'] = $this->input->post('nama_ustadz');
		$data['id_kelas'] = $this->input->post('nama_kelas');
		$this->ModPelajaran->tambah_pelajaran($data);
		$this->session->set_flashdata('sukses', 'Data mata pelajaran baru berhasil ditambahkan');
		redirect('Admin/pelajaran','refresh');
	}

	public function edit_pelajaran()
	{
		$id = $this->input->get('id');
		$data = $this->ModPelajaran->edit_pelajaran($id);
		echo json_encode($data);
	}

	public function update_mapel()
	{
		$id = $this->input->post('id_pelajaran');
		$data['nama_pelajaran'] = $this->input->post('nama_pelajaran');
		$data['id_pengajar'] = $this->input->post('nama_ustadz');
		$data['id_kelas'] = $this->input->post('nama_kelas');
		$this->ModPelajaran->update_pelajaran($id, $data);
		$this->session->set_flashdata('sukses', 'Data mata pelajaran berhasil diperbarui');
		redirect('Admin/pelajaran','refresh');

	}

	public function hapus()
	{
		$id_pelajaran = $this->input->get('pelajaran');
		$this->ModPelajaran->hapus_pelajaran($id_pelajaran);
		$this->session->set_flashdata('sukses', 'Data pelajaran berhasil dihapus');
		redirect('Admin/pelajaran','refresh');
	}

}

/* End of file Pelajaran.php */
/* Location: ./application/controllers/Admin/Pelajaran.php */