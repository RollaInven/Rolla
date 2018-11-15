<?php
	class ModelSimpan extends CI_Model{
		function list_simpan(){
			return $this->db->get('simpan');
			
		}

		function update($id_simpan){
        return $this->db->get_where('simpan', array('id_simpan'=>$id_simpan));
    	}
	}

?>