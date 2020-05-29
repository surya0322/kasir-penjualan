<?php
	$server		= "localhost";
	$user 		= "root";
	$password	= "";
	$db_name	= " db_penjualan";

	mysql_connect($server, $user, $password, $db_name);
	mysql_select_db($db_name) or die("Koneksi ke database GAGAL");
	echo "koneksi ke database BERHASIL";

?>