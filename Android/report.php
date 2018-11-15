<?php  
	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$id_kategori=$_POST['id_kategori'];
	$tgl_masuk=$_POST['tgl_masuk'];
	$sql = "SELECT * FROM barang JOIN kategori ON kategori.id_kategori=barang.kategori_id_kategori JOIN detail_masuk ON detail_masuk.barang_id_barang=barang.id_barang JOIN barang_masuk ON barang_masuk.kode_masuk=detail_masuk.barang_masuk_kode_masuk WHERE kategori_id_kategori=$id_kategori AND month(tgl_masuk)=$tgl_masuk ORDER BY tgl_masuk DESC";
// 	AND month(tgl_masuk)=$tgl_masuk
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_kategori"=>$row['kategori_id_kategori'],
			"id_barang"=>$row['id_barang'],
			"gambar_barang"=>$row['gambar_barang'],
			"nama_barang"=>$row['nama_barang'],
			"tgl_masuk"=>$row['tgl_masuk'],
			"stok_barang"=>$row['stok_barang'],
			"stok_masuk"=>$row['stok_masuk']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>

 