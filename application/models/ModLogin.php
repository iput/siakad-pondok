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
}
 ?>