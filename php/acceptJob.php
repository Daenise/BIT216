<?php
session_start();
include '../php/dbConnection.php';

$jobID = $_POST['hidden1'];
$partTimerMail = $_POST['hidden2'];
$employerEmail = $_POST['hidden4'];

if($_POST['application'] == 'Accept'){

  $sql = "UPDATE application
          SET jobStatus = 'Accepted'
          WHERE application.partTimerEmail = '".$partTimerMail."'
          AND application.jobID = '".$jobID."'";

  $sql2 = "UPDATE job
          SET job.partTimerEmail = '".$partTimerMail."'
          WHERE job.jobID = '".$jobID."'";

  $sql3 = "UPDATE application
            SET application.employerEmail = '".$employerEmail."'
            WHERE application.partTimerEmail = '".$partTimerMail."'
            AND application.jobID = '".$jobID."'";

  mysqli_query($connection, $sql);
  mysqli_query($connection, $sql2);
  mysqli_query($connection, $sql3);
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
