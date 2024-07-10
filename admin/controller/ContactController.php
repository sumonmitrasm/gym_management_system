<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/contact.php");
$contact = new Contact();

switch($_POST['action']){

   case "save_contact":
        //print($_FILES);
       // exit();
        $contact->name = $_POST['name'];
        $contact->email = $_POST['email'];
        $contact->phone = $_POST['phone'];
        $contact->enquiry = $_POST['enquiry'];
        $save = $contact->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Quiry send successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to apply</div>";
        }
        header("Location:../../contact.php");
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