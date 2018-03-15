<?php
session_start();
include 'dbConnection.php';

$fullName = stripcslashes($_POST['pFullName']);
$email = stripcslashes($_POST['pEmail']);
$password = stripcslashes($_POST['pPassword']);
$contact = stripcslashes($_POST['pContact']);
$address = stripcslashes($_POST['pAddress']);
$city = stripcslashes($_POST['pCity']);
$state = stripcslashes($_POST['pState']);
$zip = stripcslashes($_POST['pZip']);

$fullName = mysqli_real_escape_string($connection, $fullName);
$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);
$contact = mysqli_real_escape_string($connection, $contact);
$address = mysqli_real_escape_string($connection, $address);
$city = mysqli_real_escape_string($connection, $city);
$state = mysqli_real_escape_string($connection, $state);
$zip = mysqli_real_escape_string($connection, $zip);

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
  $_SESSION['pSignUp'] = "failed";
  header("Location: ../webpage/index.php");
}
else {
  $query2 = "INSERT INTO  users (fullName, email, password, contact, address, city, state, zip, type) VALUES
  ('$fullName','$email','$password','$contact','$address','$city','$state','$zip','partTimer')";
  mysqli_query($connection, $query2);
  $_SESSION['pSignUp'] = "success";
  header("Location: ../webpage/index.php");
}

mysqli_close($connection);
?>
