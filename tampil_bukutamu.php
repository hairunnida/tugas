<?php

include 'koneksi.php';

?>
<table class="tabel">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>No. Telp/HP</th>
        <th>Dari</th>
        <th>Keperluan</th>
        <th>Alamat</th>
        <th>Pilihan</th>
    </tr>
    
    <?php
				$no = 1;
				if(isset($_GET['btncari'])){
					$keyword=$_GET['search'];
					$cari = "select * from bukutamu where nama like '%$keyword%' or alamat like '%$keyword%' or kasus like '%$keyword%'or status like '%$keyword%' ";
				}else{
					$cari = "select * from bukutamu";
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
							<td><a href='update_bukutamu.php?id=".$data[0]."'>Edit</a>|
							<a href='hapus_bukutamu.php?id=".$data[0]."'
							";?> onclick="return confirm('Yakin Hapus Data ini?')">Hapus</a>
							</td>
							</tr><?php
					$no++;
					}	
					}
			?>
    
    <tr>
        <td><?=$no++?></td>
        <td><?=$d['nama']?></td>
        <td><?=$d['no_hp']?></td>
        <td><?=$d['dari']?></td>
        <td><?=$d['keperluan']?></td>
        <td><?=$d['alamat']?></td>
        <td>
            <a href="?halaman=ubahtamu&id=<?=$d['id']?>">Edit</a> || 
            <a href="delete_bukutamu.php?id=<?=$d['id']?>">Hapus</a>
        </td>
    </tr>
</table> 