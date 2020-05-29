<?php
	$nama_barang 	= $_POST['nama_barang'];
	$jenis_barang 	= $_POST['jenis_barang'];
	$harga_satuan 	= $_POST['harga_satuan'];
	$jumlah_beli 	= $_POST['jumlah_beli'];
	$total_bayar 	= $_POST['total_bayar'];
	$diskon 		= $_POST['diskon'];
	$setelah_diskon = $_POST['setelah_diskon'];
	$bayar			= $_POST['bayar'];
	$kembalian		= $_POST['kembalian'];
	$no				= "";

	include "koneksi.php";
	$sql = mysqli_query("insert into tabel_penjualan values (
		'$no',
		'$nama_barang',
		'$jenis_barang',
		'$harga_satuan',
		'$jumlah_beli',
		'$total_bayar',
		'$diskon',
		'$setelah_diskon',
		'$bayar',
		'$kembalian',
		)") or die("Menyimpan data GAGAL");
	echo "Menyimpan data BERHASIL";
?>