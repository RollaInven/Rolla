<?php
	/* ===== www.dedykuncoro.com ===== */
	$server		= "localhost"; //sesuaikan dengan nama server
	$user		= "rinx2639_mambaur"; //sesuaikan username
	$password	= "mambaur123"; //sesuaikan password
	$database	= "rinx2639_inven"; //sesuaikan target databese
	
	

	/* ====== UNTUK MENGGUNAKAN MYSQLI DI UNREMARK YANG INI, YANG MYSQL_CONNECT DI REMARK ======= */
	 $con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}

?>