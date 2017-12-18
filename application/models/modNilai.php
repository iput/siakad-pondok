<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModNilai extends CI_Model {

	public function data_nilai()
	{
		$this->db->select('*');
		$this->db->from('penilaian');
		$this->db->join('master_santri', 'master_santri.id_santri = penilaian.id_santri', 'left');
		$this->db->join('kelas_diniyah', 'kelas_diniyah.id_kelas = penilaian.id_kelas', 'left');
		$this->db->join('mata_pelajaran', 'mata_pelajaran.id_pelajaran = penilaian.id_pelajaran', 'left');
		$data = $this->db->get();
		return $data->result();
	}

	public function edit_nilai($id)
	{
		$this->db->select('*');
		$this->db->from('penilaian');
		$this->db->join('master_santri', 'master_santri.id_santri = penilaian.id_santri', 'left');
		$this->db->join('kelas_diniyah', 'kelas_diniyah.id_kelas = penilaian.id_kelas', 'left');
		$this->db->join('mata_pelajaran', 'mata_pelajaran.id_pelajaran = penilaian.id_pelajaran', 'left');
		$this->db->where('penilaian.id_penilaian', $id);
		$data = $this->db->get();
		return $data->result();
	}

	public function update_nilai($id, $data)
	{
		$this->db->query('UPDATE penilaian set nilai=? where id_penilaian=?', array($data['nilai'], $id));
	}
}

/* End of file modNilai.php */
/* Location: ./application/models/modNilai.php */