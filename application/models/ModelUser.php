<?php

	class ModelUser extends CI_Model{

		function list_user(){
			return $this->db->get('users');
		}
		function Update($id){
			return $this->db->get_where('users', array('id'=>$id));
		}
	}
?>