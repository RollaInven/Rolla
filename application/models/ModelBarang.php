<?php
	class ModelBarang extends CI_Model{
		function list_barang(){
			//return $this->db->get('barang');
			// $query = $this->db->query("SELECT * FROM barang JOIN kategori WHERE kategori_id_kategori = id_kategori");
			// return $query->result();
			// return $this->db->get('namakategori');
			$query = $this->db->query("SELECT * FROM namakategori");
			return $query->result();
		}

		public function delete($id_barang){
        $this->db->where('id_barang',$id_barang);
		$this->db->delete('barang');
    	}

		public function update($id){
        	return $this->db->get_where('barang', array('id_barang'=>$id));
    	}
	}
?>