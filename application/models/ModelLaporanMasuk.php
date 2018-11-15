<?php
	class ModelLaporanMasuk extends CI_Model{
// 		function list_masuk(){
// 			$query = $this->db->query("SELECT * FROM detail_masuk JOIN barang, barang_masuk WHERE barang_id_barang = id_barang AND barang_masuk_kode_masuk = kode_masuk");
			
// 			return $query->result();
// 		}
		
		function list_masuk(){
			$query = $this->db->query("SELECT * FROM detail_masuk, barang, kategori, barang_masuk, simpan, supplier, users WHERE barang.id_barang = detail_masuk.barang_id_barang AND barang.kategori_id_kategori = kategori.id_kategori AND barang.simpan_id_simpan = simpan.id_simpan AND barang_masuk.supplier_id_supplier = supplier.id_supplier AND barang_masuk.users_id = users.id");
			
			return $query->result();
		}
		
		function list_keluar(){
			$query = $this->db->query("SELECT * FROM detail_keluar, barang, kategori, barang_keluar, simpan, supplier, users WHERE barang.id_barang = detail_keluar.barang_id_barang AND barang.kategori_id_kategori = kategori.id_kategori AND barang.simpan_id_simpan = simpan.id_simpan AND barang_keluar.users_id = users.id");
			return $query->result();
		}
		
		function list_retur(){
			$query = $this->db->query("SELECT * FROM detail_retur, barang, kategori, barang_retur, simpan, supplier, users WHERE barang.id_barang = detail_retur.barang_id_barang AND barang.kategori_id_kategori = kategori.id_kategori AND barang.simpan_id_simpan = simpan.id_simpan AND barang_retur.supplier_id_supplier = supplier.id_supplier AND barang_retur.users_id = users.id");
			return $query->result();

		}
	}
?>