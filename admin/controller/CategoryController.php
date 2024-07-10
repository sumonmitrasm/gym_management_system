<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/category.php");
$category = new Category();

switch($_POST['action']){

   case "save_category": 
   
    $category->name = $_POST['name'];
  $category->parent_id = $_POST['parent_id'];
  $category->status = $_POST['status'];
  $save = $category->save();
  
   if($save)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Save category successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to save!</div>";
           }

           header("Location:../add_category.php");

     break;

   case "update_category":
    $category->name = $_POST['name'];
    $category->parent_id = $_POST['parent_id'];
    $category->status = $_POST['status'];
    $update = $category->update($_POST['id']);
    
     if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update category successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to Update!</div>";
           }

           header("Location:../update_category.php?id=".$_POST['id']);

     break;

   case "delete_category":
		$category->id = $_REQUEST['id'];

		$delete = $category->delete();

		 if($delete){
		  $_SESSION['message'] = "<div class='alert alert-success'> Category Delete successfully!</div>";
		 }
		 else{
		$_SESSION['message'] = "<div class='alert alert-danger'>Category to Delete!</div>";
		 }
        	 header("Location:../category_list.php");

     break;

  default:

  header("Location:../login.php");

}





?>