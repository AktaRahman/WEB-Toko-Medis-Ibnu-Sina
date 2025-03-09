<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login_admin.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
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
	<!-- header -->
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
				<li><a href="keluar.php">Logout</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Data Pelanggan</h3>
			<div class="box">
			<div class="box">
                <style>
                    .box {
                        background: white;
                    }
                </style>
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
					<thead>
						<tr>
							<th width="60px"><center>No</center></th>
							<th><center>Name</center></th>
							<th><center>Username</center></th>
							<th><center>No. Telp</center></th>
							<th><center>Email</center></th>
							<th><center>Address</center></th>
							<th width="150px"><center>Aksi</center></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$user = mysqli_query($conn, "SELECT * FROM tb_user ORDER BY id_user DESC");
							if(mysqli_num_rows($user) > 0){
							while($row = mysqli_fetch_array($user)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['user_name'] ?></td>
							<td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['telp_user']?></td>
                            <td><?php echo $row['email_user']?></td>
                            <td><?php echo $row['address_user']?></td>
							<td>
                                <a href="proses-hapus.php?idu=<?php echo $row['id_user'] ?>" onclick="return confirm('Yakin ingin hapus ?')"type="button" class="btn btn-success btn-sm"style="background-color: red;">Hapus</a>
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

	<!-- footer -->
	<footer>
		<div class="container">
		<small>2023 &copy;  - Ibnu Sina. All Right Reserved..</small>
		</div>
	</footer>
</body>
</html>