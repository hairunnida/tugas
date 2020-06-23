<?php
	include "koneksi.php";
?>
	<div class="container">	
	<h1>Pelanggan</h1>
	<a href='?halaman=tambah_pelanggan' >Tambah Data</a><br>
		<table class="tabel">
			<tr>
				<th>NO</th>
				<th>kode pelanggan</th>
				<th>Nama</th>
				<th>jk</th>
				<th>Aksi</th>
			</tr>
			<?php
				$no = 1;
				$tampil = "select * from pelanggan";
				$query =mysqli_query($koneksi,$tampil);
				$jlhData = mysqli_num_rows($query);
				if($jlhData==0){
					echo"<tr><td >data kosong!</td></tr>";
				}else{					
				while($data = mysqli_fetch_row($query))
				{
					echo "<tr>
							<td>".$no."</td>
							<td>".$data[0	]."</td>
							<td>".$data[1]."</td>
							<td>".$data[2]."</td>
							
							<td><a href='update_pelanggan.php?kode_pelanggan=".$data[0]."'>Edit</a>|
							<a href='hapus_pelanggan.php?kode_pelanggan=".$data[0]."'
							";?> onclick="return confirm('Yakin Hapus Data ini?')">Hapus</a>
							</td>
							</tr><?php
					$no++;
					}	
					}
			?>
			</div>
			</div>
		</table>