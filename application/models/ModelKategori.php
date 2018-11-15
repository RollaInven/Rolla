<?php
	class ModelKategori extends CI_Model{
		function list_kategori(){
			return $this->db->get('kategori');
			
		}

		function update($id_kategori){
        return $this->db->get_where('kategori', array('id_kategori'=>$id_kategori));
    	}
	}

?>