<?php
	class ModelSupplier extends CI_Model{

		public function list_supplier(){
			return $this->db->get('supplier');
		}

    	public function update($id_supplier){
        	return $this->db->get_where('supplier', array('id_supplier'=>$id_supplier));
    	}
	}
?>