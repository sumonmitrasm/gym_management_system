<?php
 session_start();

  require 'dbconnection/dbconnection.php';
  require 'model/members.php';
  

  $member = new Members();
 

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Member::Add</title>
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

        
        <style>
            #msg
            {
                width: 300px; height: 50px; font-family: tahomma;
                font-size: 90%;
                font-weight: bold; color: green;
                margin-left:39%; border: solid 1px green;
                padding: 1.5%;
            }

            #err
            {
                width: 300px; height: 50px; font-family: tahomma;
                font-size: 90%;
                font-weight: bold; color: red;
                margin-left:40%; border: solid 1px red;
                padding: 1.5%;
            }

        </style>
       <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

   <script>
        $(document).ready(function() {
            // $('#msg').delay(3500).fadeOut('slow',function(){
            //      window.location.href = "add_client_customer.php";
            // });
           $('#msg').delay(3500).fadeOut('slow');
           $('#err').delay(3500).fadeOut('slow');
    
        });

</script>
    </script>

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

                        <!--add client or customer form-->
                        <?php 
                            include_once 'formdesign/addcc.php';

                                //to view message
                              if (isset($_POST['btn_save'])) 
                              {  
                                 $member->id = $_POST['txt_id'];
                                 $member->email = $_POST['txt_email'];


                                 // check whether data already exists or not

                                 $count = $member->getDuplicateData();
                                 
                                 if($count==0)   
                                 {  
                                    $member->name = $_POST['txt_name'];
                                    $member->password = $_POST['txt_pass'];
                                    $member->course = $_POST['txt_course'];
                                    $member->batch = $_POST['txt_bat'];


                                    $msg = $member->saveMember();
                                    switch ($msg) {
                                      case true:
                                         echo "<br>
                                        <span id=\"msg\">Data Saved Successfully</span>";
                                        break;
                                      
                                      default:
                                         echo "<br>
                                         <span id=\"err\">Cannot Save Data</span>";
                                        break;
                                    } // switch statement
                                 } // duplicate if

                                else
                                {
                         
                                 echo "<br>
                                <span id=\"err\">Data Already Exist</span>";


                                 } // duplicate else
                            } // button save
                        ?>

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

<!--Summernote js-->
<script src="assets/plugins/summernote/summernote.min.js"></script>

<script src="assets/js/app.js"></script>
<script>



</body>
<?php unset($_SESSION['message']); ?>
</html>