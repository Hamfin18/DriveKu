<?php if(! defined('BASEPATH'))exit('No Direct Script Access Alowed');
	class model_login extends CI_Model{
	
	function login($where){

		return $this->db->get_where('user',$where);
	}


	}
?>