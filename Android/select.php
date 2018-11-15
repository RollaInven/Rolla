<?php  
	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM kategori WHERE id_kategori";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id_kategori"=>$row['id_kategori'],
			"nama_kategori"=>$row['nama_kategori'],
			"gambar_kategori"=>'https://cdn2.iconfinder.com/data/icons/squareplex/512/yellow_folder.png'
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>

 