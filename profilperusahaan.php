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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="aktavan" />
    
	
	
	<link href="https://www.kimiafarma.co.id/themes/front_site/css/bootstrap.min.css" rel="stylesheet">
	
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://www.kimiafarma.co.id/themes/front_site/css/carousel.css?ver=1.20231024194626" rel="stylesheet">
	<link href="https://www.kimiafarma.co.id/themes/front_site/css/animate.css?ver=1.20231024194626" rel="stylesheet">
	
	
	
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
	
	<header>
	  <nav class="navbar navbar-expand-md navbar-dark fixed-top top-nav">
        <style>
            
        </style>
		
	    <div class="container-fluid">
			<div class="row nav-row">
				<div class="col-lg-2 col-logo">
					 <!--<a href="https://www.ibnusina.co.id/"><img src="img\logo lsp web crop.png" class="company-logo"/></a>-->
					 <img class="logo" src="img/logo lsp web crop.png" alt="">
            <style>
                .logo {
                    height: 80px;
                    width: 250px;
                }
                .c-index {
                    background : #F0F8FF;
                }
                h3 {
                    color : black;
                }
            </style>
					 <button class="navbar-toggler mobile-toggler-menu" type="button">
						<span class="navbar-toggler-icon"></span>
					  </button>
				  
				  
				</div>
				<div id="navbarCollapse" class="col-lg-10 col-menu">
				
					<div class="row">
						<div class="col-lg-12">
							 <form class="float-end src-form" method="get" action="produk.php">
							  <input class="search" type="text" placeholder="Search" name="q" value="" aria-label="Search">
							  
							 
							
							  
							<a>IND</a> | <a>ENG</a>
														 
							</form>
						
						</div>
					</div>
				
					<div class="row">
						<div class="col-lg-12">
						
							<ul class="main-nav">
								<li>
									<a href="menu.php">HOME</a>
								</li>
								
								<li>
													<a href="">PROFIL</a><ul class="level1-nav"><li>
																	<a href="profilperusahaan.php">Profil Perusahaan</a><ul class="level2-nav"><li>
																	
																				</ul></li></ul></li><li>


													<a href="">PRODUK</a><ul class="level1-nav"><li>
																	<a href="generik.php">Generik</a></li><li>
																	<a href="herbal.php">OTC & Herbal</a></li><li>
																	<a href="etikal.php">Etikal</a></li><li>
																	<a href="kosmetik.php">Kosmetik</a></li></ul></li><li>

													<a href="index_user.php">PESAN</a><ul class="level1-nav"><li>
																	</ul></li><li>
													<a href="keranjang.php">KERANJANG</a><ul class="level1-nav"><li>
																	</ul></li><li>


													<a href="histori_pembelian.php">RIWAYAT</a><ul class="level1-nav"><li>
																	</ul></li><li>


													<a href="">HUBUNGI KAMI</a><ul class="level1-nav"><li>
																	<a href="">Contact Center</a></li><li>
																</ul></li><li>


													<a href="keluar.php">KELUAR</a></li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
     
	      
	    </div>
	  </nav>
	</header>
	<div class="just-padding">
		<div class="mobile-menu">
	    <div class="container-fluid">
			
			<div class="row">
				<div class="col-lg-12">
					 <form class="float-end src-form">
						 <div class="row">
					 		<input class="search" type="text" placeholder="Search" aria-label="Search">
						</div>
				  
				 
				
					
				 
					</form>
			
				</div>
			</div>
		</div>
        <ul class="list-group list-group-root well">
		<li class="list-group-item">
			<a href="menu.php">HOME</a>
		</li>
		
		
		<li class="list-group-item">
			<a href="">PROFIL</a><ul class="level1-nav"><li>
				<a href="profilperusahaan.php">Profil Perusahaan</a><ul class="level2-nav"><li>
							</ul></li></ul></li><li>


			<a href="index_user.php">PRODUK</a><ul class="level1-nav"><li>
							<a href="generik.php">Generik</a></li><li>
							<a href="herbal">OTC & Herbal</a></li><li>
							<a href="etikal.php">Etikal</a></li><li>
							<a href="kosmetik.php">Kosmetik</a></li></ul></li><li>

			<a href="keranjang.php">KERANJANG</a><ul class="level1-nav"><li>
							</ul></li><li>

			<a href="histori_pembelian.php">RIWAYAT</a><ul class="level1-nav"><li>
							</ul></li><li>

			<a href="">HUBUNGI KAMI</a><ul class="level1-nav"><li>
							<a href="">Contact Center</a></li><li>
						</ul></li><li>

			<a href="keluar.php">KELUAR</a></li>	

		</ul>
	</div>
</div>
	
<main>
     <!-- MAIN BANNER -->
<div class="main-banner main-banner-sm">
	

	
	<div>
		<div class="caption caption-pos-center-left">
			<h1 class="caption-title">
				PROFIL PERUSAHAAN				
			</h1>
			
		</div>
	</div>
</div>
<!-- MENU NAV -->
<section class="section-panel menu-nav-inside-alt small">
    <style>
        .section-panel{
            background: #00BFFF;
        }
    </style>
	<div class="container">
		<ul class="nav nav-pills">
			<li class="nav-item"><a href="generik-1">Profil Perusahaan</a></li></ul>
	</div>
</section>


