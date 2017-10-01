<?php defined('BASEPATH')OR exit('no direct script access allowed');

/**
 *
 */
 class ModSantri extends CI_model
 {

 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function dataSantri($id)
 	{
    $query = $this->db->query("SELECT * from master_santri where id_santri=?", array($id));
    if ($query) {
      return $query->result_array();
    }else{
      return false;
    }
 	}

  public function calonPengurus()
  {
    $this->db->select("*");
    $this->db->from("master_santri");
    $this->db->join("userlog","master_santri.id_santri=userlog.id_santri");
    $this->db->where("userlog.level='santri'");
    $data = $this->db->get();
    if ($data) {
      return $data->result_array();
    }else{
      return false;
    }
    unset($data);
  }

 	public function SemuaSantri()
 	{
 		$this->db->select("*");
 		$this->db->from("master_santri");
 		$this->db->join("userlog","master_santri.id_santri=userlog.id_santri");
 		$this->db->where("userlog.level='santri'");
 		$data = $this->db->get();
 		if ($data) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 		unset($data);
 	}

 	public function semuaPengurus()
 	{
 		$this->db->select("*");
 		$this->db->from("master_santri");
 		$this->db->join("userlog", "master_santri.id_santri=userlog.id_santri");
 		$this->db->where("userlog.level !='santri'");
 		$this->db->where("userlog.level !='alumni'");
 		$data = $this->db->get();
 		if ($data) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 		unset($data);
 	}

 	public function TambahSantri($data)
 	{
 		$this->db->query("INSERT INTO master_santri(id_santri,nama_santri,nama_panggilan,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat_santri,noTelpon_santri,email_santri,facebook_santri,tahun_masuk) VALUES(?,?,?,?,?,?,?,?,?,?,?)", array($data['id'],$data['nama'],$data['panggilan'],$data['tempat_lahir'],$data['tgl_lahir'],$data['jenis_kelamin'],$data['alamat'],$data['noTelpon'],$data['email'],$data['facebook'],$data['tahun_masuk']));
 		unset($data);
 	}

  public function createUserlog($data)
 	{
 		$this->db->query("INSERT into userlog(idLog, id_santri,username,passwordlog,lastLogged,level, decryptCode)values(?,?,?,?,?,?,?)", array($data['idlog'], $data['santri'],$data['username'] ,$data['password'],$data['waktu'] ,$data['level'], $data['key']));
 		unset($data);
 	}
  public function hapus_pengurus(){
    //masih menjadi bingung hapus pengurus
  }
  public function cekRelasi($id)
  {
    $query = $this->db->query("SELECT * from userlog where id_santri=? ", array($id));
    if ($query) {
      return $query;
    }else{
      return false;
    }
  }

  public function hapusUserLog($id)
  {
    $this->db->where('idLog', $id);
    $this->db->where("level='santri'");
    $data = $this->db->delete('userlog');
    if ($data) {
      return true;
    }else{
      return false;
    }
  }

 	public function EditSantri($id)
 	{
 		$query = $this->db->query("SELECT * from master_santri where id_santri = ?", array($id));

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
 		$data = $this->db->delete('master_santri');
 		if ($data) {
 			return true;
 		}else{
 			return false;
 		}
 		unset($data);
 	}

  public function tambahLogAlumni($data)
  {
    $this->db->query("INSERT into logalumni(idLog,idSantri,tahunInput,alasanLog) values(?,?,?,?)", array($data['id'], $data['santri'], $data['tahun'], $data['alasan']));
    unset($data);
  }

  public function ubahStatusLog($id, $data)
  {
    $this->db->query("UPDATE userlog set level=? where id_santri=?", array($data['level'], $id));
    unset($id, $data);
  }

 } ?>
