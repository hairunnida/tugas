<?php
	include 'koneksi.php';
	
	$kode_transaksi = $_GET['kode_transaksi'];
	$query = mysqli_query($koneksi, "DELETE from paket WHERE kode_paket = '$kode_transaksi'");
	
	if($query){
		?>
			<script>alert('Data Berhasil Dihapus!!!');
			window.location='../tugas_web/?halaman=paket';</script>;
		<?php
	}else{
		echo "<script>alert('Data Gagal Dihapus');window.location='tampil_paket.php';</script>";
	}
?>