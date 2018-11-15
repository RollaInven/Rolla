<?php
	class ModelLaporanKeluar extends CI_Model{
		function list_keluar(){
			$query = $this->db->query('select iddetail_keluar, stok_keluar, kode_keluar, nama_barang, tmp_simpanbarang, gambar_barang, kategori_id_kategori, tgl_keluar, users_id FROM `detail_keluar` JOIN barang on detail_keluar.barang_id_barang = barang.id_barang JOIN barang_keluar on detail_keluar.barang_keluar_kode_keluar = barang_keluar.kode_keluar');
			return $query->result();
		}
	}
?>