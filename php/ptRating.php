<?php
session_start();
include 'dbConnection.php';

$jobID = stripcslashes($_POST['hidden1']);
$rating = stripcslashes($_POST['rating']);
$pEmail = stripcslashes($_POST['hidden2']);
$reviewedBy = stripcslashes($_SESSION['fullName']);

//Add record
$query = "INSERT INTO PartTimerRating(jobID, partTimerEmail, reviewedBy, rating)
VALUES ('$jobID','$pEmail','$reviewedBy','$rating') ";
$result = mysqli_query($connection, $query);

if ($result) {
  // Query to find all rating for the part timer to calculate average rating
  $query2 = "SELECT rating FROM PartTimerRating WHERE partTimerEmail='$pEmail'";
  $result2 = mysqli_query($connection, $query2);

  $allRatings = 0;
  $avgRating = 0;

  if (mysqli_num_rows($result2) > 0){
    while($row = mysqli_fetch_assoc($result2)){
      $allRatings += $row['rating'];
    }
    $avgRating = $allRatings / mysqli_num_rows($result2);
  }

  // Query to update parttimer's average rating
  $query3 = "UPDATE parttimer SET averageRating='$avgRating' WHERE parttimer.email='$pEmail' ";
  $result3 = mysqli_query($connection, $query3);

header("Location: ../webpage/ehomePage.php");
}










?>
