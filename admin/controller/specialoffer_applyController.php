<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/specialoffer_offer.php");
$specialofferapply = new Specialofferapply();

switch($_POST['action']){

   case "save_specialofferapplys":
        //print($_FILES);
       // exit();
        $specialofferapply->specialoffer_id = $_POST['specialoffer_id'];
        $specialofferapply->name = $_POST['name'];
        $specialofferapply->uname = $_POST['uname'];
        $specialofferapply->email = $_POST['email'];
        $specialofferapply->phone = $_POST['phone'];
        $specialofferapply->dob = $_POST['dob'];
        $save = $specialofferapply->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Successfully Apply!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to save</div>";
        }
        header("Location:../../special_offer_apply.php");
     break;

   case "update_specialoffers":
   $specialofferapply->specialoffer_id = $_POST['specialoffer_id'];
   $specialofferapply->uname = $_POST['uname'];
   $specialofferapply->email = $_POST['email'];
   $specialofferapply->phone = $_POST['phone'];
   $specialofferapply->dob = $_POST['dob'];
   $update = $specialofferapply->update($_POST['id']);
    if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Successfully Apply!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
           }

           header("Location:../../special_offer_apply.php?id=".$_POST['id']);
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