<form action="" method="post" id="form">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" placeholder="Nama">
    <label for="no_hp">No.Hp/Telpon</label>
    <input type="text" name="no_hp" id="no_hp" placeholder="e.g. 6282112345678">
    <label for="dari">Dari</label>
    <input type="text" name="dari" id="dari" placeholder="Perusahaan/Instansi/Universitas">
    <label for="alamat">Alamat</label>
    <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
    <label for="keperluan">Keperluan</label>
    <textarea name="keperluan" id="keperluan" cols="" rows="10"></textarea><br>
    <input type="submit" value="simpan" name="simpan" id="simpan">
</form>

<?php
include 'koneksi.php';

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
        $tambah = mysqli_query($koneksi, "INSERT INTO bukutamu VALUES('', '$nama', '$no_hp', '$dari', '$keperluan', '$alamat')");
        if($tambah)
        {
            ?>
            <script>
                alert("Data berhasil disimpan");
                window.location.href = "?halaman=home";
            </script>
            <?php
        } 
        else 
        {
            ?>
            <script>
                alert("<?=mysqli_error($koneksi)?>");
                window.location.href = "?halaman=home";
            </script>
            <?php
        }
    }
}

?>