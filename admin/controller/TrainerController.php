<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/trainer.php");
$trainer = new Trainer();

switch($_POST['action']){

   case "save_trainer":
        //print($_FILES);
       // exit();
        $trainer->name = $_POST['name'];
        $trainer->email = $_POST['email'];
        $trainer->phone = $_POST['phone'];
        $trainer->address = $_POST['address'];
        $trainer->experience_label = $_POST['experience_label'];
        $trainer->image = $trainer->uploadImage($_FILES); //fast bricket
        $trainer->status = $_POST['status'];
        $save = $trainer->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Save Trainer successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to save</div>";
        }
        header("Location:../add_trainer.php");
     break;

   case "update_trainer":
  
        $trainer->name = $_POST['name'];
        $trainer->email = $_POST['email'];
        $trainer->phone = $_POST['phone'];
        $trainer->address = $_POST['address'];
        $trainer->experience_label = $_POST['experience_label'];
        $trainer->status = $_POST['status'];
        $update = $trainer->update($_POST['id']);
  if(!empty($_FILES['image']['name'])){

    $trainer->image = $trainer->uploadImage($_FILES, $_POST['name']);
    $update_image = $trainer->updateImage($_POST['id']);
  }

    if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update Tranner successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
           }

           header("Location:../update_trainer.php?id=".$_POST['id']);
     break;

   case "delete_trainer":

  $delete = $trainer->delete($_POST['id']);
  if($delete)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Delete Tranner successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
           }

           header("Location:../trainer_list.php");
     break;
  default:

  header("Location:../login.php");

}
?>