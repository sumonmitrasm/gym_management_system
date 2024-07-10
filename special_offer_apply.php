<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/brand.php");
include("admin/model/product.php");
include("admin/model/category.php");
include("admin/model/specialoffers.php");
$specialoffer = new Specialoffer();
$getSpecialoffer = $specialoffer->getSpecialoffer();
$getSpecialoffer = $specialoffer->getSpecialofferById($_GET['id']);
$product = new Product();
$brand = new Brand();
$category = new Category();
$getBrands = $brand->getBrands();
$getProduct = $product->getProducts();
$getCategories = $category->getCategories();
?>
<script language="javascript">
        var flag=0;
          
        function uname()
        {
            unamecheck=registrationform.uname.value;
            if(unamecheck=="")
            {
                document.getElementById("error0").innerHTML="Please Enter Your Name Here!";   
                flag=1;
            }
        }
	
		function email()
        {
            emailcheck=registrationform.email.value;
            if(emailcheck=="")
            {
                document.getElementById("error1").innerHTML="Please Enter Your Email Here!";
                flag=1;
            }
        }
        function phone()
        {
            phonecheck=registrationform.phone.value;
            if(phonecheck=="")
            {
                document.getElementById("error3").innerHTML="Please Enter Your Phone Here!";
                flag=1;
            }
        }
        function dob()
        {
           dobcheck=registrationform.dob.value;
            if(dobcheck=="")
            {
                document.getElementById("error4").innerHTML="Please Enter Your Date Of Birth Here!";
                flag=1;
            }
        }
		 function check(form)
        {
            flag=0;
         
            uname();
            email();
            phone();
            dob();
            if(flag==1)
                return false;
            else
                return true;
        }
</script>
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
				<li class="home"><a href="index.php">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li><li class="home"><a href="#">Special Offer  </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li>  </li>
			</ul>
			<div class="row">
				<div id="content" class="col-sm-8">
					<h2 class="title">Online Apply for Special Offer</h2>
					<form name='registrationform' action="admin/controller/specialoffer_applyController.php" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix" onSubmit="return check(this)">
						<?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
						<fieldset id="account">
							<legend>Your Personal Details</legend>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-firstname">Service Name</label>
								<div class="col-sm-10">
									<input type="text" name="name" id="name" class="form-control" value="<?=$getSpecialoffer['name'];?>" readonly>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">Your-Name</label>
								<div class="col-sm-10">
									<input type="text" name="uname" value="" placeholder="Your-Name" id="uname" class="form-control">
									<div id="error0" style="color:red"></div><br>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
								<div class="col-sm-10">
									<input type="email" name="email" value="" placeholder="E-Mail" id="email" class="form-control">
									<div id="error1" style="color:red"></div><br>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
								<div class="col-sm-10">
									<input type="tel" name="phone" value="" placeholder="Telephone" id="phone" class="form-control">
									<div id="error3" style="color:red"></div><br>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-fax">Date of Birth</label>
								<div class="col-sm-10">
									<input type="date" name="dob" value="" placeholder="Date of Birth" id="dob" class="form-control">
									<div id="error4" style="color:red"></div><br>
									<script type="text/javascript">
										var today = new Date().toISOString().split('T')[0];
										document.getElementsByName("dob")[0].setAttribute('max', today);
									</script>
								</div>
							</div>
						</fieldset>
						<input type="hidden" name="action" value="update_specialoffers">
						<input type="hidden" name="specialoffer_id" id="specialoffer_id" value="<?=$getSpecialoffer['id']?>">
						
						<div class="buttons">
							<div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
								
								<input type="submit" value="Continue" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
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