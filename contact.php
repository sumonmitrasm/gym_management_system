<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/category.php");
include("admin/model/galary.php");
$galary = new Galary();
$category = new Category();
$getCategories = $category->getCategories();
$getGalary = $galary->getGalary();
?>

<script language="javascript">
        var flag=0;
          
        function name()
        {
            namecheck=registrationform.name.value;
            if(namecheck=="")
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
                document.getElementById("error2").innerHTML="Please Enter Your Phone Here!";
                flag=1;
            }
        }
         function enquiry()
        {
           enquirycheck=registrationform.enquiry.value;
            if(enquirycheck=="")
            {
                document.getElementById("error3").innerHTML="Please Enter Your Enquiry Here!";
                flag=1;
            }
        }
		 function check(form)
        {
            flag=0;
         
            name();
            email();
            phone();
            enquiry();
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
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.rtl.min.css">
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
				<li class="home"><a href="index.php">Contruct   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li>  Contact us</li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<div class="page-title">
						<h2>Contact Us</h2>
					</div>
					<?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
					


					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14607.408118348212!2d90.3822483!3d23.7526555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32051f5a37ac6420!2sDaffodil%20International%20Academy!5e0!3m2!1sen!2sbd!4v1588707774185!5m2!1sen!2sbd" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen></iframe>
					

					<div class="info-contact clearfix">
						<div class="col-lg-4 col-sm-4 col-xs-12 info-store">
							<div class="row">
								<div class="name-store">
									<h3>Your Store</h3>
								</div>
								<address>
									<div class="address clearfix form-group">
										<div class="icon">
											<i class="fa fa-home"></i>
										</div>
										<div class="text">My Institute, 42 avenue des institute in bangladesh.</div>
									</div>
									<div class="phone form-group">
										<div class="icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="text">Phone : 01734845200</div>
									</div>
									<div class="comment text-justify">             
										The only issue I have, is that, well, I'm fat. I'm tall and fat, and people constantly assume that no matter what I am working on (mostly powerlifting and other strength stuff - I want to build muscle, I don't care if I lose weight), that openly commenting on my weight is okay.
                                        I get a lot of the sort of compliments like "oh I can tell you've lost so much, you look great", "those pants fit you well, you can see how you've lost inches" etc. and I understand people mean well, and they're trying to be supportive.
                                        The thing is, though, those statements are proveably false. I weigh more now than I did before (yay muscle mass), and my pants etc are the same size they were before I started this journey. I know people are trying to keep me positive because they think I'm there for different reasons than I am, but I don't need that sort of help. I'd rather celebrate my strength.
									</div>
								</address>
							</div>
						</div>

						<div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
							<form name='registrationform' action="admin/controller/ContactController.php" method="post" enctype="multipart/form-data" class="form-horizontal" onSubmit="return check(this)">
								
								<fieldset>
									<legend>Contact Form</legend>
									<div class="form-group required">
										<label class="col-sm-2 control-label" for="input-name">Your Name</label>
										<div class="col-sm-10">
											<input type="text" name="name" value="" id="input-name" class="form-control">
											<div id="error0" style="color:red"></div><br>
										</div>
									</div>
									<div class="form-group required">
										<label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
										<div class="col-sm-10">
											<input type="text" name="email" value="" id="input-email" class="form-control">
											<div id="error1" style="color:red"></div><br>
										</div>
									</div>
									<div class="form-group required">
										<label class="col-sm-2 control-label" for="input-email">Phone  Number</label>
										<div class="col-sm-10">
											<input type="text" name="phone" value="" id="input-phone" class="form-control">
											<div id="error2" style="color:red"></div><br>
										</div>
									</div>
									<div class="form-group required">
										<label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
										<div class="col-sm-10">
											<textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
											<div id="error3" style="color:red"></div><br>
										</div>
									</div>
								</fieldset>
								<input type="hidden" name="action" value="save_contact">
								<div class="buttons">
									<div class="pull-right">
										<button class="btn btn-default buttonGray" type="submit">
											<span>Submit</span>
										</button>
									</div>
								</div>
							</form>
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