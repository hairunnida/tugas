<html>
    <head>
        <title>Barang</title>
    </head>
    <body>
	<link rel="stylesheet"href="style.css">
		<div class="navigasi">
		<div class="content">
		<ul>
		<li><a href="tampil_paket.php">Paket</a></li>
        <li><a href="tampil_detail.php">Detail Barang</a></li>
		<li><a href="tampil_pelanggan.php">Pelanggan</a></li>
		<li><a href="tampil_transaksi.php">Transaksi</a></li>	
		</ul>
	</div>
	</div>
	<div class="container">
         <a href="tampil_paket.php">Tampil Data Detail Barang</a>
         <form method="post">
			<label for="">id </label>
			<br>
			<input type="text" name="id" id="" placeholder='Masukan id'>
			<br>
			<label for=""> nama barang </label>
			<br>
			<select name="nama_paket">
			<?php 
			include("koneksi.php");
			$query= mysqli_query($koneksi, "SELECT * FROM paket");
			while ($dataa = mysqli_fetch_row($query)) {
			$kode_pelanggan=$dataa[0];
			$nama=$dataa[1];
			?>
				<option value="<?php echo $dataa[0]; ?>"><?php echo "".$dataa[1]; ?></option>
			<?php }?>
			</select>
			<br>
			<label for="">jenis pengadaan </label>
			<br>
			<input type="date" name="tanggal" id="" placeholder='Masukkan Tanggal'>
			<br>
			<br>
			<input type="submit" value="Simpan" name="tambah">
		</form>
    </body>
</html>
<?php
	include("koneksi.php");
	if(isset($_POST["tambah"])){
		$kode_transaksi = $_POST['kode_transaksi'];
		$kode_pelanggan = $_POST['kode_pelanggan'];
		$tanggal = $_POST['tanggal'];
		$query = "INSERT INTO transaksi VALUES ('$kode_transaksi', '$kode_pelanggan', '$tanggal' )";
		$exe = mysqli_query($koneksi, $query);
		if($exe){
			echo "<script>alert('Data Berhasil Ditambahkan');window.location='tampil_transaksi.php';</script>";
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');</script>";
		}
	}
?>