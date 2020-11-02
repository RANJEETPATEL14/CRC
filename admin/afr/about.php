<!DOCTYPE html>
<?php
	require_once '../validator.php';
	require_once '../account.php'; 
?>
<html lang="en">
<head>
	<title>CRC ONLINE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton&display=swap" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Miss+Fajardose&display=swap">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="py-1 bg-black top">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">+91 722 0817 628</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<span class="text">crconline@gmail.com</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
							<p class="mb-0 register-link"><span>Open hours: Monday - Sunday 8:00AM - 11:00PM</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
		<div class="container" >
			<a class="navbar-brand" href="home.php">CRC ONLINE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
					<li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class = " btn dropdown">
						<button class = "dropdown-toggle btn btn-success" data-toggle = "dropdown" type = "button" href = "#"> <?php echo htmlentities($admin_name)?> </button>
						<ul class = "dropdown-menu">
							<li><a href = "../admin.php">Update Profile</a></li>
							<li><a href = "order.php">See Orders</a></li>
							<li><a href = "../logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('../../user/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    	<div class="overlay">
		</div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
    </section>

	<section class="ftco-section ftco-wrap-about ftco-no-pb" style="background:lightblue;">
		<div class="container" >
			<div class="row justify-content-center">
				<div class="col-sm-10 wrap-about ftco-animate text-center">
					<div class="heading-section mb-4 text-center">
				 		<h2 class="mb-4">About</h2>
					</div>
					<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. Life is like a restaurant; you can have anything you want as long as you are willing to pay the price. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(../../user/images/bg_4.jpg);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row d-md-flex align-items-center justify-content-center">
				<div class="col-lg-10">
					<div class="row d-md-flex align-items-center">
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="20">0</strong>
									<span>Years of Experienced</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="50000">0</strong>
									<span>Happy Customers</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="1000">0</strong>
									<span>Menus</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="100">0</strong>
									<span>Staffs</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-blue" style="background:lightblue;">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2 class="mb-4">Services</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
					<div class="media block-6 services d-block">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-cake"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Birthday Party</h3>
							<p>Life is like a restaurant; you can have anything you want as long as you are willing to pay the price.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
					<div class="media block-6 services d-block">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-meeting"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Business Meetings</h3>
							<p>Life is like a restaurant; you can have anything you want as long as you are willing to pay the price.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
					<div class="media block-6 services d-block">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-tray"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Wedding Party</h3>
							<p>Life is like a restaurant; you can have anything you want as long as you are willing to pay the price.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section" style="background:lightblue;">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2 class="mb-4">Our Master Chef</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(../../user/images/chef-4.jpg);">
						</div>

						<div class="text pt-4" style="background:lightblue;">
							<h3>Ranjeet Patel</h3>
							<span class="position mb-2">Restaurant Owner</span>
							<p>Life is like a restaurant; you can have anything you want as long as you are willing to pay the price.</p>

							<div class="faded">
								<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="https://www.twitter.com/RANJITPATEL"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://www.facebook.com/ranjeetpatel7220817628"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/je.3t"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(../../user/images/chef-2.jpg);">
						</div>

						<div class="text pt-4" style="background:lightblue;">
							<h3>Rebeca Welson</h3>
							<span class="position mb-2">Head Chef</span>
							<p>Life is like a restaurant; you can have anything you want as long as you are willing to pay the price.</p>

							<div class="faded">
								<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="https://www.twitter.com/RANJITPATEL"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://www.facebook.com/ranjeetpatel7220817628"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/je.3t"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(../../user/images/chef-3.jpg);">
						</div>

						<div class="text pt-4" style="background:lightblue;">
							<h3>Kharl Branyt</h3>
							<span class="position mb-2">Chef</span>
							<p>Life is like a restaurant; you can have anything you want as long as you are willing to pay the price.</p>

							<div class="faded">
								<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="https://www.twitter.com/RANJITPATEL"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://www.facebook.com/ranjeetpatel7220817628"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/je.3t"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(../../user/images/chef-1.jpg);">
						</div>

						<div class="text pt-4" style="background:lightblue;">
							<h3>Luke Simon</h3>
							<span class="position mb-2">Chef</span>
							<p>Life is like a restaurant; you can have anything you want as long as you are willing to pay the price.</p>

							<div class="faded">
								<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="https://www.twitter.com/RANJITPATEL"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://www.facebook.com/ranjeetpatel7220817628"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/je.3t"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section img" style="background-image: url(../../user/images/bg_5.jpg);">
		<div class="overlay">
		</div>

		<div class="container" >
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2 class="mb-4">Testimony</h2>
				</div>
			</div>

			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<?php
						$i=1;
							$q_name = $conn->query("SELECT * FROM `review`") or die(mysqli_error());
							
							while($f_name = $q_name->fetch_array()){
						?>	
						<div class="item">
							<div class="testimony-wrap text-center pb-5">
								<div class="user-img mb-4" style="background-image: url(../../user/images/person_<?php echo $i;?>.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
									</span>
								</div>

								<div class="text p-3">
									<p class="mb-4"><?php echo $f_name['yourexperience']?> .</p>
									<p class="name"><?php echo $f_name['name']?></p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
						<?php
							$i++;
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(../../user/images/insta-1.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(../../user/images/insta-2.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(../../user/images/insta-3.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(../../user/images/insta-4.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(../../user/images/insta-5.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container-fluid px-md-5 px-3">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">CRC ONLINE</h2>
						<p>Where the food's as good as the root beer.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="https://www.twitter.com/RANJITPATEL"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="https://www.facebook.com/ranjeetpatel7220817628"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/je.3t"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Open Hours</h2>
						<ul class="list-unstyled open-hours">
							<li class="d-flex"><span>Monday</span><span>9:00 - 23:00</span></li>
							<li class="d-flex"><span>Tuesday</span><span>9:00 - 23:00</span></li>
							<li class="d-flex"><span>Wednesday</span><span>9:00 - 23:00</span></li>
							<li class="d-flex"><span>Thursday</span><span>9:00 - 23:00</span></li>
							<li class="d-flex"><span>Friday</span><span>9:00 - 23:00</span></li>
							<li class="d-flex"><span>Saturday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Sunday</span><span> 9:00 - 24:00</span></li>
						</ul>
					</div>
				</div>

			<div class="col-md-6 col-lg-3">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Review</h2>
					<form method = "POST" action = "../save_review.php" enctype = "multipart/form-data">
						<div class = "form-group">
							<label class = "control-label">Name:</label>
							<input name = "name" type = "text" id = "name" required = "required" class = "form-control" />
						</div>
						<div class = "form-group">
							<label class = "control-label">Your Experience:</label>
							<input name = "yourexperience" type = "text" id = "yourexperience" required = "required" class = "form-control" />
						</div>
						<div class = "modal-footer">
							<button  class = "btn btn-success" name = "submit">Submit</button>
						</div>
					</form>
				</div>
			</div>

				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Instagram</h2>

						<div class="thumb d-sm-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(../../user/images/insta-1.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(../../user/images/insta-2.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(../../user/images/insta-3.jpg);">
							</a>
						</div>

						<div class="thumb d-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(../../user/images/insta-4.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(../../user/images/insta-5.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(../../user/images/insta-6.jpg);">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>