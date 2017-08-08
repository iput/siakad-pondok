<?php defined('BASEPATH')OR exit('no direct script access allowed');

/**
 * 
 */
 class ModInformasi extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function semuaInformasi()
 	{
 		$data = $this->db->query("SELECT * from informasi order by tanggalInput desc");
 		if ($data) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 	}

 	public function ambilKomentar()
 	{
 		$this->db->select("*");
 		$this->db->from("komentar");
 		$this->db->join("master_santri","komentar.idSantri=master_santri.id_santri");
 		$this->db->join("informasi","komentar.idInfo=informasi.idInfo");
 		$this->db->where("komentar.idInfo=informasi.idInfo");
 		$data= $this->db->get();
 		if ($data) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 	}

 	public function tambahInformasi($data)
 	{
 		$this->db->query("INSERT into informasi(idInfo,judulInfo,penulisInfo,tanggalInput, kontentInfo) values(?,?,?,?,?)", array($data['id'], $data['judul'],$data['penulis'], $data['tanggal'], $data['konten']));
 		unset($data);
 	}

 	public function hapusInformasi($id)
 	{
 		$this->db->where('idInfo', $id);
 		$this->db->delete('informasi');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}
 } ?>