<?php
session_start();
include 'dbConnection.php';

$fullName = stripcslashes($_POST['eFullName']);
$email = stripcslashes($_POST['eEmail']);
$password = stripcslashes($_POST['ePassword']);
$contact = stripcslashes($_POST['eContact']);
$address = stripcslashes($_POST['eAddress']);
$city = stripcslashes($_POST['eCity']);
$state = stripcslashes($_POST['eState']);
$zip = stripcslashes($_POST['eZip']);

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
  echo "<script>alert('sign up failed');</script>";
  $_SESSION['eSignUp'] = "failed";
  header("Location: ../webpage/index.php");
}
else {
  $query2 = "INSERT INTO  employer (email, password, fullName, contactNo, address, city, state, zip, ) VALUES
  ('$email','$password','$fullNmae','$contact','$address','$city','$state','$zip')";
  mysqli_query($connection, $query2);
  $_SESSION['eSignUp'] = "success";
  header("Location: ../webpage/index.php");
}

mysqli_close($connection);
?>
