<?php defined('BASEPATH')OR exit('No direcet script access allowed');
/**
 * 
 */
 class M_register extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function Add_Register($data)
 	{
 		$this->db->query("INSERT into master_santri(id_santri, nama_santri,nama_panggilan,noTelpon_santri,alamat_santri, password_santri,status,level) VALUES(?,?,?,?,?,?,?,?)", array($data['id'], $data['nama'], $data['panggilan'],$data['telepon'], $data['alamat'],$data['password'], $data['status'],$data['level']));
 		unset($data);
 	}

 	public function TambahWali($data)
 	{
 		$this->db->query("INSERT into wali_santri(id_wali, id_santri) values(?,?)", array($data['wali'], $data['santri']));
 		unset($data);
 	}

 	public function TambahPendidikan($data)
 	{
 		$this->db->query("INSERT into riwayat_pendidikan(id_edu, id_santri) values(?,?)", array($data['edu'], $data['santri']));
 		unset($data);	
 	}

 	public function Add_Saran($data)
 	{
 		$this->db->query("INSERT into masukan_saran(id_masukan,nama_pengirim, email_pengirim,tentang,konten_saran,tanggal_masuk,status) values(?,?,?,?,?,?,?)", array($data['id'], $data['nama'], $data['email'],$data['tentang'], $data['konten'], $data['tanggal'], $data['status']));
 		unset($data);
 	}

 	public function SaranMasuk()
 	{
 		$data = $this->db->query("SELECT * from masukan_saran");
 		if ($data) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 		unset($data);
 	}

 } ?>