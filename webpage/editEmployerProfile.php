<?php
session_start();
include '../php/dbConnection.php';

$email = $_SESSION['email'];

$query = "SELECT * FROM employer WHERE email = '$email'";

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
  <link href="../css/editEmployerProfile.css" rel="stylesheet">
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
                  <li><a href="homePage.php">Job History</a></li>
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


    <div class="container marginbot-50">
      <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
        <div class="title">
          <h2 class="h-bold text-center">Edit Profile</h2>
        </div>
      </div>

      <div class="profile">
      <form name ="updateEProfile" action="../php/updateEProfile.php" method="post">
        <div class="profilePic">
          <img src="../img/profile1.png" class="avatar img-circle" alt="avatar">
          <input type="file" name="pic">
        </div>

        <div class="pDetails">
          <div class="email">
            <label class="col-xs-12 col-sm-5 col-md-5">Email :</label>
            <label name="email" class="col-xs-12 col-sm-7 col-md-7 showdetail"> <?php echo $row['email'] ?> </label>
          </div>

          <div class="fullname">
            <label class="col-xs-12 col-sm-5 col-md-5"> Full Name : </label>
            <div class="col-xs-12 col-sm-7 col-md-7">
              <input class="form-control" name="eFullName" type="text" value="<?php echo $row['fullName'] ?>" required>
            </div>
          </div>

          <div class="pssd">
            <label class="col-xs-12 col-sm-5 col-md-5">Password : </label>
            <div class="col-xs-12 col-sm-7 col-md-7">
              <input class="form-control" name="ePassword" type="password" value="<?php echo $row['password'] ?>">
            </div>
          </div>

          <div class="contact">
            <label class="col-xs-12 col-sm-5 col-md-5">Contact No : </label>
            <div class="col-xs-12 col-sm-7 col-md-7">
              <input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" name="eContact" value="<?php echo $row['contactNo'] ?>"
              class="form-control" required>
            </div>
          </div>

          <div class="workAdd">
            <label class="col-xs-12 col-sm-5 col-md-5">Work Address:</label>
            <div class="col-xs-12 col-sm-7 col-md-7">
              <input type="text" class="form-control" name="eAddress" value="<?php echo $row['address'] ?>">
            </div>
          </div>

          <!--The tweleve states of Malaysia, though KL is default due to it being a Jinjang community-->
          <div class="city">
            <label class="col-xs-12 col-sm-5 col-md-5">City : </label>
            <div class="col-xs-12 col-sm-7 col-md-7">
              <input type="text" class="form-control" name="eCity" value="<?php echo $row['city'] ?>">
            </div>
          </div>

          <div class="state">
            <label class="col-xs-12 col-sm-5 col-md-5" value="<?php echo $row['state'] ?>" > State : </label>
            <div class="col-xs-12 col-sm-7 col-md-7">
              <select name="eState" class="form-control">
                <option value ="kl" selected>KL</option>
                <option value = "johor">Johor</option>
                <option value = "kedah">Kedah</option>
                <option value = "kelantan">Kelantan</option>
                <option value = "malacca">Malacca</option>
                <option value = "negerisembilan">Negeri Sembilan</option>
                <option value = "pahang">Pahang</option>
                <option value = "perak">Perak</option>
                <option value = "perlis">Perlis</option>
                <option value = "penang">Penang</option>
                <option value = "selangor">Selangor</option>
                <option value = "terengganu">Terengganu</option>
                <option value = "sabah">Sabah</option>
                <option value = "sarawak">Sarawak</option>
              </select>

            </div>
          </div>

          <div class="zip">
            <label class="col-xs-12 col-sm-5 col-md-5">Zip : </label>
            <div class="col-xs-12 col-sm-7 col-md-7">
              <input type="text" class="form-control" name="eZip" value="<?php echo $row['zip'] ?>">
            </div>
          </div>

        </div>

        <br>
        <div class="row updatebutton">
          <div class="col-xs-6 col-md-6">
            <button name="updateBtn"> Update </button>
          </div>
          <div class="col-xs-6 col-md-6">
            <a href="employerProfile.php"><button name="cancelBtn"> Cancel </button></a>
          </div>
        </form>
      </div>
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
