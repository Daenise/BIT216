<?php
session_start();
include '../php/dbConnection.php';

if (!$connection){
  die("Could not connect to database.");
}

$email = $_SESSION['email'];
$fullName = $_POST['eFullName'];
$password = $_POST['password'];
$contact = $_POST['eContact'];
$address = $_POST['eAddress'];
$city = $_POST['eCity'];
$state = $_POST['eState'];
$zip = $_POST['eZip'];

$updateE= "UPDATE employer SET fullName='$fullName', password='$password' contactNo='$contact',address='$address', city='$city', state='$state', zip='$zip' WHERE email='$email' ";

$result = mysqli_query($updateE);

if (mysqli_query($result)) {
  echo "Your profile successfully updated.";
  header("Location: ../webpage/employerProfile.php");
}
else {
  echo "Error updating record :".mysqli_error($connection);
  header("Location: ../webpage/employerProfile.php");
}

mysqli_close($connection);


?>
