<?php
 session_start();
  if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
    header("Location:management_login.php");
    exit();
  }
  include("dbconnection/dbconnection.php");
  include("model/product.php");
  include("model/users.php");
  include("model/onlineapply.php");
  include("model/availableclass.php");
  $availableclass = new Availableclass();
  $onlineapplys = new Onlineapply();
  $user = new Users();
  $product = new Product();
  $getUsers = $user->getUsers();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gym management system</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
                                    <h4 class="pull-left page-title">Dashboard</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">Strength Champ</a></li>
                                        <li class="active">Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
<?php if($_SESSION['user_type']=='admin' or $_SESSION['user_type'] =='trainer'){ ?>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Products</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b><?= $product->getTotalProduct() ?></b></h3>
                                        
                                    </div>
                                </div>
                            </div>
							<div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Members</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b><?= $user->getTotaluser() ?></b></h3>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Online Applys</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b><?= $onlineapplys->getTotalapply() ?></b></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Tranning services</h4>
                                    </div>
                                     <div class="panel-body">
                                        <h3 class=""><b><?= $availableclass->getTotalclass() ?></b></h3>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <?php } ?>

                        <div class="row">
                           

                            

                            
                        </div>

<?php if($_SESSION['user_type']=='admin' or $_SESSION['user_type'] =='manager'){ ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Users Tables</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            
                                            <thead>
                                                  <tr>
                                                     <th>Name</th>
                                                     <th>E-Mail</th>
                                                     <th>Phone</th>
                                                     <th>User Type</th>
                                                     <th>Status</th>   
                                                  </tr>
                                            </thead>
                              <tbody>
                                <?php foreach($getUsers as $key=>$user): ?>
                                        <tr>
                                            <td><?php echo $user['name']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><?php echo $user['phone']; ?></td>
                                            <td><?php echo $user['user_type']; ?></td>
                                            <td><?php echo $user['status']; ?></td>
                                         </tr>
                                    <?php endforeach; ?>
                               </tbody>
                            </table>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->

<?php } ?>
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

        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>

        <script src="assets/pages/dashborad.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>