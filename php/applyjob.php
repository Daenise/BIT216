<?php
session_start();
include '../php/dbConnection.php';

if (isset($_POST['applyJob'])) {
  $id = $_POST['jobID'];
  $email =  $_SESSION['email'];
  $status = "Pending";

  $query = "INSERT INTO application(jobID,partTimerEmail,jobStatus)
          VALUES ('$id','$email','$status')";
  mysqli_query($connection, $query);

  echo $id;
  echo $email;
  echo $status;
}

?>
