<?php
session_start();

    error_reporting(0);
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT telp_admin, email_admin, address_admin FROM tb_admin WHERE id_admin = 1");
    $a = mysqli_fetch_object($kontak);
    $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE id_product = '".$_GET['id_product']."'");
    $p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokoOnline</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <title>IBNU SINA | Medical Farmasi Store Web (Tugas LSP Aktavan)</title>
	
	
	<meta name="description" content=" .">
				<meta name="keywords" content="Ibnu Sina">
				<meta property="fb:app_id" content="" />
				<meta property="og:title" content="Ibnu Sina" />
				<meta property="og:site_name" content="https://www.ibnusina.co.id" />
				<meta property="og:url" content="https://www.ibnusina.co.id" />
				<meta property="og:description" content="." />
				<meta property="og:type" content="website" />
				<meta property="og:image" content="https://www.kimiafarma.co.id/themes/front_site/images/fb_share.jpg" />	
    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="img\logo lsp web.png">
	
	<meta name="google-site-verification" content="" />
</head>
<body>
    <!-- Header -->
    <header>
        <style>
            header {
    background-color: white;
    color: #000000;
}
        </style>
        <div class="container">
            <!--<h1><a href="index_user.php">I<span>KI</span>AE</a></h1>-->
            <img class="logo" src="img/logo lsp web crop.png" alt="">
            <style>
                
                .logo {
                    height: 70px;
                    width: 220px;
                }
                .c-index {
                    background : #00BFFF;
                }
                h3 {
                    color : black;
                }
            </style>
            <ul>
            <li><a href="menu.php"><strong>HOME</strong></a></li>
                <li><a href="produk.php"><strong>PRODUK</strong></a></li>
                <li><a href="keranjang.php"><strong>KERANJANG</strong></a></li>
                <li><a href="histori_pembelian.php"><strong>RIWAYAT</strong></a></li>
                <li><a href="login_user.php"><strong>KELUAR</strong></a></li>
            </ul>
        </div>
    </header>
    <!-- Header End -->

    <!-- product detail -->
    <div class="section">
        <div class="container">
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->image_product ?>" width="100%">
                </div>
                <div class="col-2">
                    <form action="masukkankeranjang.php?id_product=<?php echo $p->id_product ?>" method="post">
                        <h3><?php echo $p->name_product ?></h3>
                        <h4>Rp. <?php echo number_format($p->price_product) ?></h4>
                        <p>Deskripsi :<br>
                        <?php echo $p->description_product?>
                        </p>
                        <p>Jumlah Barang <input type="number" name="jumlah" value="1"></p>
                        <input class="btn" type="submit" value="Tambah ke keranjang"button type="button" class="btn btn-primary text-white"style="background-color: #00BFFF;color: white;">
        <i class="fa fa-plus" aria-hidden="true"></i>
    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <style>
        .footer{
            padding: 25px 0;
            background-color: #00BFFF;
            color: white;
            text-align: center;
        }
        </style>
        <div class="container">
            <h4>Alamat</h4>
            <p><?php echo $a->address_admin ?></p>

            <h4>Email</h4>
            <p><?php echo $a->email_admin ?></p>

            <h4>Telp</h4>
            <p><?php echo $a->telp_admin ?></p>
            <small> All Right Reserved &copy; 2023 - Ibnu Sina.</small>
        </div>
    </div>
</body>
</html>