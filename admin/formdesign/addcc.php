<?php 
    $course = $batch="";
   if(isset($_POST['btn_save']))
   {
        $_SESSION['course'] = $_POST['txt_course'];
        $course = $_SESSION['course'];

        $_SESSION['batch'] = $_POST['txt_bat'];
        $batch = $_SESSION['batch'];
   }
 ?>

<br>
<form class="form-horizontal" role="form" method="post" action="">

    <div class="form-group">
        <label class="col-md-2 control-label">Full name</label>
            <div class="col-md-8">
                <input type="text" name="txt_name" id="txt_name" class="form-control" placeholder="Enter your name here" required />
            </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Client/Customer ID</label>
            <div class="col-md-8">
                <input type="number" name="txt_id" class="form-control" placeholder="Enter your id " required />
            </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Email</label>
            <div class="col-md-8">
                <input type="email" name = "txt_email" class="form-control" placeholder="Enter email here" required>
            </div>
    </div>
     
    <div class="form-group">
        <label class="col-md-2 control-label">Password</label>
            <div class="col-md-8">
                <input type="password" name="txt_pass" class="form-control" placeholder="password" required>
            </div>
    </div>

     <div class="form-group">
        <label class="col-md-2 control-label">Course</label>
            <div class="col-md-8">
                <input type="text" name="txt_course" class="form-control" placeholder="Enter your course here" required value="<?php echo $course ;?>">
            </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Batch</label>
            <div class="col-md-8">
                <input type="text" name="txt_bat" class="form-control" placeholder="Enter your batch here" required value="<?php echo $batch ; ?>">
            </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-5"></div> 
        <div class="col-md-5">      
         <input type="submit" value="Save" name="btn_save" id="btn_save" class="btn btn-danger btn-lg"/>
         </div>

    </div>

</form>
<br>