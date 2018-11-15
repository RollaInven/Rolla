<?php  
	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$id_kategori=$_POST['id_kategori'];
	$sql = "SELECT * FROM barang JOIN kategori ON kategori.id_kategori=barang.kategori_id_kategori WHERE kategori_id_kategori=$id_kategori";
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

 