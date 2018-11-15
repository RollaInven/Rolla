<?php
include_once "koneksi.php";
class usr{}

$query = "SELECT *,max(detail_keluar.iddetail_keluar) as maxKode, max(barang_keluar.kode_keluar)as maxKode2 FROM barang JOIN detail_keluar ON barang.id_barang = detail_keluar.barang_id_barang JOIN barang_keluar ON barang_keluar.kode_keluar=detail_keluar.barang_keluar_kode_keluar JOIN users ON barang_keluar.users_id=users.id";
$hasil = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil);

// $detailKeluar = $data['maxKode'];
// $noUrut = (int) substr($detailKeluar, 3, 3);
// $noUrut++;
// $char = "OUT";
// $newID = $char . sprintf("%03s", $noUrut);

// $barangKeluar = $data['maxKode2'];
// $noUrut2 = (int) substr($barangKeluar, 3, 3);
// $noUrut2++;
// $char2 = "KLR";
// $newID2 = $char2 . sprintf("%03s", $noUrut2);

//Memasukkan data textbox ke database
 $gambar_barang = $_POST['gambar_barang'];
 $stokKeluar = $_POST['stok_keluar'];
 $stok_keluar = (int)$stokKeluar;
 $id_barang = $_POST['id_barang'];
 $username = $_POST['email'];
 $time = date('Y-m-d G:i:s');
 
  if (($stok_keluar<1) || (empty($id_barang))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->pesan = "Kolom tidak boleh kosong atau bernilai 0"; 
	 	die(json_encode($response));
	 }
	 
 $query9 = "SELECT *,max(detail_keluar.iddetail_keluar) as maxKode FROM detail_keluar";
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
 $totalStok =$stok_barang - $stok_keluar;
  if ($totalStok<0) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->pesan = "Jumlah terlalu besar, stok barang saat ini = ".$stok_barang; 
	 	die(json_encode($response));
	 }

// membuat sql untuk insert data   
 //untuk field id dan tgl_reg tidak diisi karena otomatis akan diisi oleh database  
 $query2 = "INSERT INTO barang_keluar (kode_keluar,tgl_keluar,users_id)   
 VALUES ('$newID2', '$time', '$id'); INSERT INTO detail_keluar (iddetail_keluar,stok_keluar,barang_id_barang,barang_keluar_kode_keluar)   
 VALUES ('$newID', '$stok_keluar', '$id_barang','$newID2');UPDATE barang SET stok_barang='$totalStok' WHERE id_barang='$id_barang';";

 $eksekusi = mysqli_multi_query($con, $query2); 
if ($eksekusi) {
      $response = new usr();
      $response->success = 1;
	  $response->pesan = "Out Data berhasil, total stok saat ini ".$totalStok;
	  die (json_encode($response));
 } else {
      $response = new usr();
      $response->success = 0;
	  $response->pesan = "Out Data Gagal";
	  die (json_encode($response));
 }

?>