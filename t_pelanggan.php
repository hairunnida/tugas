
	<div class="container">
         <a href="?halaman=lihat_pelanggan">Tampil Data Pelanggan</a>
         <form method="post">
			<label for="">Kode pelanggan </label>
			<br>
			<input type="text" name="kode_pelanggan" id="" placeholder='Masukan kode'>
			<br>
			<label for="">Nama </label>
			<br>
			<input type="text" name="nama" id="" placeholder='Masukan Nama'>
			<br>
			<label for="">JK </label>
			<br>
			<select name="jk">
				<option value="P">P</option>
				<option value="L">L</option>
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
