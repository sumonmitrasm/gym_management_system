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
				<li class="home"><a href="index.php">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				
				<li><a href="#">Dait chart</a></li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<div class="about-us about-demo-3">
						<div class="row">
							<div class="col-lg-6 col-md-6 about-image"> <img src="img/demo/about/dait_1.png" alt="About Us"> </div>
							<div class="col-lg-6 col-md-6 about-info">
								<h2 class="about-title">Dait chart</h2>
								<div class="about-text">
									<p align="justify"> Here, 36-year-old network engineer Deven Mehta shares how he dropped 20 kilos in less than a year: It's no secret how much Gujaratis love their fast food. Being from a Gujarati family myself, bhel puri, samosas and vada pav were a big part of my diet. Larry Goldberg, a food lover who owned three popular Goldberg's Pizza Book'' (Random House), ''Goldberg's Diet Catalog'' (MacMillan) and ''Controlled Cheating: The Fats Goldberg Take It Off, Keep It Off Diet Program''(Doubleday). Mr. Goldberg, the In the short term, the low-fat diet was the “loser” in weight loss and the low-carb the clear winner, but the low-glycemic diet was the best diet for the long term. And the long what us “traditional” food lovers eat. Related food news on Robert Ferguson was the face and co-developer of Provida's Food Lovers' Fat Loss System Unfortunately, conventional weight loss plans have been created by people with a diet mentality. These conventional plans are also standardized and not designed Nina Buckley is a sucker for donuts, McDonald's Big Macs, and Indian takeout — food hankerings diet approach. The FastDiet's designers, Dr. Michael Mosley and journalist Mimi Spencer, both of the U.K., claim that their 5:2 plan makes you lose Luckily for all of the carb lovers out there enjoy more of the "incredible food they got to eat on the diet." Based on creating well-balanced meals that include plenty of resistant starch to help you lose weight and keep it off, the book explains .</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 skills-description">
								<h2 class="about-title">Foods</h2>
								<div class="col-lg-6 col-md-6 about-image"> <img src="img/demo/about/dait_2.jpg" alt="About Us"> </div>
								<p align="justify">Cook Smarts isn't so much a meal planning app as it is an entire meal planning service. In addition to helping you plan out your weekly meals and active community around it of home cooks and food lovers eager to explore new foods, try new things If you answered: Mostly A's — Social butterfly - You're a food lover, who struggles with willpower. You have a busy social life and don't want your diet to stop you enjoying meals out. You find it tough to stick to rigid eating plans for long. For those not yet indoctrinated, the Whole30 diet is a 30 with the Whole30 plan means eating a lot of vegetables. This recipe for roasted carrots and beets is a must-try. Get the recipe from Brooklyn Supper. Beware fast food lovers: Chicken nuggets When you plan to follow the size zero diet chart according to the celebrities Her other diet secrets include healthy foods as she is a food lover, and Pilates is another way by which she loses all her flab. LeAnn Rimes follows a very strict size .</p>
								</div>
								<div class="col-lg-6 col-md-6 skills-value">
									<ul class="value-list blank">
										<li class="item">
											<p class="label-skill">Morning Dait:</p>
											<div class="progress">
												<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:90%">
													40%
												</div>
											</div>
										</li>
										<li class="item">
											<p class="label-skill">Lunch Dait:</p>
											<div class="progress">
												<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:95%">
													60% 
												</div>
											</div>

										</li>
										<li class="item">
											<p class="label-skill">Dinner Dait:</p>
											<div class="progress">
												<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:85%">
													30% 
												</div>
											</div>
										</li>
									</ul>
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