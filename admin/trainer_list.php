<?php
session_start();
if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
header("Location:login.php");
exit();
}
include("dbconnection/dbconnection.php");
include("model/trainer.php");
$trainer = new Trainer();
$getTrainer = $trainer->getTrainer();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Class::List</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="Admin Dashboard" name="description" />
<meta content="ThemeDesign" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- DataTables -->
<link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

<!-- Top Bar Start -->
<?php include("includes/topbar.php"); ?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

<?php include("includes/sidebar.php"); ?>
<!-- Left Sidebar End -->

<!-- Start right Content here -->

<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Classes</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">eStore</a></li>
                    <li><a href="#">Classes</a></li>
                    <li class="active">List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">List of Classes</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>

                                    <tr>
									    <td>SL#</td>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Exprience Label</th>
                                        <th>image</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
            <?php foreach($getTrainer as $key=>$trainer): ?>
                    <tr>
					    <td><?php echo $key + 1; ?></td>
                        <td><?php echo $trainer['name']; ?></td>
                        <td><?php echo $trainer['email']; ?></td>
                        <td><?php echo $trainer['phone']; ?></td>
                        <td><?php echo $trainer['address']; ?></td>
                        <td><?php echo $trainer['experience_label']; ?></td>
                        <td><img width="100" height="70" src="uploads/product/<?php echo $trainer['image']; ?>" /> </td>
                        <td><?php echo $trainer['status'] ? 'Active' : 'Inactive' ; ?></td>
                        <td>
						<a href="update_trainer.php?id=<?=$trainer['id'] ?>" class="btn btn-info btn-sm">UPDATE</a>
						<form action="controller/TrainerController.php" method="post" style="display:inline-block">
						
						<input type="hidden" name="action" value="delete_trainer" />
						<input type="hidden" name="id" value="<?php echo $trainer['id']; ?>" />
						<input type="submit" name="submit" value="DELETE" class="btn btn-danger btn-sm" onclick="return confirm('Delete all data from this row.')" />
						
						</form>
						</td>
                     </tr>
                <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End Row -->


    


</div> <!-- container -->

</div> <!-- content -->

<?php include("includes/footer.php"); ?>

</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- Datatables-->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

<!-- Datatable init js -->
<script src="assets/pages/datatables.init.js"></script>

<script src="assets/js/app.js"></script>

</body>
<?php unset($_SESSION['message']); ?>
</html>