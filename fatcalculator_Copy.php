
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
				<li>  Fitness Check</li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-6">
					<h2 class="title">BMI Body fat calculator</h2>
					<form action="" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix" onsubmit="return false" name="bmiForm">
						<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-firstname">Weight</label>
								<div class="col-sm-10">
									<input type="text" name="weight" id="weight" placeholder="weight In Fit" class="form-control" value="" required/>
								</div>
							</div>
                       <div class="form-group required">
								<label class="col-sm-2 control-label" for="input-telephone">Height</label>
								<div class="col-sm-10">
									<input type="tel" name="height" value="" placeholder="height In Fit" id="height" class="form-control" required/>
								</div>
							</div>
							<div class="buttons">
								<label class="col-sm-9 control-label" for="input-telephone">BMI VALUE</label>
								<button type="button" class="btn btn-success pull-right" value="Calculate BMI" onClick="calculateBmi()">Check BMI</button>
							</div><br><br><br>
                       <div class="form-group required">
								<label class="col-sm-2 control-label" for="input-telephone">BMI RESULT</label>
								<div class="col-sm-10">
									<input type="tel" name="bmi" value="" class="form-control" readonly="">
								</div>
							</div>
							 <div class="form-group required">
								<label class="col-sm-2 control-label" for="input-telephone">BMI Comments</label>
								<div class="col-sm-10">
									<input type="tel" name="meaning" value="" class="form-control" readonly="">
								</div>
							</div>
							<input type="reset" class="pull-right" value="Reset" />
							<label class="col-sm-8 control-label" for="input-telephone" style="color:red; ">A healthy BMI ranges between 19 to 25.</label>
						</form>
				</div>
				<div id="content" class="col-sm-6">
					<label><i>The weight loss calculator calculates how much body fat you have to reduce (if needed) to get a healthy weight. If your percentage of body fat is more than acceptable limit you have to reduce your body fat to avoid some health risk like Diabetics, Type-2 Cancer, Sleep Arena, etc. The rule for good weight loss is slow and steady. A rate 5% to 10% is recommended. The calorie equivalent of body fat is 3500 calorie per pound, i.e. if you want to reduce one pound of your body fat in one week you have to reduce 500 calorie per day from your required daily calorie need and total 7 x 500 = 3500 calorie in a week.</i></label>
<table id="customers">
  <tr>
    <th>Percentage of  body fat:</th>
    <th> Accurate Body Fitness Status</th>
  </tr>
  <tr>
    <td>10 to 12</td>
    <td>Considered underweight</td>
  </tr>
  <tr>
    <td>18.5 to 25</td>
    <td>Considered within normal BMI range</td>
  </tr>
  <tr>
    <td>18.4</td>
    <td>Considered underweight</td>
  </tr>
  <tr>
    <td>25 to 30</td>
    <td>Considered obese</td>
  </tr>
  <tr>
    <td>30 to 40</td>
    <td>Considered overweight</td>
  </tr>
  <tr>
    <td>Over 40</td>
    <td>Considered extremely obese</td>
  </tr>
</table>
				</div>
			</div>
		</div>

		<script language="JavaScript">
<!--
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){	
height = height * 12;
height = height * 0.025;
var finalBmi = weight / (height * height);
finalBmi = Math.round(finalBmi);
document.bmiForm.bmi.value = finalBmi

if(finalBmi >= 10 && finalBmi > 12){
document.bmiForm.meaning.value = "You are considered underweight."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "You are considered within normal BMI range."
}

if(finalBmi >= 25 && finalBmi <30){
document.bmiForm.meaning.value = "You are considered obese."
}
if(finalBmi >= 30 && finalBmi <40){
document.bmiForm.meaning.value = "You are considered overweight."
}
if(finalBmi >= 40){
document.bmiForm.meaning.value = "You are considered extremely obese."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>
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
	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>



	
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="js/themejs/application.js"></script>	
	
</body>
<?php unset($_SESSION['message']); ?>
</html>