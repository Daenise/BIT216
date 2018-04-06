<?php
session_start();
include 'dbConnection.php';

$jobID = stripcslashes($_POST['hidden1']);
$rating = stripcslashes($_POST['rating']);
$pEmail = stripcslashes($_POST['hidden2']);
$reviewedBy = stripcslashes($_SESSION['fullName']);

$query = "INSERT INTO PartTimerRating(jobID, partTimerEmail, reviewedBy, rating)
VALUES ('$jobID','$pEmail','$reviewedBy','$rating') ";
$result = mysqli_query($connection, $query);

header("Location: ../webpage/ehomePage.php");






?>
