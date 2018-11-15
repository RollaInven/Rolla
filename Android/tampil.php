<?php
include_once "koneksi.php";
class usr{}

$id_barang = $_POST["id_barang"];
$query = mysqli_query($con, "SELECT * FROM barang JOIN kategori ON barang.kategori_id_kategori=kategori.id_kategori JOIN simpan ON barang.simpan_id_simpan=simpan.id_simpan WHERE id_barang='$id_barang'");
if (mysqli_num_rows($query)>0){
    $row = mysqli_fetch_assoc($query);
    echo json_encode(array(
        "id_barang"=>$row["id_barang"],
        "nama_barang"=>$row["nama_barang"],
        "gambar_barang"=>$row['gambar_barang'],
        "stok_barang"=>$row['stok_barang'],
        "tmp_simpanbarang"=>$row["nama_tmpsimpan"],
        "nama_kategori"=>$row["nama_kategori"]));
}	

?>