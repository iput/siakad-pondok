<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class ModKamar extends CI_model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function SemuaKamar()
 	{
 		$result =  $this->db->get('kamar_pondok');
 		if ($result->num_rows()>0) {
 			return $result->result();
 		}else{
 			return false;
 		}
 		unset($result);
 	}

 	public function KamarPutra()
 	{
 		$this->db->where('ket_kamar=1');
 		$result= $this->db->get('kamar_pondok');
 		if ($result->num_rows()>0) {
 			return $result->result();
 		}else{
 			return false;
 		}
 		unset($result);
 	}

 	public function KamarPutri()
 	{
 		$this->db->where('ket_kamar=0');
 		$result= $this->db->get('kamar_pondok');
 		if ($result->num_rows()>0) {
 			return $result->result();
 		}else{
 			return false;
 		}
 		unset($result);
 	}

 	public function TambahKamar($db_kamar)
 	{
 		$this->db->query("INSERT into kamar_pondok(id_kamar,nama_kamar,kuota_kamar,ket_kamar) values(?,?,?,?)", array($db_kamar['idkmr'],$db_kamar['nmkmr'],$db_kamar['kuota'],$db_kamar['ketkmr']));
 		unset($db_kamar);
 	}

 	public function EditKamar()
 	{
 		$idKamar = $this->input->get('id');
 		$this->db->where('id_kamar', $idKamar);
 		$datakmr = $this->db->get('kamar_pondok');
 		if ($datakmr->num_rows()>0) {
 			return $datakmr->row();
 		}else{
 			return false;
 		}
 		unset($idKamar, $datakmr);
 	}

 	public function UpdateKamar($id_kamar, $data)
 	{
 	$this->db->query("UPDATE kamar_pondok set nama_kamar=?,kuota_kamar=?,ket_kamar=? where id_kamar=?",array($data['nama'], $data['kuota'],$data['modul'], $id_kamar));
 	unset($id_kamar, $data);
 	}

 	public function HapusKamar($idkamar)
 	{
 		$this->db->where('id_kamar', $idkamar);
 		$this->db->delete('kamar_pondok');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 		unset($idkamar);
 	}

 	public function TambahPersonil($data)
 	{
 		$this->db->query("INSERT into trans_kamar(id_trans,id_kamar,id_santri,keterangan)values(?,?,?,?)",array($data['idtrans'],$data['idkmr'],$data['idstr'],$data['ket']));
 		unset($data);
 	}

 	public function SemuaPersonil()
 	{
 		$this->db->select("trans_kamar.id_trans,trans_kamar.keterangan,kamar_pondok.id_kamar,kamar_pondok.nama_kamar,master_santri.nama_santri,master_santri.noTelpon_santri");
 		$this->db->from("trans_kamar");
 		$this->db->join("kamar_pondok",'trans_kamar.id_kamar=kamar_pondok.id_kamar');
 		$this->db->join('master_santri','trans_kamar.id_santri=master_santri.id_santri');
 		$data = $this->db->get();
 		return $data->result_array();
 		unset($data);
 	}

 	public function EditPersonil()
 	{
 		$id = $this->input->get('id');
 		$this->db->where('id_trans', $id);
 		$data= $this->db->get('trans_kamar');
 		if ($data->num_rows()>0) {
 			return $data->row();
 		}else{
 			return false;
 		}
 		unset($id, $data);
 	}

 	public function AmbilKuota($id)
 	{
		$datakuota = $this->db->query("SELECT kuota_kamar from kamar_pondok where id_kamar=?", array($id));
		if ($datakuota) {
			return $datakuota->result_array();
		}else{
			return false;
		}
		unset($datakuota, $id);

 	}

 	public function UpdateKuotaKamar($idkamar, $data)
 	{
 		$this->db->query("UPDATE kamar_pondok set kuota_kamar=? where id_kamar=?", array($data['kuota'], $idkamar));
 		unset($idKamar, $data);
 	}

 	public function HapusPersonil($id)
 	{
 		$this->db->where('id_trans', $id);
 		$this->db->delete('trans_kamar');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 		unset($id);
 	}

 	public function CekAnggota($id)
 	{
 		$this->db->where('id_santri',$id);
 		$data = $this->db->get('trans_kamar');
 		if ($data->affected_rows()>0) {
 			return count($data->row());
 		}else{
 			return false;
 		}
 		unset($data);
 	}

 	public function UpdatePersonil($id, $data)
 	{
 		$this->db->query("UPDATE trans_kamar set id_kamar=?, id_santri=?, keterangan=? where id_trans=?",array($data['idkamar'], $data['idsantri'], $data['ket'], $id));
 		unset($id,$data);
 	}

 	public function PersonilPutra()
 	{
 		$this->db->select("trans_kamar.id_trans,trans_kamar.keterangan,kamar_pondok.id_kamar,kamar_pondok.nama_kamar,master_santri.nama_santri,master_santri.noTelpon_santri");
 		$this->db->from("trans_kamar");
 		$this->db->join("kamar_pondok",'trans_kamar.id_kamar=kamar_pondok.id_kamar');
 		$this->db->join('master_santri','trans_kamar.id_santri=master_santri.id_santri');
 		$this->db->where('master_santri.jenis_kelamin=1');
 		$data = $this->db->get();
 		return $data->result_array();
 		unset($data);
 	}

 	public function PersonilPutri()
 	{
 		$this->db->select("trans_kamar.id_trans,trans_kamar.keterangan,kamar_pondok.id_kamar,kamar_pondok.nama_kamar,master_santri.nama_santri,master_santri.noTelpon_santri");
 		$this->db->from("trans_kamar");
 		$this->db->join("kamar_pondok",'trans_kamar.id_kamar=kamar_pondok.id_kamar');
 		$this->db->join('master_santri','trans_kamar.id_santri=master_santri.id_santri');
 		$this->db->where('master_santri.jenis_kelamin=0');
 		$data = $this->db->get();
 		return $data->result_array();
 		unset($data);
 	}

 } ?>