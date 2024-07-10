<?php
 session_start();
  if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
    header("Location:login.php");
    exit();
  }
   include("dbconnection/dbconnection.php");
 include("model/certificate.php");
 $certificate = new Certificate();

 $id = $_GET['id'];
 $getCertificates = $certificate->getCertificateById($id);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Certificate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                    <h4 class="pull-left page-title"><?=$getCertificates['name']?><br></h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="index.php">Strength Champ</a></li>
                                        <li><a href="#">Pages</a></li>
                                        <li class="active">Certificate</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="invoice-title">
                                                    <br>
                                                    <h2 class="pull-right" style="color: #FF3361;">Strength Champ</h2>
                                                    <img src="assets/images/certificate/24_Hour_Fitness_logo.png" alt="logo" height="100">
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <address>
                                                            <strong><i>Certificate</i><br> OF RECOGNITION</strong>
                                                        </address>
                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <address>
                                                            <strong>Shipped To:</strong><br>
                                                             <?=$getCertificates['name']?><br>
                                                        </address>
                                                    </div>
                                                </div>
                                                
											</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h1 class="panel-title">This certificate is presented to 
                                                            <b><i><?=$getCertificates['name']?></i></b> 
                                                            <br> For completing the 
                                                           <b> <i><?=$getCertificates['year']?></i></b>  Gym Service in
                                                             <b><i><?=$getCertificates['crsname']?></i></b> from 
                                                             <b><i><?=$getCertificates['sdate'];?></i></b> to 
                                                             <b><i><?=$getCertificates['edate'];?></i></b>
                                                              <br> Such certificate is issued this 
                                                              <b><i><?=$getCertificates['issuedate'];?>.</i></b></h1>
                                                    </div>

                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                
																<tr>
                                                                    <td class="text-right" >151/7,Strength Camp Center(1st&2nd) Fooler, Greeen Road, Dhaka-1205, Bangladesh.<br>| Email: info@strengthchamp.com.|www.strengthchamp.com.bd <br>| Phone:01734845200, 01956850204</td><br>
                                                                </tr>



                                                                
                                                                    <div class="text-left">Date:..................................</div>
                                                                   <div class="text-right"> ________________________</div>
                                                                    <div class="text-right">Authorized Signature <br>COO,Strength Camp Limited</div><br>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="hidden-print">
                                                            <div class="pull-right">
                                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- end row -->
                                    </div> <!-- panel body -->
                                </div> <!-- end panel -->

                            </div> <!-- end col -->

                        </div>


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

        <script src="assets/js/app.js"></script>

    </body>
</html>