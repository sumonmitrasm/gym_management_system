<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/brand.php");
include("admin/model/product.php");
include("admin/model/category.php");
$product = new Product();
$brand = new Brand();
$category = new Category();
$getBrands = $brand->getBrands();
$getProduct = $product->getProducts();
$getCategories = $category->getCategories();

?>
<script language="javascript">
        var flag=0;
		function email()
        {
            emailcheck=loginform.email.value;
            if(emailcheck=="")
            {
                document.getElementById("error0").innerHTML="Please Enter Your Email Here!";
                flag=1;
            }
        }
		function password(){
            passwordcheck=loginform.password.value;
            if(passwordcheck==""){
                document.getElementById("error1").innerHTML="Enter Password Here!";
                flag=1;
            }else if(passwordcheck.length<6){
                document.getElementById("error1").innerHTML="Password Must Be 6 Character Long!";
                flag=1;
            }
        } 
		 function check(form)
        {
            flag=0;
			email();
			password();
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
    <title>Login::eStore</title>
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
				<li class="home"><a href="#">Account   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li>  Login</li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<div class="page-login">
						<div class="account-border">
							<div class="row">
								<?php  if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
								<form name='loginform' action="admin/controller/UsersController.php" method="post" enctype="multipart/form-data" onSubmit="return check(this)">
									<div class="col-sm-6 customer-login">
										<div class="well">
											<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Management</h2>
											<p><strong>I am a returning customer</strong></p>
											<div class="form-group">
												<label class="control-label " for="input-email">E-Mail Address</label>
												<input type="email" name="email" value="" id="input-email" class="form-control">
												<div id="error0" style="color:red"></div><br>
											</div>
											<div class="form-group">
												<label class="control-label " for="input-password">Password</label>
												<input type="password" name="password" value="" id="input-password" class="form-control">
												<div id="error1" style="color:red"></div>
											</div>
										</div>
										<input type="hidden" name="action" value="login_process" required="" readonly="">
										<div class="bottom-form">
											<a href="#" class="forgot">Forgotten Password</a>
											<input type="submit" value="Login" class="btn btn-default pull-right" />
										</div>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- //Main Container -->
		

		<!-- Footer Container -->
		<?php include("includes/footer-inner.php"); ?>
			<!-- //end Footer Container -->

		</div>
		<!-- Social widgets -->
		<!-- End Social widgets -->
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