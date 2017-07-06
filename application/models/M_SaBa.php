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
 	}

 	public function detailWali($id)
 	{
 		$query = $this->db->query("SELECT * from wali_santri where id_santri=?", array($id));
 			return $query;
 	}
 } ?>