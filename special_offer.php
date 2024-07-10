<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/category.php");
include("admin/model/specialoffers.php");
$specialoffer = new Specialoffer();
$getSpecialoffer = $specialoffer->getSpecialoffer();
$category = new Category();
$getCategories = $category->getCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gym Management System:: Special offer</title>
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
	<link rel="stylesheet" type="text/css" href="css/category.css">

	
</head>

<body class="res layout-subpage banners-effect-1">
	<div id="wrapper" class="wrapper-full ">
		<!-- Header Container  -->
		<?php include("includes/header-inner.php"); ?>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main">
				<li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li>Special Offer</li>
			</ul>

			<div class="row">
				

				<!--Middle Part Start-->
				<div id="content" class="col-md-9 col-sm-8 type-3">
					<div class="products-category">
						<!-- Filters -->
						
						<div class="module latest-product titleLine">
				<!-- //end Filters -->
							<!--changed listings-->
							<div class="products-list grid">
								<?php foreach($getSpecialoffer as $value){ 
									if($value['status']==1){
									?>
								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="#" class="product-img"><img src="admin/uploads/product/<?=$value["image"]?>" alt="<?php echo $value['name']; ?>"></a>
												<!--Sale Label-->
											</div>
											<div class="caption">
												<h3><b><p style="color: #FF9633;"><?=$value['name']?></p></b></h3>
												<h4><p align="justify"><?=$value['description']?></p></h4>
												<hr>
												<h4><b><p align="justify" style="color: #0EF3D1;">Course Duration: <br><?=$value['duration']?></p></b></h4>
												<hr>
												<h4><p align="justify">Training Cost: <br>TK.<?=$value['price']?></p>
												</h4>
												<h4><p align="justify">Lass Cost: <br>TK.<?=$value['lassprice']?></p></h4>
												<div class="product-image-container  second_img ">
												
												<!--Sale Label-->
											</div>		
											</div>
											
										</div>
										<a href="special_offer_apply.php?id=<?=$value['id'] ?>" class="btn btn-info btn-sm pull-right">Apply</a>
									</div>
								</div>
								<?php }} ?>
							</div>				<!--// End Changed listings-->
							<!-- Filters -->
							<div class="product-filter filters-panel">
								<div class="row">
									<div class="col-md-5 visible-lg">
										<div class="view-mode">
											<div class="list-view">
												<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i></button>
												<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
											</div>
										</div>
									</div>
									<div class="short-by-show form-inline text-right col-lg-7 col-sm-12 col-xs-12">
										<div class="text">
											<p>item 01 - 16 of 47 total</p>
										</div>
										<div class="box-pagination text-right">
											<ul class="pagination">
												<li class="active"><span>1</span></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- //end Filters -->

						</div>

					</div>


				</div>
				<!--Middle Part End-->
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

							<script type="text/javascript" src="js/themejs/homepage.js"></script>
							<script type="text/javascript" src="js/themejs/toppanel.js"></script>
							<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
							<script type="text/javascript" src="js/themejs/addtocart.js"></script>
							<script type="text/javascript" src="js/themejs/application.js"></script>
							<script type="text/javascript"><!--
							// Check if Cookie exists
							if($.cookie('display')){
							view = $.cookie('display');
							}else{
							view = 'grid';
							}
							if(view) display(view);
							//--></script> 
							</body>
							</html>