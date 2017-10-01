<?php defined('BASEPATH')OR exit('No direct script access allowed');
/**
* 
*/
class ModLogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function Login($username,$password, $level)
	{
		$query = $this->db->query("SELECT * from userlog where username = ? and passwordlog=? AND level=?", array($username, $password, $level));
		return $query;
		$query = null;
		unset($username, $password);
	}
	public function ac_master($id_s){
		$query_m=$this->db->query("select*from master_santri where id_santri='$id_s'");
		return $query_m->row();
	}
}
 ?>