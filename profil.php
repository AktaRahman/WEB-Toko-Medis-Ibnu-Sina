<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login_admin.php"</script>';
    }

    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_admin = '".$_SESSION['id']."'");
    $d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"><!DOCTYPE html>
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
            <h3>Profil</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
                    <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
                    <input type="text" name="nohp" placeholder="No HP" class="input-control" value="<?php echo $d->telp_admin ?>" required>
                    <input type="text" name="email" placeholder="Email" class="input-control" value="<?php echo $d->email_admin ?>" required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->address_admin ?>" required>
                    <input type="submit" name="submit" value="Ubah Profil" class="btn">
                    <style>
                        .btn {
                            background: #00BFFF;
                            color: white;
                        }
                        .box {
                            background: #F0FFFF;
                        }
                    </style>
                </form>
                <?php
                    if(isset($_POST['submit'])){

                       $nama   = ucwords($_POST['nama']);
                       $user   = $_POST['user']; 
                       $nohp   = $_POST['nohp']; 
                       $email  = $_POST['email']; 
                       $alamat = ucwords($_POST['alamat']); 
 
                       $update = mysqli_query($conn, "UPDATE tb_admin SET
                                        admin_name = '".$nama."',
                                        username = '".$user."',
                                        telp_admin = '".$nohp."',
                                        email_admin = '".$email."',
                                        address_admin = '".$alamat."' 
                                        WHERE id_admin = '".$d->id_admin."'");

                        if($update){
                            echo '<script>alert(Ubah data berhasil)</script>';
                            echo '<script>window.location="profil.php"</script>';
                        }else{
                            echo 'gagal '.mysqli_error($conn);
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