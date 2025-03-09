<?php
session_start();
    include "db.php";

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
				
    <link rel="icon" type="image/ico" href="img\logo lsp web.png">
	
	<meta name="google-site-verification" content="" />
	
	
	
</head>

<body>
	
	<header>
	  <nav class="navbar navbar-expand-md navbar-dark fixed-top top-nav">
		
	    <div class="container-fluid">
			<div class="row nav-row">
				<div class="col-lg-2 col-logo">
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


			<a href="">PRODUK</a><ul class="level1-nav"><li>
							<a href="generik.php">Generik</a></li><li>
							<a href="herbal.php">OTC & Herbal</a></li><li>
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
		
		<div id="myCarousel" class="carousel slide main-banner" data-bs-ride="carousel">
	<div class="carousel-indicators carousel-custom">
	<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="carousel-nav active" aria-current="true" aria-label="Slide 1"></button><button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" class="carousel-nav " aria-current="true" aria-label="Slide 1"></button><button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" class="carousel-nav " aria-current="true" aria-label="Slide 1"></button>	
	</div>
	<div class="carousel-inner">
		
		<div class="carousel-item active" style="background:url(img/head1HD.jpg) no-repeat; background-size:cover; background-position:top center; "></div><div class="carousel-item " style="background:url(img/head2HD.jpg) no-repeat; background-size:cover; background-position:top center; "></div><div class="carousel-item " style="background:url(img/head3.jpg) no-repeat; background-size:cover; background-position:top center; "></div>	
		
		
		




		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>
	
<div class="container mt-4">

    <!-- Three columns of text below the carousel -->
    <div class="row wow bounceInUp">
      
	  <div class="col-lg-4">
        <div class="card">
			  <img src="img/distribusihd.png" class="card-img-top" alt="...">
			  <div class="card-body">
				<div class="article-category">VALUE CHAIN</div>
				<h5 class="article-title">DISTRIBUSI FARMASI</h5>
				<p class="card-text article-desc">Memiliki 49 jaringan distribusi nasional serta pelanggan dengan >30.000 channel ...<br/><a href="">read more</a></p>
				<style>
					.article-category{
						color: #00BFFF;
					}
				</style>
				
			  </div>
		</div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <div class="card">
			  <img src="img/ritelhd.png" class="card-img-top" alt="...">
			  <div class="card-body">
				<div class="article-category">VALUE CHAIN</div>
				<h5 class="article-title">RITEL FARMASI</h5>
				<p class="card-text article-desc">Pemimpin pasar ritel farmasi dengan outlet lebih dari > 1.300 dan mengelola 400 klinik Kesehatan di Indonesia ...<br/><a href="">read more</a></p>
			  </div>
		</div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <div class="card">
			  <img src="img/lab.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
				<div class="article-category">VALUE CHAIN</div>
				<h5 class="article-title">LABORATORIUM & CHECK </h5>
				<p class="card-text article-desc">One stop healthcare solution mulai dari layanan Kesehatan, obat, dan cek kesehatan dari cek darah, cek kadar gula ...<br/><a href="">read more</a></p>
			  </div>
		</div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    

</div>

<div class="promotions">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h5 class="promotions-title">PROMOSI</h5>
				<style>
					.promotions{
						background: #00BFFF;
					}
				</style>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<div id="PromotionSlider" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
								
												<a href="">					
												 <img class="first-slide" src="img/iklan1.jpg" alt="First slide">
											 </a>
				
										</div><div class="carousel-item ">
				
								
												<a href="">					
												 <img class="first-slide" src="img/iklan2.jpg" alt="First slide">
											 </a>
				
										</div><div class="carousel-item ">
				
								
												<a href="">					
												 <img class="first-slide" src="img/iklan3.jpg" alt="First slide">
											 </a>
				
										</div>				
												<button class="carousel-control-prev" type="button" data-bs-target="#PromotionSlider" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#PromotionSlider" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
						</button>
								</div>
							</div>
						</div>
			
					</div>
				</div>			
			</div>
		</div>
	</div>
</div>
 
<div class="informations wow bounceInUp">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h5 class="informations-title">INFORMASI</h5>
				<div class="bottom-border-title">
					<style>
						.bottom-border-title{
							background: #00BFFF;
						}
					</style>
				</div>
			</div>
		</div>
		
		<div class="row informations-center">
			
			<div class="col-lg-4">
				<div class="information-caption" style="background:url('img/outlet.jpg') no-repeat; background-size:cover; background-position:top center; ">
					<div class="information-caption-orange">
						<style>
							.informations-center .information-caption .information-caption-orange {
								width: 100%;
								height: 192px;
								position: absolute;
								bottom: 0;
								background: #00BFFF;
								z-index: 2;
								padding: 60px 30px 20px 30px;
							}
						</style>
						<h5 class="information-title">OUTLET KAMI</h5>
						<p><a href="">Selengkapnya></a></p>
					
					</div>
				</div>
			</div>
		
			<div class="col-lg-4">
				<div class="information-caption" style="background:url('img/produk.jpg') no-repeat; background-size:cover; background-position:top center; ">
					
					<div class="information-caption-orange">
						<h5 class="information-title">PRODUK KAMI</h5>
					<p><a href="index_user.php">Selengkapnya></a></p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="information-caption" style="background:url('img/tentangkami2.jpg') no-repeat; background-size:cover; background-position:top center; ">
					
					<div class="information-caption-orange">
						<h5 class="information-title">TENTANG KAMI</h5>
						<p><a href="profilperusahaan.php">Selengkapnya ></a></p>
					</div>
				</div>
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
							<strong>24 hours <br/></strong>
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
	
	
	    
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
