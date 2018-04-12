<?php
session_start();
include '../php/dbConnection.php';

$jobID = $_POST['hidden1'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../img/favicon-32x32.png" sizes="32x32" />
  <?php
    echo "<title>" . $_SESSION['fullName'] . "'s Profile</title>";
  ?>
  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="../css/animate.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/login.css" rel="stylesheet">
  <link href="../css/homePageStyle.css" rel="stylesheet">
  <link href="../css/phomePageStyle.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>
<body>


<?php

$q_jDetails = "SELECT * FROM job, employer WHERE
                job.jobID='$jobID' AND job.employerEmail = employer.email";
$r_jDetails = mysqli_query($connection, $q_jDetails);
    // initialize counter for pop-up/modal reference
    $eRating = "1";

    if (mysqli_num_rows($r_jDetails)>0){
      while ($row = mysqli_fetch_assoc($r_jDetails)){
        echo '<div class="container">

        <form method="post" action="../php/epRating.php">
        <div class="ratings">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Rate Employer</h2>
        </div>

        <div class="modal-body">';

        echo "<td style='text-align:center'>Employer Name : " . $row['fullName'] . "</td><br>";
        echo "<td style='text-align:center'>Title : " .$row["title"] . "</td><br>";
        echo "<td style='text-align:center'>Salary : RM " . $row['salary'] . "</td><br>";
        echo "<td style='text-align:center'>Date : " . $row['date'] . "</td><br>";
        echo "<td style='text-align:center'>Start Time : " . $row['startTime'] . "</td><br>";
        echo "<td style='text-align:center'>End Time : " . $row['endTime'] . "</td><br>";
        echo "<td style='text-align:center'>Location : " . $row['location'] . "</td><br>";
        echo "<input type=hidden name='hidden2' value=".$row['employerEmail'] .">" ;
        echo "<input type=hidden name='hidden1' value=".$row['jobID'].">";



      echo '<br>
      <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
          <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
          <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
          <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
          <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
          <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
      </fieldset><br><br>

      <div class="buttonDiv">
      <input type="submit" class="rateButton" value="Submit">
      </div>

    </div>
      </div>
    </form>
      </div>
      </div>';
      $eRating++;
    }
  }

?>
<!-- Core JavaScript Files -->
<script src="../js/jquery-2.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/functions.js"></script>

</body>
</html>
