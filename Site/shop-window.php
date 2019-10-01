<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Hall Street - Browse our Shop Window</title>
	
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
	<link href="assets/css/shop-window.css" rel="stylesheet">

	
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
		
	<script src="assets/js/modernizr.js"></script> <!-- Modernizr -->
    
</head>
<body id="gallery">
	<!-- PRELOADER 
	<div class="page-loader">
		<div class="loader">Dressing...</div>
	</div>
	<!-- /PRELOADER -->

	<?php include('assets/php/includes/navigation.html');?>

	<!-- WRAPPER -->
	<div class="wrapper">
	<!-- HOME -->
		<section class="module module-header bg-dark bg-dark-50" <?php perch_content('gallery_title_image');?>>

			<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<h1 class="module-title font-alt align-center">
								<?php perch_content('gallery_title');?>
						</h1>

						<div class="module-subtitle font-inc align-center">
							<?php perch_content('gallery_title_intro');?>
						</div>

					</div>

				</div>
				<!-- /MODULE TITLE -->

			</div>

		</section >
	<!-- /HOME -->

	<main class="cd-main-content module-small">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
					<li class="filter" data-filter=".shoes"><a href="#0" data-type="shoes">Shoes</a></li>
					<li class="filter" data-filter=".jeans_and_trousers"><a href="#0" data-type="trousers">Jeans &amp; Trousers</a></li>
					<li class="filter" data-filter=".shirts"><a href="#0" data-type="shirts">Shirts</a></li>
					<li class="filter" data-filter=".knitwear"><a href="#0" data-type="knitwear">Knitwear</a></li>
					<li class="filter" data-filter=".coats"><a href="#0" data-type="coats">Coats &amp; Jackets</a></li>
					<li class="filter" data-filter=".accessories"><a href="#0" data-type="accessories">Accessories</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
		<h2 class="text-center"><?php perch_content('gallery-second-title');?></h2>
		<div style="max-width:900px; margin:0 auto;">
			<p class="text-center"><?php perch_content('gallery-second-instructions');?></p>
		</div>
			<form method="post" name="shop-window-form" action="assets/php/form-to-email.php">
				
				<div class="form-group">
					<ul>
						<?php perch_content('gallery-image');?>
					</ul>
				</div>
				<div class="cd-fail-message">No results found</div>
				
				<article class="white-background">
					<h3 class="align-center">Your appointment preferences</h3>
					<div class="form-group" id="gallery-fixed-form-group">
						<div class="form-item-inline">
							<label for="name">Your Name: </label>
							<input type="text" id="name" name="name" />
						</div>
						<div class="form-item-inline">
							<label for="email">Email Address: </label>
							<input type="text" id="email" name="email" />
						</div>
						<div class="form-item-inline">
							<label for="phone">Phone Number: </label>
							<input type="text" id="phone" name="phone" />
						</div>
						<div class="form-item-inline">
							<label for="date">Appointment Date: </label>
							<input type="date" id="date" name="date"/>
						</div>
						<div class="form-item-inline">
							<label for="time">Time: </label>
							<input type="text" id="time" name="time"/>
						</div>
						<div class="form-item-inline">
							<label for="store">Preferred Store: </label>
							<select id="store" name="store">
								<option value="Hadleigh">Hadleigh</option>
								<option value="Long Melford">Long Melford</option>
							</select>
						</div>
						<div class="form-item-inline">
							<label for="trouser-size">Trouser Size: </label>
							<select id="trouser-size" name="trouser-size">
							  <option value="30Short">30” Short</option>
							  <option value="30Regular">30” Regular</option>
							  <option value="30Long">30” Long</option>
							  
							  <option value="32Short">32” Short</option>
							  <option value="32Regular">32” Regular</option>
							  <option value="32Long">32” Long</option>
							  
							  <option value="34Short">34” Short</option>
							  <option value="34Regular">34” Regular</option>
							  <option value="34Long">34” Long</option>
							  
							  <option value="36Short">36” Short</option>
							  <option value="36Regular">36” Regular</option>
							  <option value="36Long">36” Long</option>
							  
							  <option value="38Short">38” Short</option>
							  <option value="38Regular">38” Regular</option>
							  <option value="38Long">38” Long</option>
							  
							  <option value="40Short">40” Short</option>
							  <option value="40Regular">40” Regular</option>
							  <option value="40Long">40” Long</option>
							  
							  <option value="42Short">42” Short</option>
							  <option value="42Regular">42” Regular</option>
							  <option value="42Long">42” Long</option>
							</select>
						</div>
						<div class="form-item-inline">
							<label for="top">Top Size: </label>
							<select id="top" name="top">
							  <option value="S">S</option>
							  <option value="M">M</option>
							  <option value="L">L</option>
							  <option value="XL">XL</option>
							  <option value="XXL">XXL</option>
							  <option value="XXXL">XXXL</option>
							  <option value="XXXXL">XXXXL</option>
							</select>
						</div>
						<div class="form-item-inline">
							<label for="shoe-size">Shoe Size: </label>
							<select id="shoe-size" name="shoe-size">
							  <option value="UK6/40">UK6/40</option>
							  <option value="UK7/41">UK7/41</option>
							  <option value="UK8/42">UK8/42</option>
							  <option value="UK9/43">UK9/43</option>
							  <option value="UK10/44">UK10/44</option>
							  <option value="UK11/45">UK11/45</option>
							  <option value="UK12/46">UK12/46</option>
							  <option value="UK13/47">UK13/47</option>
							</select>
						</div>
						
					</div>
					<div class="form-item-inline align-center">
							<input type="submit" id="submit" value="Send Request" />
							<p class="small">Hall Street will retain the following information for future reference when liaising with you - your contact details as supplied, your size and item preferences.<br/>We will never share this information with any other individual or organisation outside of Robert Anthony of Suffolk Limited (trading as Hall Street).<br/>Should you have any concerns please feel to comment.</p>
						</div>
				</article>
					
			</form>
		</section> <!-- cd-gallery -->

	</main> <!-- cd-main-content -->
	
	<!-- DIVIDER -->
		<hr class="divider-w">
		<!-- /DIVIDER -->

		<?php include('assets/php/includes/footer.html');?>
		
	</div>

	<!-- Javascript files -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="assets/js/jqBootstrapValidation.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/jquery.mixitup.min.js"></script>
	<script src="assets/js/shop-window.js"></script> <!-- Resource jQuery -->

</body>
</html>