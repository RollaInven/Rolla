<?php
include_once "koneksi.php";
class usr{}

$query = "SELECT *,max(detail_masuk.iddetail_masuk) as maxKode, max(barang_masuk.kode_masuk)as maxKode2 FROM barang JOIN detail_masuk ON barang.id_barang = detail_masuk.barang_id_barang JOIN barang_masuk ON barang_masuk.kode_masuk=detail_masuk.barang_masuk_kode_masuk JOIN users ON barang_masuk.users_id=users.id";
$hasil = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil);

// $detailMasuk = $data['maxKode'];
// $noUrut = (int) substr($detailMasuk, 3, 3);
// $noUrut++;
// $char = "BRG";
// $newID = $char . sprintf("%03s", $noUrut);

$barangMasuk = $data['maxKode2'];
$noUrut2 = (int) substr($barangMasuk, 3, 3);
$noUrut2++;
$char2 = "MSK";
$newID2 = $char2 . sprintf("%03s", $noUrut2);

//Memasukkan data textbox ke database
 $supplier = $_POST['id_supplier']; 
 $stokMasuk = $_POST['stok_masuk'];
 $stok_masuk = (int)$stokMasuk;
 $id_barang = $_POST['id_barang'];
 $id_supplier = $_POST['id_supplier'];
 $username = $_POST['email'];
 $time = date('Y-m-d G:i:s');
 
  if (($stok_masuk<1) || (empty($id_barang))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->pesan = "Kolom tidak boleh kosong atau bernilai 0"; 
	 	die(json_encode($response));
	 }

 $query9 = "SELECT *,max(detail_masuk.iddetail_masuk) as maxKode FROM detail_masuk";
 $hasilr = mysqli_query($con,$query9);
 $datar  = mysqli_fetch_array($hasilr);
 
$detailMasuk = $datar['maxKode'];
$noUrut = (int) substr($detailMasuk, 3, 3);
$noUrut++;
$char = "BRG";
$char2 = "MSK";
$newID = $char . sprintf("%03s", $noUrut);
$newID2 = $char2 . sprintf("%03s", $noUrut);
 
 $query3 = "SELECT * FROM barang WHERE id_barang=$id_barang";
 $hasilp = mysqli_query($con,$query3);
 $datap  = mysqli_fetch_array($hasilp);
 
   if (empty($datap)) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->pesan = "Data barang tidak ditemukan"; 
	 	die(json_encode($response));
	 }
	 
 $query8 = "SELECT * FROM users";
 $hasilq = mysqli_query($con,$query8);
 $dataq  = mysqli_fetch_array($hasilq);
 
 $id = $dataq['id'];
 $stokBaranga = $datap['stok_barang'];
 $stok_barang = (int)$stokBaranga;
 $totalStok = $stok_masuk + $stok_barang;

// membuat sql untuk insert data   
 //untuk field id dan tgl_reg tidak diisi karena otomatis akan diisi oleh database  
 $query2 = "INSERT INTO barang_masuk (kode_masuk,tgl_masuk,supplier_id_supplier,users_id)   
 VALUES ('$newID2', '$time', '$supplier','$id'); INSERT INTO detail_masuk (iddetail_masuk,stok_masuk,barang_id_barang,barang_masuk_kode_masuk)   
 VALUES ('$newID', '$stok_masuk', '$id_barang','$newID2');UPDATE barang SET stok_barang='$totalStok' WHERE id_barang='$id_barang';";

 $eksekusi = mysqli_multi_query($con, $query2); 
if ($eksekusi) {
      $response = new usr();
      $response->success = 1;
	  $response->pesan = "Input Data berhasil, stok barang saat ini ".$totalStok;
	  die (json_encode($response));
 } else {
      $response = new usr();
      $response->success = 0;
	  $response->pesan = "Input Data Gagal";
	  die (json_encode($response));
 }

?>