<?php defined('BASEPATH')OR exit('no direct script access allowed');

/**
 * 
 */
 class M_santri extends CI_model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function Semua_Santri()
 	{
 		$result = $this->db->query("SELECT * FROM master_santri where status ='1' order by id_santri asc");
 		if ($result) {
 			return $result->result_array();
 		}else{
 			return false;
 		}
 		unset($result);
 	}

 	public function Tambah_Santri($data)
 	{
 		$this->db->query("INSERT INTO master_santri(id_santri,nama_santri,nama_panggilan,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat_santri,noTelpon_santri,email_santri,facebook_santri,tahun_masuk,tahun_boyong,password_santri,status,level) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array($data['id'],$data['nama'],$data['panggilan'],$data['tempat_lahir'],$data['tgl_lahir'],$data['jenis_kelamin'],$data['alamat'],$data['noTelpon'],$data['email'],$data['facebook'],$data['tahun_masuk'],$data['tahun_boyong'],$data['password'],$data['status'], $data['level']));
 		unset($data);
 	}

 	public function Edit_Santri($id)
 	{
 		$query = $this->db->query("SELECT * from master_santri where id_santri = ?", array($id));

 		if ($query) {
 			return $query;
 		}else{
 			return false;
 		}
 		unset($query);
 	}

 	public function JadikanPengurus($id)
 	{
 		$this->db->query("UPDATE master_santri set level=2 where id_santri=?", array($id));
 		unset($id);
 	}

 	public function LepaskanPengurus($id)
 	{
 		$this->db->query("UPDATE master_santri set level=1 where id_santri=?", array($id));
 		unset($id);
 	}

 	public function Update_Santri($id_santri, $data)
 	{
 		$this->db->query("UPDATE master_santri SET nama_santri= ?,nama_panggilan=?, tempat_lahir=?,tanggal_lahir=?,jenis_kelamin=?,alamat_santri=?, noTelpon_santri=?, email_santri=?, facebook_santri=?,tahun_masuk=?, tahun_boyong=? where id_santri = ? ", array($data['nama'], $data['panggilan'],$data['kelahiran'], $data['tgl_lahir'], $data['kelamin'],$data['alamat'],$data['telpon'], $data['email'], $data['facebook'], $data['tahun_masuk'], $data['tahun_boyong'], $id_santri));
 		unset($id_santri, $data);
 	}

 	public function Hapus_Santri($id)
 	{
 		$this->db->where('id_santri', $id);
 		$data = $this->db->delete('master_santri');
 		if ($data) {
 			return true;
 		}else{
 			return false;
 		}
 		unset($data);
 	}

 } ?>