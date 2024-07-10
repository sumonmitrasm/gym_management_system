<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/brand.php");
include("admin/model/product.php");
include("admin/model/category.php");
include("admin/model/order.php");
include("admin/model/availableclass.php");
$availableclass = new Availableclass();
$product = new Product();
$brand = new Brand();
$category = new Category();
$order = new Orders();
$getBrands = $brand->getBrands();
$getProduct = $product->getProducts();
$getCategories = $category->getCategories();
$getOrder = $order->getOrdersById($_GET['id']);
$getOrderDetails = $order->getOrderDetailsByOrderId($_GET['id']);
$getAvailableclas = $availableclass->getAvailableclasses();

?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic page needs
============================================ -->
<title>Destino - Advanced & High Customizable eCommerce HTML5/CSS3 Theme</title>
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

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">

<!-- Libs CSS
============================================ -->
<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="js/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
<link href="js/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
<link href="css/themecss/lib.css" rel="stylesheet">
<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

<!-- Theme CSS
============================================ -->
<link href="css/themecss/so_megamenu.css" rel="stylesheet">
<link href="css/themecss/so-categories.css" rel="stylesheet">
<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
<link id="color_scheme" href="css/theme.css" rel="stylesheet">
<!-- <link href="css/responsive.css" rel="stylesheet"> -->
<link id="color_scheme" href="css/theme.css" rel="stylesheet">
<link href="css/footer1.css" rel="stylesheet">
<link href="css/header1.css" rel="stylesheet">




</head>

<body class="common-home res layout-subpage banners-effect-7">
<div id="wrapper" class="wrapper-full ">
<!-- Header Container  -->
<?php include("includes/header-inner.php"); ?>
<!-- //Header Container  -->
<!-- Main Container  -->
<div class="main-container container">
<ul class="header-main">
<li class="home"><a href="#">Home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>

<li><a href="#">Class Details</a></li>

</ul>

<div class="row">

<!--Left Part End -->

<!--Middle Part Start-->
<div id="content" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
<div class="blog-header">
<h3 class="modtitle">Class Details</h3>
</div>
<div class="blog-listitem">
<div class="blog-item ">
<div class="itemBlogImg ">
<div class="article-image ">
<div>
<a class="popup-gallery" href="img/demo/blog/blog-1.jpg"><img src="img/demo/blog/blog-1.jpg" alt="Kire tuma demonstraverunt lector"></a>
</div>
</div>
</div>
<div class="itemBlogContent ">
<div class="article-title">
<h4>
<a href="blog-detail.html">Kire Tuma Demonstraverunt Lector</a>
</h4>

</div>
<div class="article-description">
Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi vel dignissim. Morbi mollis elit ipsum, a feugiat lectus gravida non. Aenean molestie justo sed aliquam euismod. Maecenas laoreet b								    </div>
<div class="blog-meta">
<span class="comment_count">
	<a href="#"><i class="fa fa-comments" aria-hidden="true"></i>0</a>
</span>
<span class="author">
	<a href="blog-detail.html">View more
		<i class="fa fa-angle-double-right" aria-hidden="true"></i>
	</a>
</span>
</div>
<div class="share">
<p>Share This:</p>
<div class="share-icon">
	<ul>
		<li class="facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li class="google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		<li class="skype"><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>

	</ul>
</div>
</div>
</div>
</div>
<div class="blog-listitem-bottom">
<p>item 01 - 05 of 47 total</p>
<ul class="pagination">
<li class="active"><span>1</span></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">&gt;</a></li>
</ul>
</div>


</div>
</div>
<!--Left Part Start -->



</div>
<!--Middle Part End-->
</div>
<!-- //Main Container -->


<!-- Footer Container -->



<!-- Social widgets -->
<?php include("includes/footer-inner.php"); ?>
<!-- //end Footer Container -->

</div>
<!-- Social widgets -->
<?php include("includes/footer-bottom.php"); ?>		<!-- End Social widgets -->


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