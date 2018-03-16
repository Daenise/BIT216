<?php
session_start();
include 'dbConnection.php';

$title = stripcslashes($_POST['jobTitle']);
$scope = stripcslashes($_POST['jobScope']);
$salary = stripcslashes($_POST['jobSalary']);
$date = stripcslashes($_POST['date']);
$startTime = stripcslashes($_POST['startTime']);
$endTime = stripcslashes($_POST['endTime']);
$location = stripcslashes($_POST['jobLocation']);
$empEmail = $_SESSION['email'];

$title = mysqli_real_escape_string($connection, $title);
$scope = mysqli_real_escape_string($connection, $scope);
$salary = mysqli_real_escape_string($connection, $salary);
$date = mysqli_real_escape_string($connection, $date);
$startTime = mysqli_real_escape_string($connection, $startTime);
$endTime = mysqli_real_escape_string($connection, $endTime);
$location = mysqli_real_escape_string($connection, $location);

$query = "INSERT INTO job(title, scope, salary, date, startTime, endTime, location, status, employerEmail, partTimerEmail) VALUES
('$title','$scope','$salary','$date','$startTime', '$endTime','$location', 'available','$empEmail','empty')";
mysqli_query($connection, $query);

mysqli_close($connection);
?>
