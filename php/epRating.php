<?php
session_start();
include '../php/dbConnection.php';

$jobID = stripcslashes($_POST['hidden1']);
$rating = stripcslashes($_POST['rating']);
$eEmail = stripcslashes($_POST['hidden2']);
$reviewedBy = stripcslashes($_SESSION['fullName']);

//Add record
$query = "INSERT INTO EmployerRating(jobID, employerEmail, reviewedBy, rating)
VALUES ('$jobID','$eEmail','$reviewedBy','$rating') ";
$result = mysqli_query($connection, $query);

if ($result) {
  // Query to find all rating for the part timer to calculate average rating
  $query2 = "SELECT rating FROM EmployerRating WHERE employerEmail='$eEmail'";
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
  $query3 = "UPDATE employer SET averageRating='$avgRating' WHERE employer.email='$eEmail' ";
  $result3 = mysqli_query($connection, $query3);

header("Location: ../webpage/phomePage.php");
}










?>
