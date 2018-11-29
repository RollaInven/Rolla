<?php
	class ModelBarangKeluar extends CI_Model{
		function list_keluar(){
			//return $this->db->get('barang');
			// $query = $this->db->query("SELECT * FROM barang JOIN kategori WHERE kategori_id_kategori = id_kategori");
			// return $query->result();
			// return $this->db->get('namakategori');
			$query = $this->db->query("SELECT * FROM namakategori");
			return $query->result();
		}

		public function delete($id_keluar){
        $this->db->where('id_keluar',$id_keluar);
		$this->db->delete('keluar');
    	}

		public function update($id){
        	return $this->db->get_where('keluar', array('id_keluar'=>$id));
    	}
    	
    	function insertData($data){
			return $this->db->insert('detail_keluar',$data);
		}
	}
?>