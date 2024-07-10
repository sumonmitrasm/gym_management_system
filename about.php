<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/category.php");
$category = new Category();
$getCategories = $category->getCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <!-- Basic page needs
    ============================================ -->
    <title>Gym Management System</title>
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
	
	<!-- <link href="css/responsive.css" rel="stylesheet"> -->
	
	
	
</head>

<body class="res layout-subpage">
	<div id="wrapper" class="wrapper-full ">
		<!-- Header Container  -->
		<?php include("includes/header-inner.php"); ?>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main ">
				<li class="home"><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				
				<li><a href="index.php">About Us</a></li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<div class="about-us about-demo-3">
						<div class="row">
							<div class="col-lg-6 col-md-6 about-image"> <img src="img/demo/about/vt1.jpg" alt="About Us"> </div>
							<div class="col-lg-6 col-md-6 about-info">
								<h2 class="about-title">OPEN 24 HOURS</h2>
								<div class="about-text text-justify">
									<p> Being a 24/7 gym is one of our best amenities because we can offer our members unrestricted freedom of access from sun up to sun down and everywhere in between. You no longer have to worry about cramming in gym time before we close!  The flexibility of having access to the gym 24/7 makes it easier for your to plan your schedule and cut down on the excuses of not being able to go to the gym. Whether you are an early morning bird and or a night owl, you will find a comfortable workout environment that will fit your needs anytime of day! Squeezing in a workout before closing, or missing weekend workouts are now a thing of the past.

                                    Our classes start as early as 6am and our movie room makes for a great late night workout! If you are on your lunch break, waking up early before work, or on your way home from school – the gym offers multiple different services 24 hours a day that will fit into any busy schedule! Take the stress away from planning your fitness routine – we are open 24/7! Given that exercise is a very important factor in maintaining physical, psychological, and social wellness, we must take the time to treat our bodies and our minds right! We at Klub 20 want you to have easy access to a healthy lifestyle. Our 24-hour operation makes Klub 20 the most reliable source for health promotion and for all of your wellness needs. Our around the clock gym access, sauna, steam room, and showers are waiting for you! All we ask is that you find 1 hour a day in your busy day and take some time for yourself to work hard, sweat and have fun!</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 skills-description">
								<h2 class="about-title text-justify">SPACE OF 22,000 SQUARE FEET</h2>
								<p class="text-justify">Our 22,000 square foot space allows us to carry everything you would look for in a gym! We have filled the gym with top of the line machines, weights and workout accessories to help all of our members reach their personal goals. We have a large class room that holds 80+ classes a week featuring zumba, yoga, pilates, muscle conditioning, trx and much more. Our spinning classes are allocated in a different room and holds 40 bikes. Our class areas are big enough to allow no pre-registration, this makes working out a worry free and easy task. In the last two years we have added a new section to our gym which is the turf area, this section is a multi purpose space where you are free to push our weighted sled, flip our tire, use our trx and much more.

Our famous cinema cardio room allows you to watch a movie at any time of the day and workout at the same time! We have designated areas for personal training where individual and group personal training take place. Having this reserved space enhances your experience with your trainer by cutting out distractions and focusing on yourself. The stretching area includes mats, foam rollers, and machines to help you stretch as this is very important for your post-workout recovery. Our location also features a daycare which we call the Kids Klub, which allows parents to drop off their children and have time to workout with peace of mind. Klub 20 also has a juice bar for all your pre and post workout needs whether you are looking for the perfect pre-workout supplement or post workout protein smoothie we have you covered!In addition, Klub 20 has fantastic amenities such as steam rooms with healing powers of eucalyptus, dry saunas and showers... all equipped with body wash, shampoo, mouthwash, and soap! Our spacious locker rooms with electronic lock systems will definitely make coming to the gym before or after school/work so much easier so what are you waiting for?!
									<br> Klub 20 is proud to hold top of the line Technogym equipment. We make sure that we have all the equipment necessary for a fantastic workout no matter what your style may be. We have a variety of dumbbells that go up to 110lbs, 4 squat racks and 2 smith machines for our heavy lifters. For our cardio lovers we are equipped with a multitude of treadmills, ellipticals, stairmasters and rowing machines. All of our electronic machines include a touch screen where you can watch videos, listen to music, or search the internet. We also have the option to travel virtually so if you feel like running on the boardwalk in sunny San Francisco, or through the woods, you can!

On all of our machines we have pictograms that show you exactly how to use the machines as well as which muscles you will be targeting during your workout. Our boxers get their very own punching bag as well! Whether you are a professional gym goer or a beginner, the gym has the right selection for you!  If any assistance is needed, rest easy, we've got you covered! With every membership you are allotted an hour with one of our fantastic personal trainers to get you started. This hour with them will allow you to learn about our different machines and how to use them safely. Waiting for machines at our gym isn't often the case, you can usually find the machine you are looking for without any wait! </p>
								</div>
								<div class="col-lg-6 col-md-6 skills-value">
									<div> <img src="img/demo/about/gf2.jpg" alt="About Us"> </div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- //Main Container -->


			<!-- Footer Container -->
			<?php include("includes/footer-inner.php"); ?>
							</div>
							<!-- Social widgets -->
                         <?php include("includes/footer-bottom.php"); ?>
	<!-- //end Footer Container -->

										
											
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
	
	
</body>
</html>