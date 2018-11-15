<?php 
	 include_once "koneksi.php";

	 $query = mysqli_query($con, "SELECT * FROM supplier ORDER BY id_supplier ASC");
	
	 $json = array();	
	
	 while($row = mysqli_fetch_assoc($query)){
	 	$json[] = $row;
	 }
	
	 echo json_encode($json);
	
	 mysqli_close($con);
?>