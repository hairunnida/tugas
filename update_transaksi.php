<?php
require_once 'koneksi.php';
$kode_transaksi = $_GET['kode_transaksi'];
$sql = "SELECT * FROM transaksi WHERE kode_transaksi = '$kode_transaksi'";
$ambil_data = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_array($ambil_data);
?>
<html>
    <head>
        <title>pelanggan</title>
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
         <a href="tampil_transaksi.php">Tampil Data Pelanggan</a>
         <form method="post">
			<label for="">kode Transaksi </label>
			<br>
			<input type="text" name="kode_transaksi" id="" placeholder='Masukan kode' value="<?= $hasil['kode_transaksi']; ?>" readonly>
			<br>
			<label for="">kode pelanggan </label>
			<br>
			<select name="kode_pelanggan">
			<?php 
			include("koneksi.php");
			$query= mysqli_query($koneksi, "SELECT * FROM pelanggan");
			while ($dataa = mysqli_fetch_row($query)) {
			$kode_pelanggan=$dataa[0];
			$nama=$dataa[1];
			?>
				<option value="<?php echo $dataa[0]; ?>"><?php echo "".$dataa[1]; ?></option>
			<?php }?>
			</select>
			<label for="">tanggal </label>
			<br>
			<input type="date" name="tanggal" id="" placeholder='Masukkan Tanggal' value="<?php $hasil['tanggal']; ?>">
			<br>
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
		$query ="update transaksi set kode_pelanggan='$kode_pelanggan', tanggal='$tanggal' where kode_transaksi='$kode_transaksi'";;
		$exe = mysqli_query($koneksi, $query);
		if($exe){
			echo "<script> alert('Data Berhasil Di Edit'); window.location='tampil_transaksi.php'; </script>";
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');</script>";
		}
	}
?>