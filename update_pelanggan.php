<?php
require_once 'koneksi.php';
$kode_pelanggan = $_GET['kode_pelanggan'];
$sql = "SELECT * FROM pelanggan WHERE kode_pelanggan = '$kode_pelanggan'";
$ambil_data = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_array($ambil_data);
?>
<html>
    <head>
        <title>pelanggan</title>
    </head>
    <body>
	<link rel="stylesheet"href="4.css">
		<div class="navigasi">
		<div class="content">
		<ul>
		<li><a href="tampil_pelanggan.php">Pelanggan</a></li>
		<li><a href="tampil_transaksi.php">Transaksi</a></li>	
		</ul>
	</div>
	</div>
	<div class="container">
         <a href="tampil_pelanggan.php">Tampil Data Pelanggan</a>
         <form method="post">
			<label for="">kode pelanggan </label>
			<br>
			<input type="text" name="kode_pelanggan" id="" placeholder='Masukan kode' value="<?= $hasil['kode_pelanggan']; ?>" readonly>
			<br>
			<label for="">Nama </label>
			<br>
			<input type="text" name="nama" id="" placeholder='Masukan Nama'value="<?= $hasil['nama']; ?>">
			<br>
			<label for="">JK </label>
			<br>
			<select name="jk" value="<?= $hasil['jk']; ?>">
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
		$query ="update pelanggan set nama='$nama', jk='$jk' where kode_pelanggan='$kode_pelanggan'";;
		$exe = mysqli_query($koneksi, $query);
		if($exe){
			echo "<script> alert('Data Berhasil Di Edit'); window.location='tampil_pelanggan.php'; </script>";
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');</script>";
		}
	}
?>