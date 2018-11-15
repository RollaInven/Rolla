<?php
	class ModelUser extends CI_Model{
		function list_user(){
			return $this->db->get('login');
		}
	}
?>