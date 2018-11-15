<?php
	class ModelLaporanRetur extends CI_Model{
		function list_retur(){
			$query = $this->db->query('select iddetail_retur, stok_retur, keterangan_barangretur, kode_retur, nama_barang, tmp_simpanbarang, gambar_barang, kategori_id_kategori, tgl_retur, supplier_id_supplier, users_id FROM `detail_retur` JOIN barang on detail_retur.barang_id_barang = barang.id_barang JOIN barang_retur on detail_retur.barang_retur_kode_retur = barang_retur.kode_retur');
			return $query->result();


		}
	}
?>