<?php
session_start();
include("admin/dbconnection/dbconnection.php");
include("admin/model/category.php");
include("admin/model/fooddetail.php");

$fooddetail = new Fooddetail();
$category = new Category();
$getCategories = $category->getCategories();
$getFooddetails = $fooddetail->getFooddetails();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Food Details</title>
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

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


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


<body class="common-home res layout-subpage banners-effect-7">
	<div id="wrapper" class="wrapper-full ">
		<!-- Header Container  -->
		<?php include("includes/header-inner.php"); ?>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="header-main">
				<li class="home"><a href="#">Home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>

				<li><a href="food.php">Food Details</a></li>
				

			</ul>
			<table id="myTable" class="display nowrap" style="width:100%">
        					<thead>
            					<tr> 
                					<th>Food Name</th>
                					<th>food Image</th>
                					<th>Food Measures</th>
                					<th>Food Weight</th>
                					<th>Food Calories</th>
            					</tr>
        					</thead>
        					<tbody>
           					 <?php foreach($getFooddetails as $key=>$fooddetail): ?>
           						 <tr>
                					<td><?php echo $fooddetail['name']; ?></td>
                					<td><img width="100" height="70" src="admin/uploads/product/<?php echo $fooddetail['image']; ?>" /> </td>
                					<td><?php echo $fooddetail['measures']; ?></td>
                					<td><?php echo $fooddetail['weight']; ?></td>
                					<td><?php echo $fooddetail['calories']; ?></td>
           						 </tr>
           					 <?php endforeach; ?>
       						 </tbody>
       					 <tfoot>
    				</table>

			</div>
									
										
									<!--Left Part Start -->
								
								<!--Middle Part End-->
							
							<!-- //Main Container -->


							<!-- Footer Container -->
										<!-- //Main Container -->


			<!-- Footer Container -->
			<!-- Footer Container -->
							<?php include("includes/footer-inner.php"); ?>
							</div>
							<!-- Social widgets -->
                         <?php include("includes/footer-bottom.php"); ?>
							<!-- Social widgets -->

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

							<!-------------------------------me------------------------>
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>


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