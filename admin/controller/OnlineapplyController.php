<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/onlineapply.php");
$onlineapplys = new Onlineapply();

switch($_POST['action']){

   case "save_onlineapplys":
        //print($_FILES);
       // exit();
        $onlineapplys->name = $_POST['name'];
        $onlineapplys->email = $_POST['email'];
        $onlineapplys->phone = $_POST['phone'];
        $onlineapplys->hight = $_POST['hight'];
        $onlineapplys->weight = $_POST['weight'];
        $onlineapplys->dob = $_POST['dob'];
        $onlineapplys->image = $onlineapplys->uploadImage($_FILES);//fast bricket
        $onlineapplys->course_name = $_POST['course_name'];
        $save = $onlineapplys->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Online apply successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to apply</div>";
        }
        header("Location:../../online_apply.php");
     break;

  
   case "delete_online_apply":

  $delete = $onlineapplys->delete($_POST['id']);
  if($delete)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Delete Class successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
           }

           header("Location:../onlineapply_list.php");
     break;
  default:

  header("Location:../login.php");

}
?>