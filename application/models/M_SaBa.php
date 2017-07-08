<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class M_SaBa extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function detailSantri($id)
 	{
 		$query = $this->db->query("SELECT * from master_santri where id_santri=?", array($id));
 		if ($query) {
 			return $query;
 		}else{
 			return false;
 		}
 		unset($query);
 	}

 	public function detailWali($id)
 	{
 		$query = $this->db->query("SELECT * from wali_santri where id_santri=?", array($id));
 		return $query;
 		unset($query);
 	}

 	public function detailEdu($id)
 	{
 		$query = $this->db->query("SELECT * from riwayat_pendidikan where id_santri=?", array($id));
 		return $query;
 		unset($query);
 	}

 	public function update_santri($id_santri, $data)
 	{
 		$this->db->query("UPDATE master_santri SET nama_santri= ?,nama_panggilan=?, tempat_lahir=?,tanggal_lahir=?,jenis_kelamin=?,alamat_santri=?, noTelpon_santri=?, email_santri=?, facebook_santri=?,tahun_masuk=?, tahun_boyong=?,password_santri=? where id_santri = ? ", array($data['nama'], $data['panggilan'],$data['kelahiran'], $data['tgl_lahir'], $data['kelamin'],$data['alamat'],$data['telpon'], $data['email'], $data['facebook'], $data['tahun_masuk'], $data['tahun_boyong'],$data['password'], $id_santri));
 		unset($id_santri, $data);
 	}

 	public function updateWali($idwali, $data)
 	{
 		$this->db->query("UPDATE wali_santri set nama_ayah=?, pekerjaan_ayah=?, alamat_ayah=?,  notelpon_ayah=?,nama_ibu=?,pekerjaan_ibu =?, alamat_ibu =?, notelpon_ibu=? where id_wali=?", array($data['nmayah'], $data['pkjayah'],$data['almtayah'], $data['tlpayah'], $data['nmibu'], $data['pkjibu'], $data['almtibu'], $data['tlpibu'],$idwali));
 		unset($idwali, $data);
 	}

 	public function updateEdu($idEdu, $data)
 	{
 		$this->db->query("UPDATE riwayat_pendidikan set nama_sd=?,alamat_sd=?,tahun_lulus_sd=?, nama_smp=?, alamat_smp=?,tahun_lulus_smp=?, nama_sma=?, alamat_sma=?,tahun_lulus_sma=?, nama_pt=?, jurusan_pt=?, alamat_pt=?,tahun_lulus_pt=? where id_edu=?",array($data['sd'],$data['almtsd'],$data['lulussd'],$data['smp'], $data['almtsmp'], $data['lulussmp'], $data['sma'],$data['almtsma'], $data['lulussma'], $data['pt'], $data['jurusanpt'], $data['almtpt'], $data['luluspt'], $idEdu));
 		unset($idEdu, $data);
 	}
 } ?>