<!-- BREADCRUMB -->
<div class="transparent-bread">
<nav aria-label="breadcrumb" class="breadcrumb-container">
	<div class="container">
		<div class="row align-items-center">  
			<div class="col-9 col-md-10">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="menu.php">Home</a></li>
					
					<li class="breadcrumb-item"><a href="index_user.php">Profil</a></li><li class="breadcrumb-item active" aria-current="page">Profil Perusahaan</li>					
					
				</ol>
			</div>
		</div>
	</div>            
</nav>
</div>
<!-- WYSIWYG -->

	<div class="container">
		<div class="row">  
			<div class="col-12">
				<div class="wysiwyg-content wow bounceInUp">
				<p>&nbsp;</p>

<p><strong><img alt="" src="img/ibnusinatoko.jpg" style="width: 800px; height: 600px; margin-left: 10px; margin-right: 10px; float: left;" /></strong></p>

<p><strong>IBNU SINA Medical Store</strong></p>

<p>Apotek Ibnu Sina adalah apotek terpercaya yang telah berdiri sejak tahun 1990. Apotek ini berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan dengan menyediakan obat-obatan berkualitas dan harga terjangkau.</p>
            <p>Apotek Ibnu Sina memiliki tim apoteker yang profesional dan berpengalaman. Tim apoteker ini akan memberikan informasi dan saran yang tepat kepada pelanggan untuk mendapatkan pengobatan yang tepat.</p>
<p>&nbsp;</p>
				</div>
			
			</div>
		</div>
	</div>


		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<h6 class="footer-title">KANTOR PUSAT</h6>
						<p>
							PT. Rahman Sukses Sejahtera, TBK<br/>
							Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar<br/>
							Kota Surabaya, Jawa Timur - 60294
						</p>
						<style>
							.top-footer{
								background: 	#E0FFFF;
							}
						</style>
					</div>
					<div class="col-lg-2">
							<h6 class="footer-title">HUBUNGI KAMI</h6>
						<ul>
							<li><a href="">Email</a></li>
							<li><a href="">Facebook</a></li>
							<li><a href="">Twitter</a></li>
							<li><a href="">Instagram</a></li>
							<li><a href="">Hubungi Kami</a><li>
						</ul>
					</div>
					<div class="col-lg-5">
				
					</div>
					<div class="col-lg-3 text-start">
						<h6 class="footer-title">CONTACT CENTER</h6>
						<h6 class="contact-center">1-700-225</h6>
						<p>
							<strong>24 JAM <br/></strong>
							<!--Operation Time<br/>-->
							
						</p>
					</div>
				</div>
			</div>
	
		</div>

		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-start">
						<p>&copy; 2023 - Ibnu Sina. All Right Reserved.</p>
						<style>
							.bottom-footer {
								background: #00BFFF ;
							}
							.bottom-footer p {
                                text-align: center;
                            }
						</style>
					</div>
				</div>
			</div>
		</div>
	
	</main>

	
    
	
	
		
	<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script-->
	
	
	    
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	   <!--script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script-->



	
	
    <script src="https://www.kimiafarma.co.id/themes/front_site/js/bootstrap.bundle.min.js"></script>
	<script src="https://www.kimiafarma.co.id/themes/front_site/js/popper.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
	
	
	
		 <script>
		               new WOW().init();
		               </script>
	
	<script>
			$(".mobile-toggler-menu").click(function(){
				$(".mobile-menu").toggle();
			});
			
			
						// Get the modal
			
			var modal = document.getElementById("myModal");

			// Get the button that opens the modal
			//var btn = document.getElementById("myBtn");
			
			
			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on the button, open the modal
			
			
			$(".show-detail").click(function(){
				$("#person-description").html($("#"+$(this).attr('data-target')).html());
				modal.style.display = "block";
			})

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			  modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			  if (event.target == modal) {
			    modal.style.display = "none";
			  }
			}
			
						
			$("#submit-message").click(function(){
				$(".loader-std").show();
				$('.invalid-feedback').remove();
				$("#contact-form").submit();
				return false;
			 });
			 
			 $("#contact-form").on('submit',(function(e) {
				var form = $(this);
				
				e.preventDefault();
			
				$.ajax({
						url: 'https://www.ibnusina.co.id/'+"contact/submit", // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						dataType:'json',
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
						
							if(data.status == 1){
								window.location = 'https://www.kimiafarma.co.id//'+'?thanks=1';
							}else{
								$(".invalid-feedback").css("display", "block");
								$.each(data.message, function(key, val){
									$(".loader-std").hide();
									$('[name="' + key + '"]', form).after(val);
									
								});
							}  
						}
					});
			
			
			}));
			
			$("#load-more").click(function(){
				
		            $(this).hide();
					var id = $('#article .news:last').attr('id');
					
					var kategori = $("#kategori").val();
					$.ajax({
					  url: 'https://www.kimiafarma.co.id/'+"post/load_more/"+ kategori + '/' + id,
					}).done(function(html){ 
						/*$(".loader").hide();
						$container.isotope( 'insert', $(html) );
						setTimeout(function(){ $container.isotope('layout')}, 5000);*/
						$('#article').append(html);
						$('#article').css("height", "auto");
						$('#load-more').show();
					});
		        
			});
	</script>
	
	
	
	
		
	
	
	
  
	


</body>

</html>
