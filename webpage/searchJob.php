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
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('../css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style>


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
                <h2 class="h-bold">Search</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<div id='price'>
<?php

$query = "SELECT * FROM job, parttimer  WHERE job.status ='available'
          AND job.skill = parttimer.skillset
          AND parttimer.email = '{$_SESSION['email']}'";

$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){

  while($row = mysqli_fetch_assoc($result)){
        echo "
              <div class='plan'>
              <div class='plan-inner'>
              <div class='entry-title'>";

        echo "<h3>" . $row['title'] . "</h3>";
        echo "<div class='price'> RM" . $row['salary'] . "<span>/ HOUR</span>";
        echo "</div>
              </div>
              <div class='entry-content'>
              <ul>";
        echo "<li>" . $row['scope'] . "</li>";
        echo "<li>" . $row['date'] . "</li>";
        echo "<li>" . $row['startTime'] . "~" . $row['endTime'] . "</li>";
        echo "<li>" . $row['location'] . "</li>";
        echo "<li>" . $row['skill'] . "</li>";
        echo "</ul>
              </div>
              <div class = 'btn'>";

        $sql2 = "SELECT *
                 FROM application
                 WHERE application.partTimerEmail = '{$_SESSION['email']}'
                 AND  application.jobID = '".$row['jobID']."'";

        $result2 = mysqli_query($connection, $sql2);

        echo mysqli_error($connection);

        if(mysqli_num_rows($result2) > 0){
           echo "<button type='button' disabled>Applied</button>";

        } else if(mysqli_num_rows($result2) == 0){echo "<form method='POST' action='../php/applyjob.php'>
              <input type ='text' class='hide' name='jobID' value=" . $row['jobID'] . ">
              <button type='submit' name='applyJob'>Apply</button>
              </form>";
            }
        echo "</div>
        </div>
        </div>
        ";
}
}

else {
  echo "No results found!";
}


?>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("price");
  tr = document.getElementsByTagName("h3");
  for (i = 0; i < div.length; i++) {
    td = tr[i].getElementsByTagName("h3")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

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

</div>
  <!-- Core JavaScript Files -->
  <script src="../js/jquery-2.1.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/functions.js"></script>

</body>
</html>
