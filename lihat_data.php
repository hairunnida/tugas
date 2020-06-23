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
    $data = mysqli_query($koneksi, "SELECT * FROM bukutamu");
    
    while($d = mysqli_fetch_array($data))
    {
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

    <?php
    }
    ?>
</table>