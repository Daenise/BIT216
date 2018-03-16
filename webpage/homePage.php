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
                  <li><a href="homePage.php">Job History</a></li>
                  <li><a href="postJob.php">Post New Job</a></li>
                  <li><a href="#pendingApplication">Pending Application</a></li>
                  <li><a href="#editProfile">Edit Profile</a></li>
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

    <div id="price">

<!--price tab-->
  <?php
  $email = $_SESSION['email'];
  $query = "SELECT * FROM job WHERE employerEmail = '$email'";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)){

    }
  }

  /*<div class="plan">
   <div class="plan-inner">
     <div class="entry-title">
       <h3>Basic Wash</h3>
       <div class="price">$25<span>/PER CAR</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li><strong>1x</strong> option 1</li>
          <li><strong>2x</strong> option 2</li>
          <li><strong>3x</strong> option 3</li>
          <li><strong>Free</strong> option 4</li>
          <li><strong>Unlimited</strong> option 5</li>
        </ul>
      </div>
      <div class="btn">
        <a href="#">Order Now</a>
      </div>
    </div>
  </div>*/
?>
</div>



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
