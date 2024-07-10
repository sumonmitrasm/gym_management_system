<?php
 session_start();
  if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
    header("Location:login.php");
    exit();
  }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>User::Update</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
	<?php
 include("dbconnection/dbconnection.php");
 include("model/users.php");
 $user = new Users();

 $id = $_GET['id'];

 $data = $user->getUserById($id);
 

?>


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
                                    <h4 class="pull-left page-title">User Update</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">eStore</a></li>
                                        <li><a href="users_list.php">Add</a></li>
                                        <li class="active">User Entry</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h3 class="panel-title">User Update</h3></div>
                                    <div class="panel-body">
                    <form class="form-horizontal" action="controller/UsersController.php" role="form" method="post">
                                            <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">E-Mail</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" name="email" class="form-control" placeholder="" value="<?php echo $data['email'];?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Phone</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="phone" value="<?php echo $data['phone']; ?>">
                                                </div>
                                            </div>

                                          
                                            
                                             <div class="form-group">
                                                <label class="col-sm-2 control-label">User Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="user_type" required>
                                <option value="">Select User-Type</option>
                                <option value="admin" <?php if($data["user_type"]=='admin') echo 'selected'; ?>>Admin</option>
                                <option value="manager"<?php if($data["user_type"]=='manager') echo 'selected'; ?>>Manager</option>
                                <option value="staff"<?php if($data["user_type"]=='staff') echo 'selected'; ?>>Staff</option>
                                <option value="member" <?php if($data["user_type"]=='member') echo 'selected'; ?>>Member</option>
                                <option value="trainer"<?php if($data["user_type"]=='trainer') echo 'selected'; ?>>Trainer</option>
                                                        
                                                </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status" required>
                                <option value="">Select Status</option>
                                <option value="Active" <?php if($data["status"]=='Active') echo 'selected'; ?>>Active</option>
                                <option value="Inactive" <?php if($data["status"]=='Inactive') echo 'selected'; ?>>Inactive</option>
                                
                                                        
                                                </select>
                                                </div>
                                            </div>
                                  <input type="hidden" name="action" value="update_user">
								  <input type="hidden" name="id" value="<?php echo $data['id']  ?>" required readonly="">
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

        <script src="assets/js/app.js"></script>

    </body>
    <?php unset($_SESSION['message']); ?>
</html>