<?php
session_start();
include("../dbconnection/dbconnection.php");
include("../model/schedule.php");
$schedule = new Schedule();

switch($_POST['action']){

   case "save_schecdule":
        //print($_FILES);
       // exit();
        $schedule->name = $_POST['name'];
        $schedule->fname = $_POST['fname'];
        $schedule->fmtime = $_POST['fmtime'];
        $schedule->ftranner = $_POST['ftranner'];
        $schedule->fbatch = $_POST['fbatch'];
        $schedule->sname = $_POST['sname'];
        $schedule->smtime = $_POST['smtime'];
        $schedule->stranner = $_POST['stranner'];
        $schedule->sbatch = $_POST['sbatch'];
        $schedule->tname = $_POST['tname'];
        $schedule->tmtime = $_POST['tmtime'];
        $schedule->ttranner = $_POST['ttranner'];
        $schedule->tbatch = $_POST['tbatch'];
        $schedule->ffname = $_POST['ffname'];
        $schedule->ffmtime = $_POST['ffmtime'];
        $schedule->fftranner = $_POST['fftranner'];
        $schedule->ffbatch = $_POST['ffbatch'];
        $schedule->status = $_POST['status'];
        $save = $schedule->save();

        if ($save) {
          $_SESSION['message'] = "<div class='alert alert-success'>Save Class successfully!</div>";
        }else{
          $_SESSION['message'] = "<div class = 'alart alart-danger'>Unable to save</div>";
        }
        header("Location:../addsunday_shedule.php");
     break;

   case "update_secdule":
        $schedule->name = $_POST['name'];
        $schedule->fname = $_POST['fname'];
        $schedule->fmtime = $_POST['fmtime'];
        $schedule->ftranner = $_POST['ftranner'];
        $schedule->fbatch = $_POST['fbatch'];
        $schedule->sname = $_POST['sname'];
        $schedule->smtime = $_POST['smtime'];
        $schedule->stranner = $_POST['stranner'];
        $schedule->sbatch = $_POST['sbatch'];
        $schedule->tname = $_POST['tname'];
        $schedule->tmtime = $_POST['tmtime'];
        $schedule->ttranner = $_POST['ttranner'];
        $schedule->tbatch = $_POST['tbatch'];
        $schedule->ffname = $_POST['ffname'];
        $schedule->ffmtime = $_POST['ffmtime'];
        $schedule->fftranner = $_POST['fftranner'];
        $schedule->ffbatch = $_POST['ffbatch'];
        $schedule->status = $_POST['status'];


    $update = $schedule->update($_POST['id']);
    
     if($update)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Update Secdule successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to Update!</div>";
           }

           header("Location:../update_shedule.php?id=".$_POST['id']);
     break;

   case "delete_schedule":

  $delete = $schedule->delete($_POST['id']);
  if($delete)
           {
            $_SESSION['message'] = "<div class='alert alert-success'>Delete Class successfully!</div>";
           }
           else{
            $_SESSION['message'] = "<div class='alert alert-danger'>Unable to delete!</div>";
           }

           header("Location:../schedule_list.php");
     break;
  default:

  header("Location:../login.php");

}
?>