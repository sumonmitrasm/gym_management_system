<?php
 session_start();


include  'dbconnection/dbconnection.php';
include 'model/attend.php';
$attend = new Attend;

$course = $batch =  "";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Attendance::Add</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>   
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
                margin-left:41%; border: solid 1px green;
                padding: 1.5%;
            }

            #err
            {
                width: 300px; height: 50px; font-family: tahomma;
                font-size: 30px;
                font-weight: bold; color: red;
                margin-left:30%; 
                padding: 1.5%;


            }
            td
            {
                height: 40px;
                
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
            <?php include("includes/edit_searchbar.php"); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <?php include("includes/sidebar.php"); ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <?php if($_SESSION['user_type']=='admin' or $_SESSION['user_type'] =='trainer'){ ?>
                <div class="content">
                    <div class="container">    

                    
                     <?php
                     
                            if(isset($_POST['btn_search']))
                            {
                                 $attend->date = $_POST['txt_search_date'];
                                 $attend->course = $_POST['txt_course'];
                                 $attend->batch =  $_POST['txt_bat'];
                             ?>   
                    <form action="" method="post">
                      <div class="table-responsive-sm">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0"  class="table table-borderless table-hover table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Member Name</th>
                                    <th scope="col">Member id</th>
                                    <th scope="col">Present / Absent</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                     $no = 0;   
                                     
                                     if($rst = $attend->getInfo()) {

                                     while($row = $rst->fetch(PDO::FETCH_NUM))
                                     {   

                                        if($no == 0)
                                        {
                                            echo '<tr style = "background-color:#FFFAF0">';
                                            $no = 1;   
                                        }
                                        else
                                        {
                                            echo '<tr style = "background-color:#F0F8FF">';
                                            $no = 0; 
                                        } 
                                    
                                            
                                        echo "<td> $row[0] </td>
                                              <td> $row[1] </td>
                                            <td>";
                            
                                                if($row[2] == 0)
                                                {
                                                   echo " <label class=\"btn btn-warning\">
                                                     <input type=\"radio\"  value=\"0\" name=\"status[$row[1]]\" checked> Absent</label> 

                                                     <label class=\"btn btn-success\">
                                                      <input type=\"radio\"  value=\"1\" name=\"status[$row[1]]\"> Present </label>";

                                                     
                                                  }
                                                  else
                                                  {
                                                      echo  "<label class=\"btn btn-warning\">
                                                     <input type=\"radio\"  value=\"0\" name=\"status[$row[1]]\"> Absent</label> 

                                                     <label class=\"btn btn-success\">
                                                      <input type=\"radio\"  value=\"1\" name=\"status[$row[1]]\" checked> Present </label>";


                                                  }
                                            echo "</td></tr>"; 
                                 } // end of while statement  

                                      
                         
                            } // end of if statement

                            

                            else
                                {
                                    echo "<span id=\"err\">Data does not exist</span>";
                                }


     
 
                            ?>
                            </tbody>
                        </table>
                         </div>
                          <?php if($no !=0) {?>
                         <input type="submit" value="Update Attendence" class="btn btn-danger btn-lg" name="btn_update"> <?php } ?>
                    </form>
                    
     
                    <?php } // end of main if statement ?

                        //code to insert data
                    
                       if (isset($_POST['btn_update'])) {

                             $att = $_POST['status'];

                               foreach ($att as $key => $value) {
                                   
                                   if ($value == 1)
                                    {
                                        $attend->id = $key;
                                        $attend->present_absent = $value;
                                       $msg = $attend->updateAttend();
                                    }
                                    else
                                    {
                                        $attend->id = $key;
                                        $attend->present_absent = $value;
                                       $msg = $attend->updateAttend();
                                    }
                                  } // end of foeach sratement

                            if($msg == true) echo '<span id="msg">Data Update Successfully!</span>';
                            else echo '<span id="err"> Cannot Update Data</span>';
                        } // end of if statemnt

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

jQuery(document).ready(function(){
$('.wysihtml5').wysihtml5();


});
</script>

</body>
<?php unset($_SESSION['message']); ?>
</html>