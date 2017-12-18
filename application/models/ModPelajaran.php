<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModPelajaran extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function data_mapel()
	{
		$this->db->select('*');
		$this->db->from('mata_pelajaran');
		$this->db->join('master_santri', 'master_santri.id_santri = mata_pelajaran.id_pengajar', 'left');
		$this->db->join('kelas_diniyah', 'kelas_diniyah.id_kelas = mata_pelajaran.id_kelas', 'left');
		$data_mapel = $this->db->get();
		return $data_mapel->result();
	}

	public function data_pengajar()
	{
		$this->db->select('master_santri.id_santri, master_santri.nama_santri');
		$this->db->from('master_santri');
		$this->db->join('userlog', 'userlog.id_santri = master_santri.id_santri', 'left');
		$this->db->where('userlog.level="ustadz"');
		$data = $this->db->get();
		return $data->result();
		unset($data);
	}

	public function tambah_pelajaran($data)
	{
		$this->db->query('INSERT INTO mata_pelajaran(id_pelajaran,nama_pelajaran,id_pengajar,id_kelas)values(?,?,?,?)', array($data['id_pelajaran'], $data['nama_pelajaran'], $data['id_pengajar'], $data['id_kelas']));
		unset($data);
	}

	public function hapus_pelajaran($id)
	{
		$this->db->query('DELETE from mata_pelajaran where id_pelajaran=?',array($id));
		unset($id);
	}

	public function edit_pelajaran($id)
	{
		$data = $this->db->query('SELECT * from mata_pelajaran where id_pelajaran=?', array($id));
		return $data->row();
		unset($id, $data);
	}

	public function update_pelajaran($id, $data)
	{
		$this->db->query('UPDATE mata_pelajaran set nama_pelajaran=?,id_pengajar=?,id_kelas=? where id_pelajaran=?', array($data['nama_pelajaran'], $data['id_pengajar'], $data['id_kelas'], $id));
		unset($data, $id);
	}
}

/* End of file ModPelajaran.php */
/* Location: ./application/models/ModPelajaran.php */