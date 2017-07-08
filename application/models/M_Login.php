<?php defined('BASEPATH')OR exit('No direct script access allowed');
/**
* 
*/
class M_Login extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function Login($username,$password)
	{
		$query = $this->db->query("SELECT * from master_santri where nama_panggilan = ? and level=?", array($username, $password));
		return $query;
		$query = null;
		unset($username, $password);
	}
}
 ?>