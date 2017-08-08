<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class ModSaBa extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function DetailSantri($id)
 	{
 		$query = $this->db->query("SELECT * from master_santri where id_santri=?", array($id));
 		if ($query) {
 			return $query;
 		}else{
 			return false;
 		}
 		unset($query);
 	}

 	public function DetailWali($id)
 	{
 		$query = $this->db->query("SELECT * from master_santri where id_santri=?", array($id));
 		return $query;
 		unset($query);
 	}

 	public function DetailEdu($id)
 	{
 		$query = $this->db->query("SELECT * from master_santri where id_santri=?", array($id));
 		return $query;
 		unset($query);
 	}

 	public function UpdateSantri($id_santri, $data)
 	{
 		$this->db->query("UPDATE master_santri SET nama_santri= ?,nama_panggilan=?, tempat_lahir=?,tanggal_lahir=?,jenis_kelamin=?,alamat_santri=?, noTelpon_santri=?, email_santri=?, facebook_santri=?,tahun_masuk=? where id_santri = ? ", array($data['nama'], $data['panggilan'],$data['kelahiran'], $data['tgl_lahir'], $data['kelamin'],$data['alamat'],$data['telpon'], $data['email'], $data['facebook'], $data['tahun_masuk'], $id_santri));
 		unset($id_santri, $data);
 	}

 	public function UpdateWali($idwali, $data)
 	{
 		$this->db->query("UPDATE master_santri set nama_ayah=?, pekerjaan_ayah=?, alamat_ayah=?,  notelpon_ayah=?,nama_ibu=?,pekerjaan_ibu =?, alamat_ibu =?, notelpon_ibu=? where id_santri=?", array($data['nmayah'], $data['pkjayah'],$data['almtayah'], $data['tlpayah'], $data['nmibu'], $data['pkjibu'], $data['almtibu'], $data['tlpibu'],$idwali));
 		unset($idwali, $data);
 	}

 	public function UpdateEdu($idEdu, $data)
 	{
 		$this->db->query("UPDATE master_santri set nama_sd=?,alamat_sd=?,lulus_sd=?, nama_smp=?, alamat_smp=?,lulus_smp=?, nama_sma=?, alamat_sma=?,lulus_sma=?, nama_pt=?, jurusan_pt=?, alamat_pt=?,tahun_wisuda=? where id_santri=?",array($data['sd'],$data['almtsd'],$data['lulussd'],$data['smp'], $data['almtsmp'], $data['lulussmp'], $data['sma'],$data['almtsma'], $data['lulussma'], $data['pt'], $data['jurusanpt'], $data['almtpt'], $data['luluspt'], $idEdu));
 		unset($idEdu, $data);
 	}
 } ?>