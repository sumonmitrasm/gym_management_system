<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/reviwe.php");

$review = new Review();

switch($_POST['action']){

   case "save_review":

       $review->product_id = $_POST['product_id'];
       $review->customer_id = 0;
       $review->customer_name = $_POST['name'];
       $review->review = $_POST['review'];
       $review->rating = $_POST['rating'];
       $review->status = 1;

	   $save = $review->save();
	
    if($save)
        	 {
        	 	$_SESSION['message'] = "<div class='alert alert-success'>Review successfully!</div>";
        	 }
        	 else{
        	 	$_SESSION['message'] = "<div class='alert alert-danger'>Unable to save!</div>";
        	 }

        	 header("Location:../../index.php");

     break;

   case "update_banner":

       $banner->name = $_POST['name'];
       $banner->status = $_POST['status'];
       $banner->category = $_POST['category'];

       $upbanner = $banner->update($_POST['id']);


   if(!empty($_FILES['logo']['name'])){

       $banner->logo = $banner->uploadLogo($_FILES);
      $update_logo = $banner->update_logo($_POST['id']);
      @unlink("../uploads/mainslider/".$_POST['old_logo']);
   }
   
   if($upbanner){
                $_SESSION['message'] = "<div class='alert alert-success'>Update brand successfully!</div>";
             }
             else{
                $_SESSION['message'] = "<div class='alert alert-danger'>Unable to Update!</div>";
             }
   header("Location:../update_banner.php?id=".$_POST['id']);
   
     break;

   case "delete_banner":
   
     $delete = $banner->delete($_POST['id']);
	 
	 if($delete)
        	 {
        	 	$_SESSION['message'] = "<div class='alert alert-success'>delete brand successfully!</div>";
        	 }
        	 else{
        	 	$_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
        	 }

        	 header("Location:../main_banner_list.php");
	 
    
     break;

  default:

  header("Location:../login.php");

}





?>