<?php
require_once('koneksi.php');

$sql = "SELECT * FROM barang";
$r = mysqli_query($con,$sql);
$result = array();

while($res = mysqli_fetch_array($r)){
	array_push($result,array(
	    "id_barang"=>$res['id_barang'],
		"nama_barang"=>$res['nama_barang'],
		"gambar_barang"=>$res['gambar_barang'])
	);
}
echo json_encode(array("result"=>$result));
mysqli_close($con);
?>