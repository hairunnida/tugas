	<div class="container">
         <a href="tampil_paket.php">Tampil Data Paket</a>
         <form method="post">
			<label for="">Kode Paket</label>
			<br>
			<input type="text" name="kode_paket" id="" placeholder='Masukan kode'>
			<br>
			<label for="">Nama Barang</label>
			<br>
			<input type="text" name="nama_paket" id="" placeholder='Masukan Nama'>
            <br>
            <label for="">Jumlah Barang</label>
			<br>
			<input type="text" name="jumlah_paket" id="" placeholder='Masukan Nama'>
			<br>
			<label for="">Total</label>
			<br>
			<input type="text" name="total" id="" placeholder='Masukan Nama'>
			<br>
			<br>
			<input type="submit" value="Simpan" name="tambah">
		</form>
    </body>
</html>
<?php
	include("koneksi.php");
	if(isset($_POST["tambah"])){
		$kode_paket = $_POST['kode_paket'];
		$nama_paket = $_POST['nama_paket'];
        $jumlah_paket = $_POST['jumlah_paket'];
		$total = $_POST['total'];
		$query = "INSERT INTO paket VALUES ('$kode_paket', '$nama_paket', '$jumlah_paket', '$total' )";
		$exe = mysqli_query($koneksi, $query);
		if($exe){
			echo "<script>alert('Data Berhasil Ditambahkan');window.location='?halaman=paket';</script>";
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');</script>";
		}
	}
?>
