<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login_admin.php"</script>';
    }

    $kategori = mysqli_query($conn, "SELECT * FROM tb_category WHERE id_category = '".$_GET['id']."'");
    if(mysqli_num_rows($kategori) == 0){
        echo '<script>window.location="data-kategori.php"</script>';

    }
    $k = mysqli_fetch_object($kategori);
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
            <h3>Edit Data Kategori</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value="<?php echo $k->name_category ?>" required>
                    <input type="submit" name="submit" value="Submit" type="button" class="btn btn-success btn-sm"style="background-color: lime;">
                <?php
                    if(isset($_POST['submit'])){
                        $nama = ucwords($_POST['nama']);
                        
                        $update = mysqli_query($conn, "UPDATE tb_category SET 
                                                name_category = '".$nama."'
                                                WHERE id_category = '".$k->id_category."'");
                        if($update){
                            echo '<script>alert("Edit data berhasil")</script>';
                            echo '<script>window.location="data-kategori.php"</script>';
                        }else{
                            echo 'gagal' .mysqli_error($conn);
                        }
                    }
                ?>
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

</body>
</html>