<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModNilai');
	}

	public function index()
	{
		$data['page'] = 'raport';
		$data['nilai'] = $this->ModNilai->data_nilai();
		$this->load->view('Pengajar/home', $data, FALSE);
	}

	public function edit_nilai()
	{
		$id = $_GET['id'];
		$data = $this->ModNilai->edit_nilai($id);
		echo json_encode($data);
	}

	public function tambah_nilai()
	{
		$id_nilai = $this->input->post('id_penilaian');
		echo $id_nilai;
	}
}

/* End of file Nilai.php */
/* Location: ./application/controllers/Pengajar/Nilai.php */