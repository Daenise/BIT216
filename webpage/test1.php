<?php
session_start();

$_SESSION['testvariable'] = "hello world";

header ('Location: ../webpage/test.php');
 ?>
