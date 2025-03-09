<?php
session_start();
    include 'db.php';

    if($_SESSION['status_login_user'] != true){
        echo '<script>window.location="login_user.php"</script>';
    }

    $kontak = mysqli_query($conn, "SELECT telp_admin, email_admin, address_admin FROM tb_admin WHERE id_admin = 1");
    $a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBNU SINA | Medical Farmasi Store Web (Tugas LSP Aktavan)</title>
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

    <!-- Search -->
    <div class="search">
        <style>
            .search {
                    padding: 15px 0;
                    background-color: #00BFFF;
                    border: 1px solid #ccc;
                    text-align: center;
                }
        </style>
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk">
                <input type="submit" name="cari" value="Cari Produk">

            </form>
        </div>
    </div>

    <!-- category -->
    <div class="section">
        <div class="container">
            <h3>Kategori</h3>
            <div class="box">
                <?php
                    $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY id_category DESC");
                    if(mysqli_num_rows($kategori)>0){
                        while($k = mysqli_fetch_array($kategori)){
                ?>
                    <a href="produk.php?kat=<?php echo $k['id_category']?>">
                        <div class="col-5">
                            <img src="img/category_icon.webp" width="50px" style="margin-bottom: 5px;">
                            <p><?php echo $k['name_category']?></p>
                        </div>
                    </a>
                <?php }}else{ ?>
                    <p>Kategori tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- new product -->
    <div class="section">
        <div class="container">
            <h3>Produk Terbaru</h3>
            <div class="box">
                <style>.box {
                    background-color:white;
                    border: 1px solid #ccc;
                    padding: 15px;
                    box-sizing: border-box;
                    margin: 10px 0 25px 0;
                }
                </style>
                <?php
                    $produk = mysqli_query($conn, "SELECT * FROM tb_product ORDER BY id_product DESC LIMIT 8");
                    if(mysqli_num_rows($produk) > 0){
                        while($p = mysqli_fetch_array($produk)){
                ?>
                    <a href="detail-product.php?id=<?php echo $p['id_product']?>">
                    <div class="col-4">
                        <img src="produk/<?php echo $p['image_product']?>" alt="">
                        <p class="nama"><?php echo substr($p['name_product'], 0, 30)?></p>
                        <p class="harga">Rp. <?php echo number_format($p['price_product'])?></p>
                    </div>
                    </a>
                <?php }}else{ ?>
                    <p>Produk tidak ada</p>
                <?php } ?>
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