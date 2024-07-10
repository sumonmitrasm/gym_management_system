<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/customer.php");
$customer = new Customer();

switch($_POST['action']){



  case "customer_login_process":
   
   $getCustomer = $customer->getCustomerByEmail($_POST['email']);

       if(count($getCustomer) > 0 && $getCustomer['password']==md5($_POST['password'])){

        $_SESSION['_customer_id'] = $getCustomer['id'];
        $_SESSION['_customer_name'] = $getCustomer['name'];
        $_SESSION['_customer_email'] = $getCustomer['email'];
        $_SESSION['_customer_phone'] = $getCustomer['phone'];
        $_SESSION['_customer_company'] = $getCustomer['company'];
        $_SESSION['_customer_address'] = $getCustomer['address'];
        $_SESSION['_customer_city'] = $getCustomer['city'];
        $_SESSION['_customer_country'] = $getCustomer['country'];
        $_SESSION['_customer_postcode'] = $getCustomer['postcode'];
          header("Location:../../my-account.php");
       }else{
        $_SESSION['message'] = "<div class='alert alert-danger'>Invalid Password!!</div>";
                       header("Location:../../login.php");
       }
  


   break;
   case "save_customer": 
   
  $customer->name = $_POST['name'];
  $customer->email = $_POST['email'];
  $customer->phone = $_POST['phone'];
  $customer->company = $_POST['company'];
  $customer->address = $_POST['address'];
  $customer->city = $_POST['city'];
  $customer->country = $_POST['country'];
  $customer->postcode = $_POST['postcode'];
	$customer->state = $_POST['state'];
  $customer->password = md5($_POST['password']);
	$customer->status = 1;
	$customer->news_subscribe = $_POST['newsletter'];
	$customer_id = $customer->save();
	
    if($customer_id)
        	 {
             
        	 	$_SESSION['message'] = "<div class='alert alert-success'>Thank you for your registration!!!</div>";

        	 }
        	 else{
        	 	$_SESSION['message'] = "<div class='alert alert-danger'>Unable to registration!</div>";
        	 }

        	 header("Location:../../register.php");

     break;

   case "update_customer":

  $customer->name = $_POST['name'];
  $customer->email = $_POST['email'];
  $customer->phone = $_POST['phone'];
  $customer->company = $_POST['company'];
  $customer->address = $_POST['address'];
  $customer->city = $_POST['city'];
  $customer->country = $_POST['country'];
  $customer->postcode = $_POST['postcode'];
  $customer->state = $_POST['state'];
  $customer->password = md5($_POST['password']);
  $customer->status = 1;
  $customer->news_subscribe = $_POST['news_subscribe'];
  $update = $customer->update($_POST['id']);
  
    if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update Profile successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to update!</div>";
           }

           header("Location:../../profile_update.php?id=".$_POST['id']);
   
     break;

   case "delete_customer":
   
     $delete = $customer->delete($_POST['id']);
	 
	 if($delete)
        	 {
        	 	$_SESSION['message'] = "<div class='alert alert-success'>Delete Customer successfully!</div>";
        	 }
        	 else{
        	 	$_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
        	 }

        	 header("Location:../customer_list.php");
	 
    
     break;

  default:

  header("Location:../../index.php");

}





?>