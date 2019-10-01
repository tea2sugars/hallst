<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title><?php perch_pages_title(); ?></title>
	
	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Plugins -->
	<link href="assets/css/simpletextrotator.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/et-line-font.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/flexslider.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	
	<!-- Template core CSS -->
	<link href="assets/css/style.css" rel="stylesheet">
	
	<!-- Custom css -->
	<link href="assets/css/custom.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel='stylesheet' type='text/css'>
    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-76522032-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
    
</head>
<body>

	<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Dressing...</div>
	</div>
	<!-- /PRELOADER -->

	<?php include('assets/php/includes/navigation.html');?>

	<!-- HOME -->
	<section id="home" class="module-hero module-parallax module-fade module-full-height">

		<div class="hero-slider">
			<ul class="slides">
				
				<?php perch_content('slide.main');?>
				
			</ul>
		</div>

	</section >
	<!-- /HOME -->

	<!-- WRAPPER -->
	<div class="wrapper">

		

		<section class="module-small" id="about">

			<div class="container">

				<div class="row" >


					<h2 class="font-alt align-center"><?php perch_content('main_page_title');?></h2>
					<div class="col-sm-12 col-md-10 col-md-offset-1">
							<h4 class="align-center"><?php perch_content('main_page_subtitle');?></h4>
							<div class="text-columns">
								<?php perch_content('main_page_copy');?>
								
							</div>
							<div class="align-center" style="margin-top:20px; margin-bottom:20px;">
								<a href="#stores" class="btn btn-primary btn-round btn-lg section-scroll">Find Us</a>
							</div>
					</div>
				</div>
			</div>
		</section>
		
				
		<!-- DIVIDER -->
		<hr class="divider-g">
		<!-- /DIVIDER -->
				
		<section class="module-small" id="video">

			<div class="container">

				<div class="row" >
						<div class="align-center">
							<h2 class="font-alt align-center">Watch Our Story</h2>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/CHvR240VaaA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							
							<p><a href="https://www.youtube.com/channel/UCl6VFyXDtCtH-_LZO5r6t2Q" class="btn btn-primary btn-round btn-lg align-center" style="margin-top:20px; margin-bottom:20px;">View our YouTube channel</a></p>
						</div>
				</div>

			</div>

		</section>
		
		<!-- DIVIDER -->
		<hr class="divider-g">
		<!-- /DIVIDER -->
		
		<section class="module-small" id="brands">

			<div class="container">
				<h2 class="font-alt align-center">Our Brands</h2>

				<div class="row multi-columns-row post-columns">
					<?php perch_content('brands');?>
				</div>

			</div>
			
		</section>
		<!-- DIVIDER -->
		<hr class="divider-g">
		<!-- /DIVIDER -->
		<section class="module-small" id="stores">
			<div class="container">

				<div class="row">
			
					<h2 class="font-alt align-center">Our Stores</h2>
					
							<div class="col-sm-12 col-md-10 col-md-offset-1">
								<h4 class="align-center"><?php perch_content('stores_subtitle');?></h4>
									<div class="text-columns-2">
										<?php perch_content('stores_copy');?>
										
									</div>
							</div>
				</div>
			</div>

			<div class="container" id="contact">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="post">
							<div class="post-thumbnail">
								<?php perch_content('longmelford.store');?>
							</div>
							<div class="post-header">
								<h2 class="post-title font-alt">Long Melford</h2>
							</div>
							<div class="post-entry">
								<div class="row">
									<div itemscope itemtype="http://schema.org/LocalBusiness">
										<div class="col-sm-12 col-md-6">
										
											   <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
												 <p>

											     <span itemprop="streetAddress">Hall Street</span><br/>
											     <span itemprop="addressLocality">Long Melford</span><br/>
											     <span itemprop="addressRegion">Suffolk</span><br/>
											     <span itemprop="postalCode">CO10 9JL</span>
												</p>
												<p><a href="https://www.google.com/maps/dir/Current+Location/Hall+St,+Long+Melford,+Sudbury,+Suffolk+CO10,+UK"><span class="icon-map-pin"></span> Get Directions</a></p>
											   </div>											
											
										</div>
										
										<div class="col-sm-12 col-md-6">
										   
										   <p>
											   <span itemprop="openingHours" content="Tu,We,Th,Fr,Sa 10:00-17:00">Opening times:<br/>Tuesday to Saturday 10am to 5pm</span><br/>
											   <span itemprop="openingHours" content="Su 11:00-15:00">Sunday 11am to 3pm</span><br/>
											   Monday Closed.
											</p>
											<p>Phone: <span itemprop="telephone">01787 464828</span></p>
											
										</div>
										
									</div>
								</div>
								</div>
									
											
									
							</div>
					
						</div>
					<div class="col-sm-12 col-md-6">
						<div class="post">
							<div class="post-thumbnail">
								<?php perch_content('hadleigh.store');?>
							</div>
							<div class="post-header">
								<h2 class="post-title font-alt">Hadleigh</h2>
							</div>
							<div class="post-entry">
								<div class="row">
									<div itemscope itemtype="http://schema.org/LocalBusiness">
										<div class="col-sm-12 col-md-6">
										
											   <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
												 <p>

											     <span itemprop="streetAddress">99 High Street</span><br/>
											     <span itemprop="addressLocality">Hadleigh, Ipswich</span><br/>
											     <span itemprop="addressRegion">Suffolk</span><br/>
											     <span itemprop="postalCode">IP7 5EJ</span>
												</p>
												<p><a href="https://www.google.com/maps/dir/Current+Location/99+High+St,+Hadleigh,+Ipswich,+Suffolk+IP7+5EJ,+UK"><span class="icon-map-pin"></span> Get Directions</a></p>
											   </div>	
											   
											
										</div>
										
										<div class="col-sm-12 col-md-6">
										   
										   <p>
											   Opening times:<br/>
											   <span itemprop="openingHours" content="Mo Closed">Monday - Closed</span><br/>
											   <span itemprop="openingHours" content="Tu 10:00-17:00">Tuesday - 10am to 5pm</span><br/>
											   <span itemprop="openingHours" content="We 12:00-19:00">Wednesday - 12pm to 7pm</span><br/>
											   <span itemprop="openingHours" content="Th 10:00-17:00">Thursday - 10am to 5pm</span><br/>
											   <span itemprop="openingHours" content="Fr 12:00-19:00"> Friday - 12pm to 7pm</span><br/>
											   <span itemprop="openingHours" content="Sa 10:00-17:00">Saturday - 10am to 5pm</span><br/>
											   <span itemprop="openingHours" content="Su Closed">Sunday - Closed</span>
											</p>
											<p>Phone: <span itemprop="telephone">01473 822554</span></p>
											
										</div>
										
									</div>
								</div>
								</div>
									
											
									
							</div>
					
						</div>
					</div>
					
				</div>
			</div>
			
		</section>

		<!-- DIVIDER -->
		<hr class="divider-g">
		<!-- /DIVIDER -->

		<?php include('assets/php/includes/footer.html');?>

	</div>
	<!-- /WRAPPER -->

	<!-- Scroll-up -->
	<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>
	
	<!-- Javascript files -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="assets/js/jqBootstrapValidation.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>