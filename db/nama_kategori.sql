CREATE VIEW `nama_kategori` AS SELECT * FROM barang , kategori 
WHERE barang.kategori_id_kategori = kategori.id_kategori