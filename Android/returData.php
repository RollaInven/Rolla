<?php
include_once "koneksi.php";
class usr{}

$query = "SELECT *,max(detail_retur.iddetail_retur) as maxKode, max(barang_retur.kode_retur)as maxKode2 FROM barang JOIN detail_retur ON barang.id_barang = detail_retur.barang_id_barang JOIN barang_retur ON barang_retur.kode_retur=detail_retur.barang_retur_kode_retur JOIN users ON barang_retur.users_id=users.id";
$hasil = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil);

// $detailRetur = $data['maxKode'];
// $noUrut = (int) substr($detailRetur, 3, 3);
// $noUrut++;
// $char = "RTR";
// $newID = $char . sprintf("%03s", $noUrut);

// $barangRetur = $data['maxKode2'];
// $noUrut2 = (int) substr($barangRetur, 3, 3);
// $noUrut2++;
// $char2 = "BCK";
// $newID2 = $char2 . sprintf("%03s", $noUrut2);

//Memasukkan data textbox ke database
 $supplier = $_POST['id_supplier']; 
 $stokRetur = $_POST['stok_retur'];
 $stok_retur = (int)$stokRetur;
 $id_barang = $_POST['id_barang'];
 $keterangan_retur=$_POST['keterangan_retur'];
 $username = $_POST['email'];
 $time = date('Y-m-d G:i:s');
 
  if (($stok_retur<1) || (empty($id_barang) || (empty($keterangan_retur)))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->pesan = "Kolom tidak boleh kosong atau bernilai 0"; 
	 	die(json_encode($response));
	 }
	 
 $query9 = "SELECT *,max(detail_retur.iddetail_retur) as maxKode FROM detail_retur";
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
 $totalStok = $stok_barang - $stok_retur;
 if ($totalStok<0) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->pesan = "Jumlah terlalu besar, stok barang saat ini = ".$stok_barang; 
	 	die(json_encode($response));
	 }

// membuat sql untuk insert data   
 //untuk field id dan tgl_reg tidak diisi karena otomatis akan diisi oleh database  
 $query2 = "INSERT INTO barang_retur (kode_retur,tgl_retur,supplier_id_supplier,users_id,keterangan_retur)   
 VALUES ('$newID2', '$time', '$supplier','$id', '$keterangan_retur'); INSERT INTO detail_retur (iddetail_retur,stok_retur, keterangan_barangretur, barang_id_barang,barang_retur_kode_retur)   
 VALUES ('$newID', '$stok_retur', '$keterangan_retur', '$id_barang','$newID2');UPDATE barang SET stok_barang='$totalStok' WHERE id_barang='$id_barang';";

 $eksekusi = mysqli_multi_query($con, $query2); 
if ($eksekusi) {
      $response = new usr();
      $response->success = 1;
	  $response->pesan = "Retur Barang berhasil, stok barang saat ini ".$totalStok;
	  die (json_encode($response));
 } else {
      $response = new usr();
      $response->success = 0;
	  $response->pesan = "Retur Barang Gagal";
	  die (json_encode($response));
 }

?>