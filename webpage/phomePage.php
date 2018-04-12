<?php
session_start();
include '../php/dbConnection.php';
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
  <!-- Navigation -->
  <div id="navigation">
    <nav class="navs" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="site-logo">
              <a href="index.html" class="brand"> <img src = "../img/jinjangLogo1.png"
                alt="jinjangLogo" style="width:110px;height:100px"> </a>
              </div>
            </div>

            <div class="col-md-9">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                  <i class="fa fa-bars"></i>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="searchJob.php">Search Jobs</a></li>
                  <li><a href="ppendingApplication.php">Pending Application</a></li>
                  <li><a href="phomePage.php">Job History</a></li>
                  <li><a href="part-timerProfile.php">Profile</a></li>
                  <li><a href="index.php"> Logout </a></li>
                </ul>
              </div>
              <!-- /.Navbar-collapse -->
            </div>
          </div>
        </div>
        <!-- /.container -->
      </nav>
    </div>
    <!-- /Navigation -->

    <!-- Job History -->
    <section id="jobHistory" class="color-dark bg-white">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.1s">
              <div class="heading text-center">
                <h2 class="h-bold">Job History</h2>


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class ="row">
        <div class = "col-xs-12">
          <div id="myTable" class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
              <thead>
                <tr style="background-color: #162b4c; color: #fff;">
                  <th style="text-align:center">Title</th>
                  <th style="text-align:center">Salary</th>
                  <th style="text-align:center">Date</th>
                  <th style="text-align:center">StartTime</th>
                  <th style="text-align:center">EndTime</th>
                  <th style="text-align:center">Location</th>
                  <th style="text-align:center">Status</th>
                  <th style="text-align:center">Employer's Email</th>
                  <th style="text-align:center">Rate Employer</th>
                </tr>
              </thead>
              <tbody>

              <?php

              $query = "SELECT * FROM parttimer, job
                        WHERE job.status = 'complete'
                        AND parttimer.email = job.partTimerEmail";
              $result = mysqli_query($connection, $query);

              if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){
                  $jobID=$row['jobID'];

                  echo "<tr>";
                  echo "<td style='text-align:center'>" .$row["title"] . "</td>";
                  echo "<td style='text-align:center'>" . $row['salary'] . "</td>";
                  echo "<td style='text-align:center'>" . $row['date'] . "</td>";
                  echo "<td style='text-align:center'>" . $row['startTime'] . "</td>";
                  echo "<td style='text-align:center'>" . $row['endTime'] . "</td>";
                  echo "<td style='text-align:center'>" . $row['location'] . "</td>";
                  echo "<td style='text-align:center'>" . $row['status'] . "</td>";
                  echo "<td style='text-align:center'>" . $row['employerEmail'] . "</td>";
                  echo "<td style='text-align:center'><a data-toggle='modal' data-target='#rateE'> Rate Now </a></td>";
                  echo "<input type='hidden' name='jID' id='jID' value= 'jobID'>";
                  echo "</tr>";
                }
            }
  echo"</tbody>
</table><br/>
</div>
</div>
</div>";


    $q_jDetails = "SELECT * FROM application, job, employer WHERE application.partTimerEmail='{$_SESSION['email']}'
    AND application.jobID='$jobID' AND job.jobID='$jobID' AND employer.email=application.employerEmail";
    $r_jDetails = mysqli_query($connection, $q_jDetails);
        // initialize counter for pop-up/modal reference
        $eRating = "1";

        if (mysqli_num_rows($r_jDetails)>0){
          while ($row = mysqli_fetch_assoc($r_jDetails)){
            echo '<div class="container">
            <div class="modal fade" id="rateE" '.$eRating.' role="dialog" >
            <div class="modal-dialog">

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
