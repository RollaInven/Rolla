<?php
	class ModelPetugas extends CI_Model{

		public function list_petugas(){
			return $this->db->get('login');
		}

    	public function update($username){
        	return $this->db->get_where('login', array('username'=>$username));
    	}
	}
?>