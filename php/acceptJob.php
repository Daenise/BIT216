<?php
session_start();
include '../php/dbConnection.php';

$jobID = $_POST['hidden1'];
$partTimerMail = $_POST['hidden2'];

if($_POST['application'] == 'Accept'){

  $sql = "UPDATE application
          SET jobStatus = 'Accepted'
          WHERE application.partTimerEmail = '".$partTimerMail."'";

  mysqli_query($connection, $sql);
  echo mysqli_error($connection);



}

else if(['application'] == 'Reject'){

  $sql2 = "UPDATE application
          SET jobStatus = 'Rejected'
          WHERE application.partTimerEmail = '".$partTimerMail."'";

  mysqli_query($connection, $sql2);

}


?>
