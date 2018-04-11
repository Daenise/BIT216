<?php
session_start();
include '../php/dbConnection.php';

$jobID = $_POST['hidden1'];
$partTimerMail = $_POST['hidden2'];

if($_POST['application'] == 'Accept'){

  $sql = "UPDATE application
          SET jobStatus = 'Accepted'
          WHERE application.partTimerEmail = '".$partTimerMail."'
          AND application.jobID = '".$jobID."'";

  mysqli_query($connection, $sql);
  echo mysqli_error($connection);

  header("Location: ../webpage/ependingApplication.php");



}

else if(['application'] == 'Reject'){

  $sql2 = "UPDATE application
          SET jobStatus = 'Rejected'
          WHERE application.partTimerEmail = '".$partTimerMail."'
          AND application.jobID = '".$jobID."'";

  mysqli_query($connection, $sql2);

  header("Location: ../webpage/ependingApplication.php");

}


?>
