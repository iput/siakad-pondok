<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModKelas extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function dataKelas()
	{
		$query = $this->db->query("SELECT id_kelas,nama_kelas, kuota_kelas,lokasi_kelas,nama_santri,noTelpon_santri, keterangan_kelas, status_kelas from kelas_diniyah LEFT JOIN master_santri on master_santri.id_santri= kelas_diniyah.wali_kelas ");
		return $query->result();
		unset($query);
	}

	public function detailKelas($id)
	{
		$this->db->select('id_kelas,nama_kelas, kuota_kelas,lokasi_kelas,nama_santri,noTelpon_santri, keterangan_kelas, status_kelas');
		$this->db->from('kelas_diniyah');
		$this->db->join('master_santri', 'master_santri.id_santri = kelas_diniyah.wali_kelas', 'left');
		$this->db->where('kelas_diniyah.id_kelas', $id);
		$data = $this->db->get();
		return $data->row();
	}

	public function personilKelas($id)
	{
		$this->db->select('id_kelas,id_transkelas,nama_kelas,alamat_santri, kuota_kelas,lokasi_kelas,nama_santri,noTelpon_santri, keterangan_kelas, status_kelas, status_aktif');
		$this->db->from('kelas_diniyah');
		$this->db->join('transkelas', 'kelas_diniyah.id_kelas = transkelas.idkelas ', 'left');
		$this->db->join('master_santri', 'transkelas.id_santri = master_santri.id_santri', 'left');
		$this->db->where('kelas_diniyah.id_kelas', $id);
		$data = $this->db->get();
		return $data->result();
	}

	public function nonAktifkanPersonil($id, $data)
	{
		$query = $this->db->query('UPDATE transkelas set status_aktif=? where id_transkelas=?', array($data['status'], $id));
		return $query;
		unset($query, $id, $data);
	}

	public function dataWali()
	{
		$this->db->select('master_santri.id_santri, master_santri.nama_santri');
		$this->db->from('master_santri');
		$this->db->join('userlog', 'userlog.id_santri = master_santri.id_santri', 'left');
		$this->db->where('userlog.level', 'santri');
		$data = $this->db->get();
		return $data->result();
	}

	public function tambahKelas($data)
	{
		$query = $this->db->query('INSERT INTO kelas_diniyah(id_kelas, nama_kelas, kuota_kelas,lokasi_kelas, wali_kelas,keterangan_kelas, status_kelas)values(?,?,?,?,?,?,?)', array($data['id'], $data['nama'], $data['kuota'], $data['lokasi'], $data['wali'], $data['keterangan'], $data['status']));
		return $query;
		unset($data, $query);
	}

	public function tambahPersonil($data)
	{
		$this->db->query('INSERT INTO transkelas(id_transkelas, idkelas, id_santri, ket, status_aktif) values(?,?,?,?,?)', array($data['id_transkelas'], $data['id_kelas'], $data['id_santri'], $data['ket'], $data['status_aktif']));
		unset($data);
	}
	

}

/* End of file ModKelas.php */
/* Location: ./application/models/ModKelas.php */