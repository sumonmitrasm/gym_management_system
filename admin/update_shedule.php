
<?php
 session_start();
  if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
    header("Location:login.php");
    exit();
  }
  include("dbconnection/dbconnection.php");
  include("model/schedule.php");
  $schedule = new Schedule();
  $getSchedule = $schedule->getSchedule();
  $getSchedules = $schedule->getScheduleById($_GET['id']);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Schedule::Add</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />
        <!--bootstrap-wysihtml5-->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css">

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
                <?php if($_SESSION['user_type']=='admin'){ ?>
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-header-title">
                                    <h4 class="pull-left page-title">Schedule</h4>
                                    <ol class="breadcrumb pull-right">
                                        
                                        <li><a href="product_list.php">See Schedule List</a></li>
                                        <li class="active">Schedule Entry</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h3 class="panel-title">Add Schedule</h3></div>
                                    <div class="panel-body">
                    <form class="form-horizontal" action="controller/ScheduleController.php" role="form" method="post" enctype="multipart/form-data">
                                            <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Day Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" id="name" value="<?=$getSchedules['name'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">First Service Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="fname" id="name" value="<?=$getSchedules['fname'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Morning Time</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="fmtime" id="roll" value="<?=$getSchedules['fmtime'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">First Tranner</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ftranner" id="email"  value="<?=$getSchedules['ftranner'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">First Batch</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="fbatch" id="email"  value="<?=$getSchedules['fbatch'];?>" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Secound Service Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="sname" id="name" value="<?=$getSchedules['sname'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Medel Morng Time</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="smtime" id="roll" value="<?=$getSchedules['smtime'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Secound Tranner</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="stranner" id="email"  value="<?=$getSchedules['stranner'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Secound Batch</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="sbatch" id="email"  value="<?=$getSchedules['sbatch'];?>" required>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Thied Service Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="tname" id="name" value="<?=$getSchedules['tname'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Evening Time</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="tmtime" id="roll" value="<?=$getSchedules['tmtime'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Third Tranner</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ttranner" id="email"  value="<?=$getSchedules['ttranner'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> Thied Batch</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="tbatch" id="email"  value="<?=$getSchedules['tbatch'];?>" required>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Fourth Service Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ffname" id="name" value="<?=$getSchedules['ffname'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Late Evening Time</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ffmtime" id="roll" value="<?=$getSchedules['ffmtime'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Fourth Tranner</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="fftranner" id="email"  value="<?=$getSchedules['fftranner'];?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Fourth Batch</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ffbatch" id="email"  value="<?=$getSchedules['ffbatch'];?>" required>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Status</label>
                                                <div class="col-sm-10">
                                                <select class="form-control" name="status" required>
                                                    <option value="">Select Status</option>
                                                    <option value="1"<?php if($getSchedules['status']==1) echo "selected";?>>Active</option>
                                                    <option value="0"<?php if($getSchedules['status']==0) echo "selected"; ?>>Inactive</option>      
                                                </select>
                                            </div>
                                  <input type="hidden" name="action" value="update_secdule">
                                  <input type="hidden" name="id" value="<?=$getSchedules['id']?>">
                                      <div class="form-group m-b-0">
                                                <div class="col-sm-offset-2 col-sm-9">
                                                  <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->


                        


                    </div> <!-- container -->

                </div> <!-- content -->
                <?php }else{
                    ?>
                    <div class="content">Permission Denied!!!</div>
                    <?php 
                } ?>
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



          <!-- Wysihtml js -->
        <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

        <<!--Summernote js-->
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <script src="assets/js/app.js"></script>
        <script>

            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();

            
            });
        </script>

    </body>
    <?php unset($_SESSION['message']); ?>
</html>