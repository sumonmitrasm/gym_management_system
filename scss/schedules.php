<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/category.php");

include("admin/model/schedule.php");
$schedule = new Schedule();
$getSchedule = $schedule->getSchedule();
$category = new Category();
$getCategories = $category->getCategories();

?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		 <!-- Basic page needs
    ============================================ -->
    <title>eStore</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    
	<!-- Theme CSS
	============================================ -->
	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/footer1.css" rel="stylesheet">
	<link href="css/header1.css" rel="stylesheet">
	<link id="color_scheme" href="css/theme.css" rel="stylesheet">
	
		<!-- Mobile Specific Meta -->
		
		<!-- meta character set -->
		
		<!-- Site Title -->
		
			<!--
			CSS
			============================================= -->
			
			
		</head><br><br>
		<body>
			<?php include("includes/header-inner.php"); ?>
<section class="schedule-area section-gap" id="schedule">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Schedule your Fitness Process</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="table-wrap col-lg-12">
							<table class="schdule-table table table-bordered">
								  <thead class="thead-light">
								    <tr>
								      <th class="head" scope="col">Course name</th>
								      <th class="head" scope="col">mon</th>
								      <th class="head" scope="col">tue</th>
								      <th class="head" scope="col">wed</th>
								      <th class="head" scope="col">thu</th>
								      <th class="head" scope="col">fri</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th class="name" scope="row">Fitness Aero</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Senior Fitness</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Fitness Aero</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>							      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Senior Fitness</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>							      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Senior Fitness</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Senior Fitness</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>						      
								    </tr>							    							    							    							    
								  </tbody>
							</table>							
						</div>
					</div>
				</div>	
			</section>


<!-- start footer Area -->		
			<?php include("includes/footer-inner.php"); ?>
			<!-- //end Footer Container -->

		</div>
		<!-- Social widgets -->
		<?php include("includes/footer-bottom.php"); ?>	<!-- End Social widgets -->
		
		
<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
	
	
	<!-- Theme files
	============================================ -->
	
	
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="js/themejs/application.js"></script>	
	
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>			
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



