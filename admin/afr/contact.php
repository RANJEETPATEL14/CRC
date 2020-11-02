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
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php">CRC ONLINE</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>


        <div class = "modal fade" id = "edit_customer" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel" style="background:lightblue;">
          <div class = "modal-dialog" role = "document">
            <div class = "modal-content panel-warning">
              <div class = "modal-header panel-heading">
                <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
                <h4 class = "modal-title" id = "myModallabel">Change Password</h4>
              </div>
              <div id = "edit_query"></div>
            </div>
          </div>
		  	</div>


	      <div class="collapse navbar-collapse" id="ftco-nav" >
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
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
<!-- Start Contact Details -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../../user/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4 font-weight-bold">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Address:</span>Sabar Institute of Technology for Girls, Tajpur</p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Phone:</span> <a href="tel://1234567920">+91 722 0817 628</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Email:</span> <a href="mailto:crconline@gmail.com">crconline@gmail.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Website</span> <a href="#">www.crconline.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- END Contact Details -->

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
<!-- Start Footer -->
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

<!-- END Footer -->
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
  <script type = "text/javascript">
		$(document).ready(function(){
			$('.ecustomer_id').click(function(){
				$customer_id = $(this).attr('name');
				$('#edit_query').load('load_edit.php?customer_id=' + $customer_id);
			});
		});
	</script>
  </body>
</html>