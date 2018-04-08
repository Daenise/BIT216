<?php
session_start();
include '../php/dbConnection.php';

if (isset($_POST['applyJob'])) {
  $id = $_POST['jobID'];
  $email =  $_SESSION['email'];
  $status = "Pending";

  $sql = "INSERT INTO application (jobID,partTimerEmail,jobStatus)
          VALUES ('$id','$email','$status')";
  mysqli_query($connection, $sql);

  //header('location: ../webpage/searchJob.php');
  mysqli_error($con);

}


?>
