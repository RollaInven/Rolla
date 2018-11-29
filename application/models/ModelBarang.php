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

		public function getData($id){
			$this->db->like('id_barang',$id,'both');
			$this->db->from('barang');
			$this->db->join('kategori','barang.kategori_id_kategori = kategori.id_kategori');
			$this->db->join('simpan','barang.simpan_id_simpan = simpan.id_simpan');
			$this->db->order_by('id_barang','ASC');
			$this->db->limit(10);
			// $query = $this->db->query("SELECT id_barang FROM barang WHERE id_barang LIKE '%".$id."%' ORDER BY id_barang ASC LIMIT 5");
			$query = $this->db->get();
			return($query->result());
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