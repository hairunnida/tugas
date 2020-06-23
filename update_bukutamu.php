<?php 
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM bukutamu WHERE id = '$id'");

if($query)
{
    while($d = mysqli_fetch_array($query))
    {
        ?>
        <form action="" method="post" id="form">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Nama" value="<?=$d['nama']?>">
            <label for="no_hp">No.Hp/Telpon</label>
            <input type="text" name="nohp" id="no_hp" placeholder="e.g. 6282112345678" value="<?=$d['no_hp']?>">
            <label for="dari">Dari</label>
            <input type="text" name="dari" id="dari" placeholder="Perusahaan/Instansi/Universitas" value="<?=$d['dari']?>">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"><?=$d['alamat']?></textarea>
            <label for="keperluan">Keperluan</label>
            <textarea name="keperluan" id="keperluan" cols="" rows="10"><?=$d['keperluan']?></textarea><br>
            <input type="submit" value="Ubah" name="simpan" id="simpan">
            <a href="?halaman=home" class="cancel">Batal</a>
        </form>
        <?php
    }
} 

$nama = @$_POST['nama'];
$no_hp = @$_POST['no_hp'];
$dari = @$_POST['dari'];
$alamat = @$_POST['alamat'];
$keperluan = @$_POST['keperluan'];
$submit = @$_POST['simpan'];

if(isset($submit))
{
    if($nama == "" || 
    $no_hp == "" || 
    $dari == "" ||
    $alamat == "" ||
    $keperluan == "")
    {
        ?>
        <script>
        alert("Form TIdak Boleh ada yang Kosong!!");
        </script>
        <?php
    }
    else 
    {
        $ubah = mysqli_query($koneksi, "UPDATE bukutamu SET nama = '$nama',
                                                              no_hp = '$no_hp',
                                                              dari = '$dari',
                                                              keperluan = '$keperluan',
                                                              alamat = '$alamat'
                                               WHERE id = '$id'");
        if($ubah)
        {
            ?>
            <script>
                alert("Data berhasil Diubah");
                window.location.href = "?halaman=home";
            </script>
            <?php
        } 
        else 
        {
            ?>
            <script>
                alert("Data gagal Diubah");
                window.location.href = "?halaman=home";
            </script>
            <?php
        }
    }
}
else 
{
    die(mysqli_error($koneksi));
}
?>