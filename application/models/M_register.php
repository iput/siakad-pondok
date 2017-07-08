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
 	public function add_register($data)
 	{
 		$this->db->query("INSERT into master_santri(id_santri, nama_santri,nama_panggilan,noTelpon_santri,alamat_santri, password_santri,status,level) VALUES(?,?,?,?,?,?,?,?)", array($data['id'], $data['nama'], $data['panggilan'],$data['telepon'], $data['alamat'],$data['password'], $data['status'],$data['level']));
 		unset($data);
 	}

 	public function tambahWali($data)
 	{
 		$this->db->query("INSERT into wali_santri(id_wali, id_santri) values(?,?)", array($data['wali'], $data['santri']));
 		unset($data);
 	}

 	public function tambahPendidikan($data)
 	{
 		$this->db->query("INSERT into riwayat_pendidikan(id_edu, id_santri) values(?,?)", array($data['edu'], $data['santri']));
 		unset($data);	
 	}

 	public function add_saran($data)
 	{
 		$this->db->query("INSERT into masukan_saran(id_masukan,nama_pengirim, email_pengirim,tentang,konten_saran,tanggal_masuk,status) values(?,?,?,?,?,?,?)", array($data['id'], $data['nama'], $data['email'],$data['tentang'], $data['konten'], $data['tanggal'], $data['status']));
 		unset($data);
 	}

 	public function saranmasuk()
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