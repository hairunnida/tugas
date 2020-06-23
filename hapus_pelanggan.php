<?php
	include 'koneksi.php';
	
	$kode_pelanggan = $_GET['kode_pelanggan'];
	$query = mysqli_query($koneksi, "DELETE from pelanggan WHERE kode_pelanggan = '$kode_pelanggan'");
	
	if($query){
		?>
			<script>alert('Data Berhasil Dihapus!!!');
			window.location.href='../tugas_web/?halaman=lihat_pelanggan';
			</script>
		<?php
	}else{
		echo "Data Gagal Dihapus karena mempunyai relasi antar tabel lain";
	}
?>