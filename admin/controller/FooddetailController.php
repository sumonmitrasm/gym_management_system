<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/fooddetail.php");
$fooddetail = new Fooddetail();

switch($_POST['action']){

   case "save_food":
        //print($_FILES);
       // exit();
        $fooddetail->name = $_POST['name'];
        $fooddetail->image = $fooddetail->uploadImage($_FILES); //fast bricket
        $fooddetail->measures = $_POST['measures'];
        $fooddetail->weight = $_POST['weight'];
        $fooddetail->calories = $_POST['calories'];
        $fooddetail->status = $_POST['status'];
        $save = $fooddetail->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Save Food successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to save!</div>";
        }
        header("Location:../add_fooddetails.php");
     break;

   case "update_food":
        $fooddetail->name = $_POST['name'];
        $fooddetail->measures = $_POST['measures'];
        $fooddetail->weight = $_POST['weight'];
        $fooddetail->calories = $_POST['calories'];
        $fooddetail->status = $_POST['status'];
  
  $update = $fooddetail->update($_POST['id']);
  if(!empty($_FILES['image']['name'])){

    $fooddetail->image = $fooddetail->uploadImage($_FILES, $_POST['name']);
    $update_image = $fooddetail->updateImage($_POST['id']);
  }

    if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update Food successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
           }

           header("Location:../update_foods.php?id=".$_POST['id']);
     break;

   case "delete_food":

  $delete = $fooddetail->delete($_POST['id']);
  if($delete)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Delete Food Successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
           }

           header("Location:../fooddetails_list.php");
     break;
  default:

  header("Location:../login.php");

}
?>