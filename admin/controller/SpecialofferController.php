<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/specialoffers.php");
$specialoffer = new Specialoffer();

switch($_POST['action']){

   case "save_specialoffers":
        //print($_FILES);
       // exit();
        $specialoffer->name = $_POST['name'];
        $specialoffer->image = $specialoffer->uploadImage($_FILES); //fast bricket
        $specialoffer->description = $_POST['description'];
        $specialoffer->price = $_POST['price'];
        $specialoffer->lassprice = $_POST['lassprice'];
        $specialoffer->duration = $_POST['duration'];
        $specialoffer->status = $_POST['status'];
        $save = $specialoffer->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Save Special Offer successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to save</div>";
        }
        header("Location:../add_special_offer.php");
     break;

   case "update_specialoffer":
   $specialoffer->name = $_POST['name'];
   $specialoffer->description = $_POST['description'];
   $specialoffer->price = $_POST['price'];
   $specialoffer->lassprice = $_POST['lassprice'];
   $specialoffer->duration = $_POST['duration'];
   $specialoffer->status = $_POST['status'];
   
  $update = $specialoffer->update($_POST['id']);
  if(!empty($_FILES['image']['name'])){
    $specialoffer->image = $specialoffer->uploadImage($_FILES, $_POST['name']);
    $update_image = $specialoffer->updateImage($_POST['id']);
  }
    if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update Special offer successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
           }

           header("Location:../update_special_offer.php?id=".$_POST['id']);
     break;

   case "delete_specialoffer":

  $delete = $specialoffer->delete($_POST['id']);
  if($delete)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Delete Class successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
           }

           header("Location:../offer_list.php");
     break;
  default:

  header("Location:../login.php");

}
?>