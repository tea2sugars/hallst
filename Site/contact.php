<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Semantic - Minimal portfolio template</title>
	
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

	<!-- GOOGLE MAP -->
	<section id="map-section" class="module-hero module-parallax module-fade">
		<div id="map"></div>
	</section>
	<!-- /GOOGLE MAP -->

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- CONTACT -->
		<section class="module">

			<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<h2 class="module-title align-center font-alt">Get in touch</h2>

						<div class="module-subtitle align-center font-inc">
							A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
						</div>

					</div>

				</div>
				<!-- /MODULE TITLE -->

				<!-- CONTACT FORM -->
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<form id="contact-form" role="form" novalidate="">

							<div class="form-group">
								<label class="sr-only" for="cname">Name</label>
								<input type="text" id="cname" class="form-control" name="cname" placeholder="Name" required="" data-validation-required-message="Please enter your name." aria-invalid="false">
								<p class="help-block text-danger"></p>
							</div>

							<div class="form-group">
								<label class="sr-only" for="cemail">Your Email</label>
								<input type="email" id="cemail" name="cemail" class="form-control" placeholder="Your E-mail" required="" data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>

							<div class="form-group">
								<textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Message" required="" data-validation-required-message="Please enter your message."></textarea>
								<p class="help-block text-danger"></p>
							</div>

							<button type="submit" class="btn btn-round btn-g">Submit</button>

						</form>

						<!-- Ajax response -->
						<div id="contact-response" class="ajax-response font-alt"></div>

					</div>

				</div>
				<!-- /CONTACT FORM -->

			</div>

		</section>
		<!-- /CONTACT -->

		<!-- DIVIDER -->
		<hr class="divider-w">
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