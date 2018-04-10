<?php
session_start();
include '../php/dbConnection.php';
$email = $_SESSION['email'];
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
                  <li><a href="ehomePage.php">Job History</a></li>
                  <li><a href="postJob.php">Post New Job</a></li>
                  <li><a href="ependingApplication.php">Pending Application</a></li>
                  <li><a href="employerProfile.php">Profile</a></li>
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
                <h2 class="h-bold">Applications Pending</h2>
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
                  <th style="text-align:center">PTimer's Email</th>
                  <th style="text-align:center">PTimer's Rating</th>
                  <th style="text-align:center">Accept/Reject</th>
                </tr>
              </thead>
              <tbody>

              <?php

              $query = "SELECT * FROM job, application, parttimer
                        WHERE application.jobStatus = 'Pending'
                        AND job.jobID = application.jobID
                        AND application.partTimerEmail = parttimer.email
                        AND job.employerEmail='{$_SESSION['email']}'";


              $result = mysqli_query($connection, $query);

              echo mysqli_error($connection);

              if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){
                  echo "<form action = '../php/acceptJob.php' method='post'>";
                  echo "<tr>";
                  echo "<td style='text-align:center'>" .$row["title"] . "</td>";
                  echo "<td style='text-align:center'>" . $row['salary'] . "</td>";
                  echo "<td style='text-align:center'>" . $row['date'] . "</td>";
                  echo "<td style='text-align:center'>" . $row['partTimerEmail'] . "</td>";
                  echo "<td style='text-align:center'>" . $row['averageRating'] . "</td>";
                  echo "<td> <input type = submit name='application' value = 'Accept' style ='width:100%'>
                             <input type = submit name='application' value = 'Reject' style ='width:100%'> </td>";
                  echo "<input type=hidden name=hidden1 value= " . $row['jobID'] . ">";
                  echo "<input type=hidden name=hidden2 value= " . $row['partTimerEmail'] . ">";
                  echo "</tr>";
                  echo "</form>";
                }
              }
              ?>
              </tbody>
            </table><br/>
          </div>
        </div>
      </div>


  <!-- Core JavaScript Files -->
  <script src="../js/jquery-2.1.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/functions.js"></script>

</body>
</html>
