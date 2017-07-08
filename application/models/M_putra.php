<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class M_putra extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function semuaSantri()
 	{
 		$query = $this->db->query("SELECT * from master_santri where jenis_kelamin=1 and status=1");
 		if ($query) {
 			return $query->result_array();
 		}else{
 			return false;
 		}
 		unset($query);
 	}

 	public function santriBaru($data)
 	{
 		$this->db->query("INSERT INTO master_santri(id_santri,nama_santri,nama_panggilan,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat_santri,noTelpon_santri,email_santri,facebook_santri,tahun_masuk,tahun_boyong,password_santri,status,level) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array($data['id'],$data['nama'],$data['panggilan'],$data['tempat_lahir'],$data['tgl_lahir'],$data['jenis_kelamin'],$data['alamat'],$data['noTelpon'],$data['email'],$data['facebook'],$data['tahun_masuk'],$data['tahun_boyong'],$data['password'],$data['status'], $data['level']));
 		unset($data);
 	}

 	public function editSantri($id)
 	{
 		$query = $this->db->query("SELECT * from master_santri where id_santri=?",array($id));
 		if ($query) {
 			return $query;
 		}else{
 			return false;
 		}
 		unset($query);
 	}

 	public function update_santri($id_santri, $data)
 	{
 		$this->db->query("UPDATE master_santri SET nama_santri= ?,nama_panggilan=?, tempat_lahir=?,tanggal_lahir=?,jenis_kelamin=?,alamat_santri=?, noTelpon_santri=?, email_santri=?, facebook_santri=?,tahun_masuk=?, tahun_boyong=? where id_santri = ? ", array($data['nama'], $data['panggilan'],$data['kelahiran'], $data['tgl_lahir'], $data['kelamin'],$data['alamat'],$data['telpon'], $data['email'], $data['facebook'], $data['tahun_masuk'], $data['tahun_boyong'], $id_santri));
 		unset($id_santri, $data);
 	}

 	public function hapusSantri($id)
 	{
 		$this->db->where('id_santri', $id);
 		$this->db->delete('master_santri');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 		unset($id);
 	}
 } ?>