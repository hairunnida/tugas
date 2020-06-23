<?php
	include "koneksi.php";
?>

	<div class="container">	
	<h1>Barang</h1>
	<a href='?halaman=tambah_paket' >Tambah Data Paket</a><br>
		<table class="tabel">
			<tr>
				<th>NO</th>
				<th>kode Paket</th>
				<th>Nama Paket</th>
                <th>Jumlah Paket</th>
				<th>Total</th>
				<th>Aksi</th>
			</tr>
			<div class="tr">
			<?php
				$no = 1;
				if(isset($_GET['btncari'])){
					$keyword=$_GET['search'];
					$cari = "select * from paket where nama like '%$keyword%' or alamat like '%$keyword%' or kasus like '%$keyword%'or status like '%$keyword%' ";
				}else{
					$cari = "select * from paket";
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
							<a href='hapus_paket.php?kode_transaksi=".$data[0]."'
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