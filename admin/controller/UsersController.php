<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/users.php");
$user = new Users();

switch($_POST['action']){

   case "login_process":

   $getUser = $user->getUserByEmail($_POST['email']);

      if(count($getUser) > 0 && $getUser['email']!='')
      	 {
      	 	if($getUser['password']==md5($_POST['password']))
      	 		    {

                    $_SESSION['user_id'] = $getUser['id'];
                    $_SESSION['email'] = $getUser['email'];
                    $_SESSION['name'] = $getUser['name'];
                    $_SESSION['user_type'] = $getUser['user_type'];
                    $_SESSION['status'] = $getUser['status'];
                    $_SESSION['col_name'] = $getUser['col_name'];

      	 		    header("Location:../index.php");

      	 		    }
      	 		    else{
      	 		    	 $_SESSION['message'] = "<div class='alert alert-danger'>Invalid Password!!</div>";
      	 	             header("Location:../../management_login.php");
      	 		    }
      	 }
      	 else{
             $_SESSION['message'] = "<div class='alert alert-danger'>Invalid E-Mail!!</div>";
      	 	header("Location:../../management_login.php");
      	 }

     break;

   case "logout_process":
      session_destroy();
      header("Location:../../management_login.php");
     break;

   case "save_user": 
       $user->name = $_POST['name'];
       $user->email = $_POST['email'];
       $user->password = md5($_POST['password']);
       $user->phone = $_POST['phone'];
       $user->user_type = $_POST['user_type'];
       $user->status = $_POST['status'];
       $status = $user->save();
        if($status)
        	 {
        	 	$_SESSION['message'] = "<div class='alert alert-success'>Save user successfully!</div>";
        	 }
        	 else{
        	 	$_SESSION['message'] = "<div class='alert alert-danger'>Unable to save!</div>";
        	 }

        	 header("Location:../add_user.php");

     break;

   case "update_user":
    $user->name = $_POST['name'];
	  $user->email = $_POST['email'];
	  $user->phone = $_POST['phone'];
	  $user->user_type = $_POST['user_type'];
	  $user->status = $_POST['status'];
	  $update = $user->update($_POST['id']);
	  
	   if($update)
        	 {
        	 	$_SESSION['message'] = "<div class='alert alert-success'>Update user successfully!</div>";
        	 }
        	 else{
        	 	$_SESSION['message'] = "<div class='alert alert-danger'>Unable to Update!</div>";
        	 }

        	 header("Location:../user_update.php?id=".$_POST['id']);

     break;

   case "delete_user":
		$user->id = $_REQUEST['id'];

		$delete = $user->delete();

		 if($delete){
		  $_SESSION['message'] = "<div class='alert alert-success'>User Delete successfully!</div>";
		 }
		 else{
		$_SESSION['message'] = "<div class='alert alert-danger'>Unable to Delete!</div>";
		 }
        	 header("Location:../users_list.php");

     break;

  default:

  header("Location:../management_login.php");

}





?>