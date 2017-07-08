<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class M_Alumni extends CI_model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function data_alumni()
 	{
 		$data = $this->db->query("SELECT * from master_santri where status=0 order by id_santri asc");
 		if ($data) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 		unset($data);
 	}

 	public function tambah_alumni($data)
 	{
 		$this->db->query("INSERT INTO master_santri(id_santri,nama_santri,nama_panggilan,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat_santri,noTelpon_santri,email_santri,facebook_santri,tahun_masuk,tahun_boyong,password_santri,status,level) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array($data['id'],$data['nama'],$data['panggilan'],$data['tempat_lahir'],$data['tgl_lahir'],$data['jenis_kelamin'],$data['alamat'],$data['noTelpon'],$data['email'],$data['facebook'],$data['tahun_masuk'],$data['tahun_boyong'],$data['password'],$data['status'], $data['level']));
 		unset($data);
 	}

 	public function edit_alumni($id)
 	{
 		$dataal = $this->db->query("SELECT * from master_santri where id_santri = ?", array($id));
 		if ($dataal) {
 			return $dataal;
 		}else{
 			return false;
 		}
 		unset($dataal);
 	}

 	public function update_alumni($id_santri, $data)
 	{
 		$this->db->query("UPDATE master_santri SET nama_santri= ?,nama_panggilan=?, tempat_lahir=?,tanggal_lahir=?,jenis_kelamin=?,alamat_santri=?, noTelpon_santri=?, email_santri=?, facebook_santri=?,tahun_masuk=?, tahun_boyong=? where id_santri = ? ", array($data['nama'], $data['panggilan'],$data['kelahiran'], $data['tgl_lahir'], $data['kelamin'],$data['alamat'],$data['telpon'], $data['email'], $data['facebook'], $data['tahun_masuk'], $data['tahun_boyong'], $id_santri));
 		unset($id_santri, $data);
 	}

 	public function hapus_alumni($id_santri)
 	{
 		$this->db->where('id_santri', $id_santri);
 		$this->db->delete('master_santri');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 		unset($id_santri);
 	}

 } ?>