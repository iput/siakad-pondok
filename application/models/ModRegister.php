<?php defined('BASEPATH')OR exit('No direcet script access allowed');
/**
 * 
 */
 class ModRegister extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function AddRegister($data)
 	{
 		$this->db->query("INSERT into master_santri(id_santri, nama_santri,nama_panggilan,noTelpon_santri) VALUES(?,?,?,?)", array($data['id'], $data['nama'], $data['panggilan'],$data['telepon']));
 		unset($data);
 	}

 	public function createUserlog($data)
 	{
 		$this->db->query("INSERT into userlog(idLog, id_santri,username,passwordlog,lastLogged,level, decryptCode)values(?,?,?,?,?,?,?)", array($data['idlog'], $data['santri'],$data['username'] ,$data['password'],$data['waktu'] ,$data['level'], $data['key']));
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

 	public function AddSaran($data)
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

 	public function Tanggapi()
 	{
 		$id = $this->input->get('id');
 		$this->db->where("id_masukan", $id);
 		$data = $this->db->get("masukan_saran");
 		if ($data->num_rows()>0) {
 			return $data->row();
 		}else{
 			return false;
 		}
 	}

 	public function updateTanggapan($id, $data)
 	{
 		$this->db->query("UPDATE masukan_saran set status=? where id_masukan=?", array($data['tanggapan'], $id));
 		unset($id, $data);
 	}

 	public function hapusSaran($id)
 	{
 		$this->db->where("id_masukan", $id);
 		$this->db->delete("masukan_saran");
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}

 } ?>