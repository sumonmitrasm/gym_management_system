<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/brand.php");
include("admin/model/product.php");
include("admin/model/category.php");
include("admin/model/review.php");
$productObj = new Product();
$brand = new Brand();
$category = new Category();
$review = new Review();
$getBrands = $brand->getBrands();
$product = $productObj->getProductById($_GET['id']);
$getReview = $review->getActiveReview($_GET['id']);
$categoryName = $category->getCategoryById($product['category_id']);

$productImages = $productObj->getProductsAdditionalImage($product['id']);
$getCategories = $category->getCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
    ============================================ -->
    <title><?=$product['name']?></title>
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
	<link href="css/footer1.css" rel="stylesheet">
	<link href="css/header1.css" rel="stylesheet">


	<!-- Include Libs & Plugins
	============================================ -->
	
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
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="js/themejs/application.js"></script>
	
</head>

<body class="res layout-subpage banners-effect-7">
	<div id="wrapper" class="wrapper-full ">
		<!-- Header Container  -->
		<?php include("includes/header-inner.php"); ?>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main type-1">
				<li class="home"><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li class="home"><a href="#"><?=$categoryName['name']?><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#"><?=$product['name']?></a></li>
			</ul>

			<div class="row">
				<!--Middle Part Start-->
				<div id="content " class="col-md-12 col-sm-12 type-1">

					<div class="product-view row">
						<div class="left-content-product col-lg-9 col-xs-12">
							<div class="row">
								<div class="content-product-left class-honizol col-md-6 col-sm-12 col-xs-12 ">
									<div class="large-image  ">
			<img itemprop="image" class="product-image-zoom" src="admin/uploads/product/<?=$product['image']?>" data-zoom-image="admin/uploads/product/<?=$product['image']?>" title="Bint Beef" alt="Bint Beef">
									</div>
									<div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider owl-carousel " data-nav='yes' data-loop="yes" data-margin="10" data-items_xs="2" data-items_sm="3" data-items_md="4">

								 <?php foreach($productImages as $key=>$image){ ?>
								 <a data-index="<?=$key?>" class="img thumbnail " data-image="admin/uploads/product/<?=$image['image_name']?>" title="Bint Beef">

									<img src="admin/uploads/product/<?=$image['image_name']?>" title="Bint Beef" alt="Bint Beef">
										</a>
                                  <?php } ?>
										
									</div>

								</div>

								<div class="content-product-right col-md-6 col-sm-12 col-xs-12">
									<div class="title-product">
										<h1><?=$product['name']?></h1>
									</div>
									<!-- Review -->
									<div class="box-review form-group">
										<div class="ratings">
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star gray"></i>
											</div>
										</div>

									</div>
									<div class="product-label form-group">
										<div class="stock">
											<span>Availability:</span> <span class="instock">In Stock</span>
											<p>SKU: <?=$product['sku']?></p>
										</div>
										<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
											<span class="price-new" itemprop="price"><?=$product['price']?></span>
											<span class="price-old"></span>
										</div>

									</div>
									<div id="product">
										<div class="form-group box-info-product">
											<div class="option quantity">
												<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
													<label>Qty:  </label>
													<input class="form-control" id="quantity" type="text" name="quantity" value="1">
													
													<span class="input-group-addon product_quantity_down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
													<span class="input-group-addon product_quantity_up"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
													
												</div>
											</div>
											<div class="info-product-right">
												<div class="cart">
													<input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('<?=$product['id']?>','<?=$product['price']?>', '<?=$product['name']?>', '<?=$product['image']?>');" data-original-title="Add to Cart">
												</div>
												<div class="add-to-links wish_comp">
													<ul class="blank list-inline">
														<li class="wishlist">
															<a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
															</a>
														</li>
														<li class="compare">
															<a class="icon" data-toggle="tooltip" title="" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
															</a>
														</li>
													</ul>
												</div>
											</div>


										</div>

									</div>
									<!-- end box info product -->
									<div class="share">
										<p>Share This:</p>
										<div class="share-icon">
											<ul>
												<li class="facebook"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li class="twitter"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li class="google"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li class="skype"><a href=""><i class="fa fa-skype" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>

								</div>					</div>
								<div class="row">
									<div class="col-sx-12">
										<div class="producttab ">
											<div class="tabsslider  col-xs-12">
												<ul class="nav nav-tabs">
													<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
													<li class="item_nonactive "><a data-toggle="tab" href="#tab-review">Reviews (<?php echo count($getReview); ?>)</a></li>
													<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
													<li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
												</ul>
												<div class="tab-content col-xs-12">
													<div id="tab-1" class="tab-pane fade active in">
														

                                                      <?=$product['description']?>
													</div>
													<div id="tab-review" class="tab-pane fade  in">
														 <?php foreach($getReview as $k=>$rValue) { ?>
															<div id="review-<?=$k?>">
																<table class="table table-striped table-bordered">
																	<tbody>
																		
																		<tr>
																			<td style="width: 50%;"><strong><?=$rValue['customer_name']?></strong></td>
																			<td class="text-right"><?=$rValue['created_at']?></td>
																		</tr>
																		<tr>
																			<td colspan="2">
																				<p><?=$rValue['review']?></p>
																				<div class="ratings">
																					<div class="rating-box">
																						<?php for($i=0; $i<$rValue['ratting']; $i++){ ?>
																						<i class="fa fa-star"></i>
																						<?php } ?>
																						
																					</div>
																				</div>
																			</td>
																		</tr>

																	</tbody>
																</table>
																<div class="text-right"></div>
															</div>
															<?php } ?>
					<form id="review_form" action="admin/controller/ReviweController.php" method="post">
															<h2 id="review-title">Write a review</h2>
															<div class="contacts-form">
																
																<div class="form-group"> <span class="icon icon-bubbles-2"></span>
					<textarea class="form-control" name="review" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}" id="txt-review">Your Review</textarea>
																</div> 
																<span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>

																<div class="form-group">
																	<b>Rating</b> <span>Bad</span>&nbsp;
																	<input type="radio" name="rating" value="1"> &nbsp;
																	<input type="radio" name="rating" value="2"> &nbsp;
																	<input type="radio" name="rating" value="3"> &nbsp;
																	<input type="radio" name="rating" value="4"> &nbsp;
																	<input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

																</div>
                                                                <input type="hidden" name="action" value="save_review">
                                                                <input type="hidden" name="product_id" id="product_id" value="<?=$product['id']?>">
                                                                <div class="buttons clearfix">
                                                                	<div id="message" style="color:red"></div>
                                                                	<button id="button-review" type="submit" class="btn buttonGray">Continue</button>
                                                                </div>
															</div>
														</form>
													</div>
													<div id="tab-4" class="tab-pane fade">
														<a href="#">Monitor</a>,
														<a href="#">Apple</a>				
													</div>
													<div id="tab-5" class="tab-pane fade">
														<p>Lorem ipsum dolor sit amet, consetetur
															sadipscing elitr, sed diam nonumy eirmod
															tempor invidunt ut labore et dolore
															magna aliquyam erat, sed diam voluptua.
															At vero eos et accusam et justo duo
															dolores et ea rebum. Stet clita kasd
															gubergren, no sea takimata sanctus est
															Lorem ipsum dolor sit amet. Lorem ipsum
															dolor sit amet, consetetur sadipscing
															elitr, sed diam nonumy eirmod tempor
															invidunt ut labore et dolore magna aliquyam
															erat, sed diam voluptua. </p>
															<p>At vero eos et accusam et justo duo dolores
																et ea rebum. Stet clita kasd gubergren,
																no sea takimata sanctus est Lorem ipsum
																dolor sit amet. Lorem ipsum dolor sit
																amet, consetetur sadipscing elitr.</p>
																<p>Sed diam nonumy eirmod tempor invidunt
																	ut labore et dolore magna aliquyam erat,
																	sed diam voluptua. At vero eos et accusam
																	et justo duo dolores et ea rebum. Stet
																	clita kasd gubergren, no sea takimata
																	sanctus est Lorem ipsum dolor sit amet.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Related Products -->
									

									<!-- end Related  Products-->


								</div>


							</div>
							<!--Middle Part End-->
						</div>
						<!-- //Main Container -->
						

						
						<!-- Footer Container -->
						<?php include("includes/footer-inner.php"); ?>
							</div>
							<!-- Social widgets -->
                         <?php include("includes/footer-bottom.php"); ?>	<!-- End Social widgets -->
                    <script type="text/javascript">
                         	$(document).ready(function(){
                                
                                $("#review_form").submit(function (){

                                    var product_id = $("#product_id").val();
                                    var review = $("#txt-review").val();
                                    var rating = $("input[name='rating']:checked"). val();
                                    
                                    $.ajax({
                                    	url:"ajax/review_rating.php",
                                    	type: "post",
                                    	data: {product_id: product_id, review: review, rating: rating},
                                    	success: function(response){

                                    		var data = JSON.parse(response);

                                    		if(data.code==202){
                                    			window.location = 'login.php';

                                    		}else{

                                    			$("#message").html(data.message);
                                    			$("#message").show();
                                    		}

                                    	}
                                    });
                                	return false;
                                });

                         	});
                         </script>
					</body>
					</html>