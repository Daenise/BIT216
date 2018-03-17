<?php
session_start();
include '../php/dbConnection.php';

$email = $_SESSION['email'];

$query = "SELECT * FROM parttimer WHERE email= '$email'";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

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
  <link href="../css/editPart-timerProfile.css" rel="stylesheet">
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
                  <li><a href="phomePage.php">Job History</a></li>
                  <li><a href="searchJob.php">Search Job</a></li>
                  <li><a href="#pendingApplication">Pending Application</a></li>
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


    <div class="container marginbot-50">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="title">
              <h2 class="h-bold text-center">Profile</h2>
            </div>
          </div>

        <div class="profile">
          <div class="profilePic">
          <img src="../img/profile1.png" class="avatar img-circle" alt="avatar">
          </div>

          <div class="pFullname">
            <label> <?php echo $row['fullName'] ?></label>
          </div>

          <div class="pDetails">
          <div class="email">
            <label class="col-xs-12 col-sm-5 col-md-5">Email </label>
            <label class="col-xs-12 col-sm-7 col-md-7 showdetail" name="pEmail"> : <?php echo $row['email'] ?> </label>
          </div>

          <div class="contact">
            <label class="col-xs-12 col-sm-5 col-md-5">Contact No </label>
            <label class="col-xs-12 col-sm-7 col-md-7" name="pContact"> : <?php echo $row['contactNo'] ?> </label>
            </div>

          <div class="add">
            <label class="col-xs-12 col-sm-5 col-md-5">Address </label>
            <label class="col-xs-12 col-sm-7 col-md-7" name="pAddress"> : <?php echo $row['address'] ?> </label>
          </div>

          <div class="city">
            <label class="col-xs-12 col-sm-5 col-md-5">City </label>
            <label class="col-xs-12 col-sm-7 col-md-7" name="pCity"> : <?php echo $row['city'] ?> </label>
          </div>

          <div class="state">
            <label class="col-xs-12 col-sm-5 col-md-5">State </label>
            <label class="col-xs-12 col-sm-7 col-md-7" name="pState"> : <?php echo $row['state'] ?> </label>
          </div>

          <div class="zip">
            <label class="col-xs-12 col-sm-5 col-md-5">Zip </label>
            <label class="col-xs-12 col-sm-7 col-md-7" name="pZip"> : <?php echo $row['zip'] ?></label>
          </div>

          <div class="skillset">
            <label class="col-xs-12 col-sm-5 col-md-5">Skill</label>
            <label class="col-xs-12 col-sm-7 col-md-7" name="skillset"> : <?php echo $row['skillSet'] ?></label>
          </div>

        </div>

              <br>
              <a href="editPart-timerProfile.php"><button> Edit </button></a>

        </form>
      </div>
      <br><br>
    </div>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="text-center">
                <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
                <p> ACTS Global Networking (AGN) <br /> 123,Jalan Satu, 12345 Kuala Lumpur. <br /> Call : 03-1234567 / Whatsapp : 012-34567891
                </div>
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
