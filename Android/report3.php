<?php  
	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$id_kategori=$_POST['id_kategori'];
	$tgl_retur=$_POST['tgl_retur'];
	$sql = "SELECT * FROM barang JOIN kategori ON kategori.id_kategori=barang.kategori_id_kategori JOIN detail_retur ON detail_retur.barang_id_barang=barang.id_barang JOIN barang_retur ON barang_retur.kode_retur=detail_retur.barang_retur_kode_retur WHERE kategori_id_kategori=$id_kategori AND month(tgl_retur)=$tgl_retur ORDER BY tgl_retur DESC";
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
			"tgl_retur"=>$row['tgl_retur'],
			"stok_barang"=>$row['stok_barang'],
			"stok_retur"=>$row['stok_retur']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>