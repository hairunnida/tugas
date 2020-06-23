<?php
	include 'koneksi.php';
	
	$kode_transaksi = $_GET['kode_transaksi'];
	$query = mysqli_query($koneksi, "DELETE from transaksi WHERE kode_transaksi = '$kode_transaksi'");
	
	if($query){
		echo "<script>alert('Data Berhasil Dihapus!!!');window.location='tampil_transaksi.php';</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus');window.location='tampil_transaksi.php';</script>";
	}
?>