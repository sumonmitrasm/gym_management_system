<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/galary.php");
$galary = new Galary();

switch($_POST['action']){

   case "save_galary":
        //print($_FILES);
       // exit();
        $galary->image = $galary->uploadImage($_FILES); //fast bricket
        $galary->status = $_POST['status'];
        $save = $galary->save();
        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Save Galary successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to save</div>";
        }
        header("Location:../add_galary.php");
     break;

   case "update_galary":
   $galary->status = $_POST['status'];
  $update = $galary->update($_POST['id']);
  if(!empty($_FILES['image']['name'])){

    $galary->image = $galary->uploadImage($_FILES, $_POST['name']);
    $update_image = $galary->updateImage($_POST['id']);
  }

    if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update Galary successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
           }

           header("Location:../update_galary.php?id=".$_POST['id']);
     break;

   case "delete_galary":

  $delete = $galary->delete($_POST['id']);
  if($delete)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Delete Galary successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
           }

           header("Location:../galary_list.php");
     break;
  default:

  header("Location:../login.php");

}
?>