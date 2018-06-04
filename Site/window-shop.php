<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Gallery</title>
	
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
	
	<script src="assets/js/modernizr.js"></script> <!-- Modernizr -->
    
</head>
<body id="gallery">
	<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Dressing...</div>
	</div>
	<!-- /PRELOADER -->

	<?php include('assets/php/includes/navigation.html');?>

	<!-- WRAPPER -->
	<div class="wrapper">
	<!-- HOME -->
		<section class="module module-header bg-dark bg-dark-50" data-background="assets/images/section-7.jpg">

			<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<h1 class="module-title font-alt align-center">Our Shop Window</h1>

						<div class="module-subtitle font-inc align-center">
							Browse through our latest collections below. If there is anything you fancy you can select the items and make an appointment for trying on in our store. We'll have your size and preferences ready for your visit.
						</div>

					</div>

				</div>
				<!-- /MODULE TITLE -->

			</div>

		</section >
	<!-- /HOME -->

	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
					<li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Color 1</a></li>
					<li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Color 2</a></li>
					<li class="filter" data-filter=".option1"><a href="#0" data-type="option-1">Option 1</a></li>
					<li class="filter" data-filter=".option2"><a href="#0" data-type="option-2">Option 2</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery container">
			<form>
				<div class="form-group" id="gallery-fixed-form-group">
					<div class="form-item-inline">
						<label for="name">Name: </label>
						<input type="text" id="name" />
					</div>
					<div class="form-item-inline">
						<label for="email">Email: </label>
						<input type="email" id="email" />
					</div>
					<div class="form-item-inline">
						<label for="date">Date: </label>
						<input type="date" id="date"/>
					</div>
					<div class="form-item-inline">
						<label for="waist">Waist Size: </label>
						<input type="number" id="waist"/>
					</div>
					<div class="form-item-inline">
						<label for="top">Top Size: </label>
						<input type="number" id="top"/>
					</div>
					<div class="form-item-inline">
						<label for="shoe-size">Shoe Size: </label>
						<input type="number" id="shoe"/>
					</div>
					<div class="form-item-inline">
						<input type="submit" id="submit" />
					</div>
				</div>
				
				<div class="form-group">
					<ul>
						<li class="mix color-1 check1 radio2 option3">
							<input type="checkbox" id="cb1" />
						    <label for="cb1"><img src="assets/images/img-1.jpg" alt="Image 1"><span class="post-title font-alt">Image title</span><p>Description goes here</p></label>
						</li>
						<li class="mix color-2 check2 radio2 option2">
							<input type="checkbox" id="cb2" />
						    <label for="cb2"><img src="assets/images/img-2.jpg" alt="Image 2"><span class="h4">Image title</span><p>Description goes here</p></label>
						</li>
						<li class="mix color-1 check3 radio3 option1">
							<input type="checkbox" id="cb3" />
						    <label for="cb3"><img src="assets/images/img-3.jpg" alt="Image 3"><span class="h4">Image title</span><p>Description goes here</p></label>
						</li>
						<li class="mix color-1 check3 radio2 option4">
							<input type="checkbox" id="cb4" />
						    <label for="cb4"><img src="assets/images/img-4.jpg" alt="Image 4"><span class="h4">Image title</span><p>Description goes here</p></label>
						</li>
						
						<li class="mix color-1 check1 radio2 option3">
							<input type="checkbox" id="cb5" />
						    <label for="cb5"><img src="assets/images/img-5.jpg" alt="Image 5"><span class="h4">Image title</span><p>Description goes here</p></label>
						</li>
						<li class="mix color-2 check2 radio2 option2">
							<input type="checkbox" id="cb6" />
						    <label for="cb6"><img src="assets/images/img-6.jpg" alt="Image 6"><span class="h4">Image title</span><p>Description goes here</p></label>
						</li>
						<li class="mix color-2 check2 radio2 option2">
							<input type="checkbox" id="cb7" />
						    <label for="cb7"><img src="assets/images/img-7.jpg" alt="Image 7"><span class="h4">Image title</span><p>Description goes here</p></label>
						</li>
						<li class="mix color-1 check3 radio2 option4">
							<input type="checkbox" id="cb8" />
						    <label for="cb8"><img src="assets/images/img-8.jpg" alt="Image 8"><span class="h4">Image title</span><p>Description goes here</p></label>
						</li>
						
						<li class="gap"></li>
						<li class="gap"></li>
						<li class="gap"></li>
					</ul>
				</div>
				<div class="cd-fail-message">No results found</div>
				
					
			</form>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Search</h4>
					
					<div class="cd-filter-content">
						<input type="search" placeholder="Try color-1...">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Check boxes</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">Option 1</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">Option 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">Option 3</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Select</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Choose an option</option>
								<option value=".option1">Option 1</option>
								<option value=".option2">Option 2</option>
								<option value=".option3">Option 3</option>
								<option value=".option4">Option 4</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Radio buttons</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">Choice 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">Choice 3</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>
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