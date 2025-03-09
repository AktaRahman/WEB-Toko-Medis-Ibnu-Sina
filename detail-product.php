<?php
session_start();

    error_reporting(0);
    include 'db.php';
    
    if($_SESSION['status_login_user'] != true){
        echo '<script>window.location="login_user.php"</script>';
    }

    $kontak = mysqli_query($conn, "SELECT telp_admin, email_admin, address_admin FROM tb_admin WHERE id_admin = 1");
    $a = mysqli_fetch_object($kontak);
    $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE id_product = '".$_GET['id']."'");
    $p = mysqli_fetch_object($produk);
    $qry_produk = mysqli_query($conn, "select * from tb_product");
    $dt_produk = mysqli_fetch_array($qry_produk);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBNU SINA | Medical Farmasi Store Web (Tugas LSP Aktavan)</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
     <!-- Referensi ke file CSS Bootstrap 5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Referensi ke file CSS Anda -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Referensi ke font Google Quicksand -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	
	
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

    <!-- Search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search']?>">
                <input type="hidden" name="kat" value="<?php echo $_GET['kat']?>">
                <input type="submit" name="cari" value="Cari Produk">

            </form>
        </div>
    </div>

    <!-- product detail -->
    <div class="section">
        <div class="container">
            <h3>Detail Produk</h3>
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->image_product ?>" width="100%">
                </div>
                <div class="col-2">
                    <h3><?php echo $p->name_product ?></h3>
                    <h4>Rp. <?php echo number_format($p->price_product) ?></h4>
                    <p>Deskripsi :<br>
                        <?php echo $p->description_product?>
                    </p>
                    <a href="otwkeranjang.php?id_product=<?=$p->id_product?>">
                    <button type="button" class="btn btn-primary text-white"style="background-color: #00BFFF;color: white;">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Pesan Sekarang
    </button>
                    </a>
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