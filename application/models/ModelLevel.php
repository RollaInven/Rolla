<?php
	class ModelLevel extends CI_Model{
		function list_level(){
			return $this->db->get('level');
		}
	}
?>
