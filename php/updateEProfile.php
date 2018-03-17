<?php
session_start();
include 'dbConnection.php';

$email = $_SESSION['email'];
$fullName = stripcslashes($_POST['eFullName']);
$password = stripcslashes($_POST['ePassword']);
$contact = stripcslashes($_POST['eContact']);
$address = stripcslashes($_POST['eAddress']);
$city = stripcslashes($_POST['eCity']);
$state = stripcslashes($_POST['eState']);
$zip = stripcslashes($_POST['eZip']);

$fullName = mysqli_real_escape_string($connection, $fullName);
$password = mysqli_real_escape_string($connection, $password);
$contact = mysqli_real_escape_string($connection, $contact);
$address = mysqli_real_escape_string($connection, $address);
$city = mysqli_real_escape_string($connection, $city);
$state = mysqli_real_escape_string($connection, $state);
$zip = mysqli_real_escape_string($connection, $zip);

$updateE= "UPDATE employer
           SET fullName = '$fullName', password = '$password', contactNo = '$contact', address = '$address', city = '$city', state = '$state', zip = '$zip'
           WHERE email = '$email'";

$result = mysqli_query($connection, $updateE);

header("Location: ../webpage/employerProfile.php");

mysqli_close($connection);
?>
