<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login_admin.php"</script>';
    }
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
    <div class="container">
            <!--<h1><a href="index_user.php">I<span>KI</span>AE</a></h1>-->
            <img class="logo" src="img/logo lsp web crop.png" alt="" style="float: light;">
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
                header {
                    background-color: white;
                    color: #000000;
                }
            </style>
       
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="data_pelanggan.php">Data Pelanggan</a></li>
                <li><a href="data_admin.php">Data Admin</a></li>
                <li><a href="keluar.php">Keluar</a></li>

            </ul>
        </div>
    </header>
    <!-- Header End -->

    <!-- Content -->
    <div class="section">
         <div class="container">
            <h3>Produk</h3>
            <div class="box">
            <div class="box">
                <style>
                    .box {
                        background: white;
                    }
                </style>
                <a href="tambah-produk.php" type="button" class="btn btn-primary mb-3" style="background-color:  #00BFFF;">
    <i class="fa fa-plus" aria-hidden="true"></i>Tambah Data</a>
                <table border="1" cellspacing="0" class="table">
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="60px"><center>No</center></th>
                            <th><center>Kategori</center></th>
                            <th><center>Nama Produk</center></th>
                            <th><center>Harga</center></th>
                            <th><center>Gambar</center></th>
                            <th><center>Status</center></th>

                            <th width="150px"><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category ON tb_product.id_category = tb_category.id_category ORDER BY tb_product.id_product DESC");
                            if(mysqli_num_rows($produk) >0){
                            while($row = mysqli_fetch_array($produk)){
                        ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $row['name_category']?></td>
                            <td><?php echo $row['name_product']?></td>
                            <td>Rp. <?php echo number_format($row['price_product']) ?></td>
                            <td><a href="produk/<?php echo $row['image_product'] ?>" target="_blank"><img src="produk/<?php echo $row['image_product'] ?>" width="60px"></a></td>
                            <td><?php echo ($row['status_product'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
                            <td>
                            <a href="edit-produk.php?id=<?php echo $row['id_product'] ?>" type="button" class="btn btn-success btn-sm" style="background-color: lime;">Edit</a></a>
                            <a href="proses-hapus.php?idp=<?php echo $row['id_product'] ?>" onclick="return confirm('Ingin hapus data ini?')"type="button" class="btn btn-success btn-sm"style="background-color: red;">Hapus</a>
                            </td>
                        </tr>
                        <?php }}else{ ?>
                            <tr>
                                <td colspan="7">Tidak ada data</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Content End-->

    <!-- Footer -->
    <footer>
        <div class="container">
        <small>2023 &copy;  - Ibnu Sina. All Right Reserved..</small>
        </div>
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>