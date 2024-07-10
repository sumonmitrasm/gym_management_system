
<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/category.php");
include("admin/model/membership_fondpage.php");

$membership = new Membership();
$getMembership = $membership->getMembership();
$category = new Category();
$getCategories = $category->getCategories();
?>
<!DOCTYPE html>
<html lang="en">
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
				<li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li>Membership</li>
			</ul>
			
			
		</div>
<!-- ........................... -->
<div class="row">
<div class="col-md-12">
	<div class="well">
			<img src="images/4.jpg" alt="">
			<p class="text-justify"> 
<h4>Get Our Free Money Tips E12ail!</h4>

For all the latest deals, guides and loopholes - join the 12m who get it. Don’t miss out
Don't commit unless you'll use it
Whether it's feeling the urge to undo Christmas overindulgence, or thinking about your 'beach bod' in spring, many of us suddenly feel the need to join a gym at certain times of the year. However, joining on a whim can often mean you end up in a lengthy contract with a gym membership you don't use. 

<h4>Don’t get caught up in the fitness hype</h4>
First things first, never think of a gym membership in terms of its monthly cost but a yearly expenditure instead. For instance, a TK2300/month membership will set you back TK3100over the year. And don't forget to factor in any administration or joining fees to the monthly charge.
<br>
<h4>Gyms Near Me</h4>
Nothing is more important than your health. If you’re looking for a place to get into shape, there are tons of local gym memberships that will help strengthen muscles, build endurance, and improve your physique. Next time you’re ready to break a sweat, check out these affordable gyms in your neighborhood.
</p>
			
		</div>
	</div>
	
</div>
<!-- ............................... -->

			</div>
	<br><br>
</div>

<!-- ......................................... -->
<div class="row">
	<div class="col-md-8" style="background-color: #E3E0E0; height: 595px;">
		<div class="well" style="height: 589px;">
			<img src="images/s1.jpg" alt="">
			<p class="text-justify">
			</p>
			<table class="schdule-table table table-bordered">
								  <thead class="thead-light">
								    <tr>
								      <th class="head" scope="col">Duration</th>
								      <th class="head" scope="col">Silver</th>
								      <th class="head" scope="col">Gold</th>
								      <th class="head" scope="col">Platinium</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php foreach($getMembership as $key=>$value): ?>
								    <tr>
								      <td><?php echo $value['network_age']; ?></td>
								      <td><?php echo $value['silver_rate']; ?></td>	
								      <td><?php echo $value['gold_rate']; ?></td>	
								      <td><?php echo $value['platinium_rate']; ?></td>				      
								      			      			      
								    </tr>
								    <?php endforeach; ?>				    							    
								  </tbody>
							</table>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
							<div class="panel-heading">
									Membership
							</div>
							<div class="panel-body">
								<p class="text-justify">
									<img class="center"src="img/membership/Silverlogo.png"  alt="" class="img-responsive img-thumbnail" width="100" align="left" hspace="3" vspace="3">
									Silver Fitness offers month-to-month memberships as low as TK.1300 per month. The basic membership only allows access to fitness equipment, while higher tiers, which cost as much as TK.2300 per month, add in other amenities including access to classes, massages, tanning and locker privileges
								</p>
							</div>
							<div class="panel-body">
									<p class="text-justify">
									<img class="center"src="img/membership/purepng.png"  alt="" class="img-responsive img-thumbnail" width="100" align="left" hspace="3" vspace="3">
									Many Gold's Gym locations participate in the Silver Sneakers program, which is a free fitness program for seniors. Medicare Advantage and other health insurance companies may cover the membership fees or provide discounts at participating fitness centers for qualifying seniors.
								</p>
							</div>
							<div class="panel-body">
								<p class="text-justify">
									<img class="center"src="img/membership/image-asset.png"  alt="" class="img-responsive img-thumbnail" width="100" align="left" hspace="3" vspace="3">
									Locally owned and operated, Platinum Fitness is a gym where members can get a great workout among friends in a clean and comfortable setting. Our focus is, and will always be to make the workout experience enjoyable, while giving our members personal attention and motivation to help them reach their fitness goals
								</p>
					</div>
			</div>
	</div>
</div>
<!-- ................................................... -->
<div class="row" style="margin-top: 25px;">
		
			


			<!-- ............................................. -->
	


		<!-- //Main Container -->
		

		<!-- Footer Container -->
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
	
</body>
<?php unset($_SESSION['message']); ?>
</html>