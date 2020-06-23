<?php
	include "koneksi.php";
?>

<html>

	<head>
		<title>Transaksi</title>
	</head>
	<body >
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
	<h1>Detail</h1>
	<a href=t_transaksi.php >Tambah Data Transaksi</a><br>
		<table border="1">
			<tr>
				<th>NO</th>
				<th>ID</th>
				<th>Nama Paket</th>
				<th>Jenis Pengadaan</th>
				<th>Aksi</th>
			</tr>
			<div class="tr">
			<?php
				$no = 1;
				if(isset($_GET['btncari'])){
					$keyword=$_GET['search'];
					$cari = "select * from detail_paket where nama like '%$keyword%' or alamat like '%$keyword%' or kasus like '%$keyword%'or status like '%$keyword%' ";
				}else{
					$cari = "select * from detail_paket";
				}
				$query =mysqli_query($koneksi,$cari);
				$jlhData = mysqli_num_rows($query);
				if($jlhData==0){
					echo"<tr><td colspan=6>data kosong!</td></tr>";
				}else{					
				while($data = mysqli_fetch_row($query))
				{
					echo "<tr>
							<td>".$no."</td>
							<td>".$data[0]."</td>
							<td>".$data[1]."</td>
							<td>".$data[2]."</td>
							<td>".$data[3]."</td>
							<td><a href='update_transaksi.php?kode_transaksi=".$data[0]."'>Edit</a>|
							<a href='hapus_transaksi.php?kode_transaksi=".$data[0]."'
							";?> onclick="return confirm('Yakin Hapus Data ini?')">Hapus</a>
							</td>
							</tr><?php
					$no++;
					}	
					}
			?>
			</div>
		</table>
	</body>
</html>