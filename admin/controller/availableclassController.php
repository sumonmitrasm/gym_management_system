<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/availableclass.php");
$availableclass = new Availableclass();

switch($_POST['action']){

   case "save_availableclass":
        //print($_FILES);
       // exit();
        $availableclass->name = $_POST['name'];
        $availableclass->image = $availableclass->uploadImage($_FILES); //fast bricket
        $availableclass->description = $_POST['description'];
        $availableclass->price = $_POST['price'];
        $availableclass->duration = $_POST['duration'];
        $availableclass->status = $_POST['status'];
        $save = $availableclass->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Save Class successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to save</div>";
        }
        header("Location:../add_availableclass.php");
     break;

   case "update_availableclass":
  
   $availableclass->name = $_POST['name'];

   $availableclass->description = $_POST['description'];
   $availableclass->price = $_POST['price'];
   $availableclass->duration = $_POST['duration'];
  
   $availableclass->status = $_POST['status'];
  
  $update = $availableclass->update($_POST['id']);
  if(!empty($_FILES['image']['name'])){

    $availableclass->image = $availableclass->uploadImage($_FILES, $_POST['name']);
    $update_image = $availableclass->updateImage($_POST['id']);
  }

    if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update Class successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
           }

           header("Location:../update_class.php?id=".$_POST['id']);
     break;

   case "delete_availableclass":

  $delete = $availableclass->delete($_POST['id']);
  if($delete)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Delete Class successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
           }

           header("Location:../class_list.php");
     break;
  default:

  header("Location:../login.php");

}
?>