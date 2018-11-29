<?php
	class ModelBarangMasuk extends CI_Model{
		function list_masuk(){
			//return $this->db->get('barang');
			// $query = $this->db->query("SELECT * FROM barang JOIN kategori WHERE kategori_id_kategori = id_kategori");
			// return $query->result();
			// return $this->db->get('namakategori');
			$query = $this->db->query("SELECT * FROM namakategori");
			return $query->result();
		}

		public function delete($id_masuk){
        $this->db->where('id_masuk',$id_masuk);
		$this->db->delete('masuk');
    	}

		public function update($id){
        	return $this->db->get_where('masuk', array('id_masuk'=>$id));
    	}

    	function insertData($data){
			return $this->db->insert('detail_masuk',$data);
		}
	}
?>