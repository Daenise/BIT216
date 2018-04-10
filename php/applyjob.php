<?php
session_start();
include '../php/dbConnection.php';

if (isset($_POST['applyJob'])) {
  $id = $_POST['jobID'];
  $email =  $_SESSION['email'];
  $status = "Pending";

  $sql = "INSERT INTO  application (jobID,partTimerEmail,jobStatus)
          VALUES ('$id', '$email','$status')";
  mysqli_query($connection, $sql);

  $sql2 = "UPDATE job
          SET status = 'Pending'
          WHERE jobID = '".$id."'";

  mysqli_query($connection, $sql2);

  header("Location: ../webpage/searchJob.php");

}
?>
