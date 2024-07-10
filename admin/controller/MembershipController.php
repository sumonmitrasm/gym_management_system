<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/membership_fondpage.php");
$membership = new Membership();

switch($_POST['action']){

   case "save_membership":
        //print($_FILES);
       // exit();
        $membership->network_age = $_POST['network_age'];
        $membership->silver_rate = $_POST['silver_rate'];
        $membership->gold_rate = $_POST['gold_rate'];
        $membership->platinium_rate = $_POST['platinium_rate'];
        $membership->status = $_POST['status'];
        $save = $membership->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Save Membership successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to save</div>";
        }
        header("Location:../add_membership_fondpage.php");
     break;

   case "update_membership":
        $membership->network_age = $_POST['network_age'];
        $membership->silver_rate = $_POST['silver_rate'];
        $membership->gold_rate = $_POST['gold_rate'];
        $membership->platinium_rate = $_POST['platinium_rate'];
        $membership->status = $_POST['status'];
        $update = $membership->update($_POST['id']);
        if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update Membership successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
           }

           header("Location:../update_membership_fondpage.php?id=".$_POST['id']);
     break;

   case "delete_membership":

  $delete = $membership->delete($_POST['id']);
  if($delete)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Delete Membership successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
           }

           header("Location:../membership_fondpage.php");
     break;
  default:

  header("Location:../login.php");

}
?>