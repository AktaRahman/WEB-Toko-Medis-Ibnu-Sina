<?php 
    include "db.php";
    session_start();
    if($_SESSION['status_login_user']!=true){
        header('location:login_user.php');
    }
    $kontak = mysqli_query($conn, "SELECT telp_admin, email_admin, address_admin FROM tb_admin WHERE id_admin = 1");
    $a = mysqli_fetch_object($kontak);
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TokoOnline</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

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
<br><br>
<div class="container">
        <div class="card">
            <div class="card-header">
    <tbody>
<h2 align='center'>Histori Pembelian Produk</h2>
<br><br>
<div class="box">
<table class="table">
    <thead>
        <tr>
            <td><strong>NO</strong></td>
            <td><strong>Tanggal</strong></td>
            <td><strong>Produk</strong></td>
            <td><strong>Jumlah</strong></td>
            <td><strong>Harga</strong></td>
            <td><strong>Total</strong></td>
            <td><strong>Aksi</strong></td>
        </tr>
    </thead>
    <tbody>
        <?php 
        include "db.php";
        
        $qry_histori=mysqli_query($conn,"select * from tb_pembelian join tb_user on tb_user.id_user=tb_pembelian.user_id where tb_pembelian.user_id = '".$_SESSION['id']."' order by id_pembelian desc;");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan produk yang dibeli
            $produk_dibeli="<ol>";
            $qry_produk=mysqli_query($conn,"select * from detail_pembelian_produk join tb_product on tb_product.id_product=detail_pembelian_produk.id_product where id_pembelian = '".$dt_histori['id_pembelian']."'");
            mysqli_error($conn);
            while($dt_produk=mysqli_fetch_array($qry_produk)){
                $produk_dibeli=$dt_produk['name_product'];
                $qty_produk = $dt_produk['qty'];
                $hrg_produk =$dt_produk['price_product'];
                $total_harga =$dt_produk['qty'] * $dt_produk['price_product'];
            }
            $produk_dibeli.="</ol>";
            //diterima
            $qry_cek_diterima=mysqli_query($conn,"select * from tb_pembelian where id_pembelian = '".$dt_histori['id_pembelian']."'");
            $qry_cek_diterima=mysqli_fetch_array($qry_cek_diterima);

            if($qry_cek_diterima['status']=='Menunggu Barang diconfirm'){
                $status_diterima="<label class='alert alert-success'>Menunggu Barang diconfirm</label>";
                $button_diterima="";

            }elseif($qry_cek_diterima['status']=="Barang Sudah diconfirm"){
                $status_diterima="<label class='alert alert-success'>Barang Sudah diconfirm</label>";
                $button_diterima="";

            }elseif($qry_cek_diterima['status']=="Barang Sedang dikemas"){
                $status_diterima="<label class='alert alert-success'>Produk Sedang di Kemas</label>";
                $button_diterima="";

            }elseif($qry_cek_diterima['status']=="Produk Sedang dikirim"){
                $status_diterima="<label class='alert alert-success'> Produk Sedang di Kirim</label>";
                $button_diterima="<a href='diterima.php?id=".$dt_histori['id_pembelian']."' class='btn btn-warning' onclick='return confirm(\"Produk Sudah Diterima\")'>Diterima</a>";

            }elseif($qry_cek_diterima['status']=="Produk Sudah diterima"){
                $status_diterima="<label class='alert alert-success'>Produk Sudah di Terima</label>";
                $button_diterima="";
                
            } else {
                $status_diterima="<label class='alert alert-danger'>Belum diterima</label>";
                $button_diterima="";
            }
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$dt_histori['tanggal_pembelian'] ?></td>
                <td><?=$produk_dibeli?></td>
                <td><?=$qty_produk?></td>
                <td><?=$hrg_produk?></td>
                <td><?=$total_harga?></td>
                <td><?=$status_diterima?></td>
                <td><?=$button_diterima?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
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
    </tbody>
</table>