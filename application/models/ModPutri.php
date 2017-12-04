<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Modputri extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function SemuaSantri()
 	{
 		$this->db->select("*");
 		$this->db->from("master_santri");
 		$this->db->join("userlog","master_santri.id_santri=userlog.id_santri");
 		$this->db->where("userlog.level='santri'");
 		$this->db->where("master_santri.jenis_kelamin='0'");
 		$data = $this->db->get();
 		if ($data) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 		unset($data);
 	}

 	public function SantriBaru($data)
 	{
 		$this->db->query("INSERT INTO master_santri(id_santri,nama_santri,nama_panggilan,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat_santri,noTelpon_santri,email_santri,facebook_santri,tahun_masuk) VALUES(?,?,?,?,?,?,?,?,?,?,?)", array($data['id'],$data['nama'],$data['panggilan'],$data['tempat_lahir'],$data['tgl_lahir'],$data['jenis_kelamin'],$data['alamat'],$data['noTelpon'],$data['email'],$data['facebook'],$data['tahun_masuk']));
 		unset($data);
 	}

 	public function EditSantri($id)
 	{
 		$query = $this->db->query("SELECT * from master_santri where id_santri=?",array($id));
 		if ($query) {
 			return $query;
 		}else{
 			return false;
 		}
 		unset($query);
 	}

 	public function UpdateSantri($id_santri, $data)
 	{
 		$this->db->query("UPDATE master_santri SET nama_santri= ?,nama_panggilan=?, tempat_lahir=?,tanggal_lahir=?,jenis_kelamin=?,alamat_santri=?, noTelpon_santri=?, email_santri=?, facebook_santri=?,tahun_masuk=? where id_santri = ? ", array($data['nama'], $data['panggilan'],$data['kelahiran'], $data['tgl_lahir'], $data['kelamin'],$data['alamat'],$data['telpon'], $data['email'], $data['facebook'], $data['tahun_masuk'], $id_santri));
 		unset($id_santri, $data);
 	}

 	public function HapusSantri($id)
 	{
 		$this->db->where('id_santri', $id);
 		$this->db->delete('userlog');
 		$this->db->where('id_santri', $id);
 		$this->db->delete('master_santri');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 		unset($id);
 	}

 	public function cekRelasi($id)
 	{
 		$query =$this->db->query("SELECT * from userlog where id_santri=?", array($id));
 		if ($query) {
 			return $query;
 		}else{
 			return false;
 		}
 	}
 } ?>