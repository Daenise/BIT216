<?php
session_start();
include 'dbConnection.php';

$email = $_SESSION['email'];
$fullName = stripcslashes($_POST['pFullName']);
$password = stripcslashes($_POST['pPassword']);
$contact = stripcslashes($_POST['pContact']);
$address = stripcslashes($_POST['pAddress']);
$city = stripcslashes($_POST['pCity']);
$state = stripcslashes($_POST['pState']);
$zip = stripcslashes($_POST['pZip']);
$skillset= stripcslashes($_POST['pSkill']);

$fullName = mysqli_real_escape_string($connection, $fullName);
$password = mysqli_real_escape_string($connection, $password);
$contact = mysqli_real_escape_string($connection, $contact);
$address = mysqli_real_escape_string($connection, $address);
$city = mysqli_real_escape_string($connection, $city);
$state = mysqli_real_escape_string($connection, $state);
$zip = mysqli_real_escape_string($connection, $zip);
$skillset = mysqli_real_escape_string($connection, $skillset);

$updateP= "UPDATE parttimer
           SET fullName = '$fullName', password = '$password', contactNo = '$contact',
           address = '$address', city = '$city', state = '$state', zip = '$zip',
           skillSet ='$skillset' WHERE email = '$email'";

$result = mysqli_query($connection, $updateP);

header("Location: ../webpage/part-timerProfile.php");

mysqli_close($connection);
?>
