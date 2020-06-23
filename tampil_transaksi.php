<?php
	include "koneksi.php";
?>

	<div class="container">	
	<h1>Transaksi</h1>
	<a href='?halaman=tambah_transaksi' >Tambah Data</a><br>
		<table class="tabel">
			<tr>
				<th>NO</th>
				<th>kode Transaksi</th>
				<th>kode pelanggan</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</tr>
			<div class="tr">
			<?php
				$no = 1;
				$tampil = "select * from transaksi";
				$query =mysqli_query($koneksi,$tampil);
				$jlhData = mysqli_num_rows($query);
				if($jlhData==0){
					echo"<tr><td>data kosong!</td></tr>";
				}else{			
				echo"nida bungas";
				while($data = mysqli_fetch_row($query))
				{
					echo "<tr>
							<td>".$no."</td>
							<td>".$data[0]."</td>
							<td>".$data[1]."</td>
							<td>".$data[2]."</td>
							
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