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
  <title>Web For Jinjang</title>

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
                  <li><a href="#pendingApplication">Pending Application</a></li>
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
                <h2 class="h-bold">Post a new job</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div>
      <form name="postJobForm" action="../php/newJob.php" method="post">
        <div class="row" style="margin-top: 50px;">
          <div class="col-sm-offset-2 col-sm-8">

            <div class="form-group">
              <label>Job Title: </label>
              <input type="text" name="jobTitle" placeholder=""
              class="form-control" required>
            </div>

            <div class="form-group">
              <label>Job Scope: </label>
              <input type="text" name="jobScope" placeholder="Description of your job..."
              class="form-control"
              required>
            </div>

            <div class="form-group">
              <label>Salary per hour: </label>
              <input type="text" name="jobSalary" placeholder=""
              class="form-control" required>
            </div>

            <div class="form-group">
              <label>Date: </label>
              <input type="date" name="date"
              class="form-control" required>
            </div>

            <div class="form-group col-md-6">
              <label>StartTime:</label>
              <input type="time" name="startTime" class="form-control" required>
            </div>

            <div class="form-group col-md-6">
              <label>EndTime:</label>
              <input type="time" name="endTime" class="form-control" required>
            </div>

            <div class="form-group col-md-6">
              <label>Location</label>
              <select name="jLocation" class="form-control">
                <option value ="home">At Home</option>
                <option value = "work">Work Address</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label>Skill Set Preference</label>
              <select name="jSkill" class="form-control">
                <option value ="housework">Housework</option>
                <option value = "gardening">Gardening</option>
                <option value = "catering">Catering</option>
                <option value = "education">Education</option>
                <option value = "transportation">Transportation</option>
                <option value = "babysitting">Baby Sitting</option>
              </select>
            </div>
          </div>
        </div>

        <div style="text-align: center;">

          <button type="submit" value="Submit">Submit</button>

        </div>

      </form>
    </div>

    <br>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="text-center">
              <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
              <p> ACTS Global Networking (AGN) <br /> 123,Jalan Satu, 12345 Kuala Lumpur. <br /> Call : 03-1234567 / Whatsapp : 012-34567891
              </div>
              <!--
              All links in the footer should remain intact.
              Licenseing information is available at: http://bootstraptaste.com/license/
              You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=KnightOne
            -->
          </div>
        </div>
      </div>
    </footer>

    <!-- Core JavaScript Files -->
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/functions.js"></script>

  </body>
  </html>
