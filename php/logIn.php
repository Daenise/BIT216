<?php
session_start();
include 'dbConnection.php';

$email = stripcslashes($_POST['email']);
$password = stripcslashes($_POST['password']);

$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);

$query = "SELECT * FROM employer WHERE email = '$email' and
password = '$password'";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

if ($row['email'] == $email && $row['password'] == $password) {

  $_SESSION['email'] = $row['email'];
  $_SESSION['fullName'] = $row['fullName'];
  $_SESSION['type'] = $row['type'];

  header('Location: ../webpage/ehomePage.php');
}

else{
  $query2 = "SELECT * FROM parttimer WHERE email = '$email' and
  password = '$password'";

  $result = mysqli_query($connection, $query2);
  $row = mysqli_fetch_assoc($result);

  if ($row['email'] == $email && $row['password'] == $password) {

    $_SESSION['email'] = $row['email'];
    $_SESSION['fullName'] = $row['fullName'];
    $_SESSION['type'] = $row['type'];

    header('Location: ../webpage/phomePage.php');
  }

  else {
    header('Location: ../webpage/index.php');
    $_SESSION['email'] = "failed";
  }
}



mysqli_close($connection);
?>
