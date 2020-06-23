
	     <a href="tampil_transaksi.php">Tampil Data Transaksi</a>
         <form method="post">
			<label for="">kode transaksi </label>
			<br>
			<input type="text" name="kode_transaksi" id="" placeholder='Masukan kode'>
			<br>
			<label for="">kode pelanggan </label>
			<br>
			<select name="kode_pelanggan">
			</select>
			<br>
			<br>
			<input type="submit" value="Simpan" name="tambah">
		</form>
    </body>
</html>
<?php
	include("koneksi.php");
	if(isset($_POST["tambah"])){
		$kode_pelanggan = $_POST['kode_pelanggan'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$query = "INSERT INTO pelanggan VALUES ('$kode_pelanggan', '$nama', '$jk' )";
		$exe = mysqli_query($koneksi, $query);
		if($exe){
			echo "<script>alert('Data Berhasil Ditambahkan');window.location='?halaman=lihat_pelanggan';</script>";
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');</script>";
		}
	}
?>
