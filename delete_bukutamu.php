<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM bukutamu WHERE id = '$id'");

if($query)
{
    ?>
    <script>
        alert("Data berhasil Dihapus");
        window.location.href = "index.php?halaman=home";
    </script>
    <?php
} 
else 
{
    ?>
    <script>
        alert("Data gagal Dihapus");
        window.location.href = "index.php?halaman=home";
    </script>
    <?php
}

?>