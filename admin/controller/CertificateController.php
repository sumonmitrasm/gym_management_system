<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/certificate.php");
$certificate = new Certificate();

switch($_POST['action']){

   case "save_certificate":
        //print($_FILES);
       // exit();
        $certificate->name = $_POST['name'];
        $certificate->image = $certificate->uploadImage($_FILES); //fast bricket
        $certificate->crsname = $_POST['crsname'];
        $certificate->year = $_POST['year'];
        $certificate->sdate = $_POST['sdate'];
        $certificate->edate = $_POST['edate'];
        $certificate->issuedate = $_POST['issuedate'];
        $certificate->status = $_POST['status'];
        $save = $certificate->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Save Certificate successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to save</div>";
        }
        header("Location:../add_certificate.php");
     break;

   case "update_certificate":

    $certificate->name = $_POST['name'];
        $certificate->crsname = $_POST['crsname'];
        $certificate->year = $_POST['year'];
        $certificate->sdate = $_POST['sdate'];
        $certificate->edate = $_POST['edate'];
        $certificate->issuedate = $_POST['issuedate'];
        $certificate->status = $_POST['status'];

  $update = $certificate->update($_POST['id']);
  if(!empty($_FILES['image']['name'])){

    $certificate->image = $certificate->uploadImage($_FILES, $_POST['name']);
    $update_image = $certificate->updateImage($_POST['id']);
  }

    if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update Certificate successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
           }

           header("Location:../update_certificate.php?id=".$_POST['id']);
     break;






case "delete_certificate":
  $delete = $certificate->delete($_POST['id']);
  if($delete)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Delete Certificate successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
           }

           header("Location:../certificate_list.php");
     break;
  default:

  header("Location:../login.php");

}
?>