<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="4.css">
    <title>Buku Tamu</title>
</head>
<body>
    <header>
        <h1 class="judul">BAGIAN LAYANAN PENGADAAN BARANG DAN JASA</h1>
        <p class="deskripsi">Tugas Pemrograman Web</p>
    </header>
    <div class="wrap">
        <nav class="menu">
            <ul>
                <li><a href="?halaman=home">Home</a></li>
                <li><a href="?halaman=tambah">Buku Tamu</a></li>
                <li>
                    <a href="?halaman=paket">Paket</a>
                    <ul class="dropdown">
                        <li><a href="?halaman=paket">Lihat Paket</a></li>
                        <li><a href="?halaman=lihat_pelanggan">Pelanggan</a></li>
                        <li><a href="?halaman=tampil_transaksi">Transaksi</a></li>
                    </ul>
                </li>
				<li><a href="?halaman=tentang">Tentang</a></li>
            </ul>
        </nav>
        <div class="blog">
			<div class="content">
            <?php
                if(isset($_GET['halaman']))
                {
                    $page = $_GET['halaman'];

                    if($page == "home")
                    {
                        include 'lihat_data.php';
                    }
                    else if($page == "tambah")
                    {
                        include 'input_bukutamu.php';
                    }
                    else if($page == "ubahtamu")
                    {
                        include 'update_bukutamu.php';
                    }
					else if($page == "paket")
                    {
                        include 'tampil_paket.php';
                    }
                    else if($page == "tambah_paket")
                    {
                        include 't_paket.php';
                    }
                    else if($page == "tentang")
                    {
                        include 'tentang.html';
                    }
                    else if($page == "lihat_pelanggan")
                    {
                        include 'tampil_pelanggan.php';
                    }
                    else if($page == "tambah_pelanggan")
                    {
                        include 't_pelanggan.php';
                    }
                    else if($page == 'transaksi')
                    {
                        include 'tampil_transaksi.php';
                    }
					 else if($page == "tambah_transaksi")
                    {
                        include 't_transaksi.php';
                    }
                } else {
                    echo "<h3>Selamat Datang</h3>";
                }
            ?>
			</div>
		</div>
    </div>
</body>
</html>