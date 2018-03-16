<?php
session_start();

//To prevent variables form storing null values
if (empty($_SESSION['eSignUp'])) {
  $_SESSION['tSignUp'] = "empty";
}
if (empty($_SESSION['email'])) {
  $_SESSION['email'] = "empty";
}
if (empty($_SESSION['pSignUp'])) {
  $_SESSION['mSignUp'] = "empty";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web For Jinjang - Impact a life, transform a community</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="../css/animate.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/login.css" rel="stylesheet">
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
                  <li><a href="#home">Home</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#services">How To Help</a></li>
                  <li><a href="#donations">Donations</a></li>
                  <li><a data-toggle="modal" data-target="#LogInModal"> Login </a></li>
                  <li><a data-toggle="modal" data-target="#SignUpModal"> Sign Up </a></li>
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

    <!-- Slideshow -->
    <div id="home" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#home" data-slide-to="0" class="active"></li>
        <li data-target="#home" data-slide-to="1"></li>
        <li data-target="#home" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive center-block cImage" src="../img/jj1.jpg" alt="Gym1">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="item">
          <img class="img-responsive center-block cImage" src="../img/jj2.jpg" alt="Gym2">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="item">
          <img class="img-responsive center-block cImage" src="../img/jj3.jpg" alt="Gym3">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#home" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#home" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- back to top button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-angle-double-up"></span></button>

    <!-- Modal -->
    <div id="LogInModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
            <form class="form-login" method="post" action="#">

              <div class="form-log-in-with-email">

                <div class="form-white-background">

                  <div class="form-title-row">
                    <h1>Log in</h1>
                  </div>

                  <div class="form-row">
                    <label>
                      <span>Email</span>
                      <input type="email" name="email">
                    </label>
                  </div>

                  <div class="form-row">
                    <label>
                      <span>Password</span>
                      <input type="password" name="password">
                    </label>
                  </div>

                  <div class="form-row">
                    <button type="submit">Log in</button>
                  </div>

                </div>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>


    <div class="modal fade" id="SignUpModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="text-align: center;" class="modal-title">Sign Up</h4>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class = "row">
                <div class = "col-xs-12 col-sm-6">
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#employee">Employee</a></li>
                    <li><a data-toggle="tab" href="#partTimer">Part-Timer</a></li>
                  </ul>
                  <div class="tab-content">
                    <div id="employee" class="tab-pane fade in active">
                      <form name="EsignUpForm" onsubmit ='true' action="../php/employerSignUp.php" method="post">
                        <div class="row" style="margin-top: 50px;">
                          <div class="col-sm-offset-2 col-sm-8">

                            <div class="form-group">
                              <label>Full Name: </label>
                              <input type="text" name="eFullName" placeholder="Full Name"
                              class="form-control" required>
                            </div>

                            <div class="form-group">
                              <label>Email: </label>
                              <input type="email" name="eEmail" placeholder="example@mail.com"
                              class="form-control"
                              required>
                            </div>

                            <div class="form-group">
                              <label>Password: </label>
                              <input type="password" name="ePassword" placeholder="Password"
                              class="form-control" required>
                            </div>

                            <!--Phone no. according to Malaysia's phone standard-->
                            <div class="form-group">
                              <label>Contact.No: </label>
                              <input type="tel" pattern="^\d{3}-\d{3}-\d{4}$"  name="eContact" placeholder="123-456-7890"
                              class="form-control" required>
                            </div>

                            <div class="form-group">
                              <label>Company Address</label>
                              <input type="text" class="form-control" name="eAddress" placeholder="No. , Jalan xxx">
                            </div>

                            <!--The tweleve states of Malaysia, though KL is default due to it being a Jinjang community-->
                            <div class="form-group col-md-4">
                              <label>City</label>
                              <input type="text" class="form-control" name="eCity">
                            </div>
                            <div class="form-group col-md-4">
                              <label>State</label>
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
                            <div class="form-group col-md-4">
                              <label>Zip</label>
                              <input type="text" class="form-control" name="eZip">
                            </div>

                          </div>
                        </div>
                        <div class="modal-footer">
                          <div style="text-align: center;">
                            <br />
                            <input type="submit" value="Get Started" name="register"
                            id="eSubmit" class="btn btn-default" required>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div id="partTimer" class="tab-pane fade">
                      <form name="pSignUpForm" action="../php/partTimerSignUp.php" method="post">
                        <div class="row" style="margin-top: 50px;">
                          <div class="col-sm-offset-2 col-sm-8">

                            <div class="form-group">
                              <label>Full Name: </label>
                              <input type="text" name="pFullName" placeholder="Full Name"
                              class="form-control" required>
                            </div>

                            <div class="form-group">
                              <label>Email: </label>
                              <input type="email" name="pEmail" placeholder="example@mail.com"
                              class="form-control"
                              required>
                            </div>

                            <div class="form-group">
                              <label>Password: </label>
                              <input type="password" name="pPassword" placeholder="Password"
                              class="form-control" required>
                            </div>

                            <!--Phone no. according to Malaysia's phone standard-->
                            <div class="form-group">
                              <label>Contact.No: </label>
                              <input type="tel" pattern="^\d{3}-\d{3}-\d{4}$"  name="pContact" placeholder="123-456-7890"
                              class="form-control" required>
                            </div>

                            <div class="form-group">
                              <label>Address</label>
                              <input type="text" class="form-control" name="pAddress" placeholder="No. , Jalan xxx">
                            </div>
                            <div class="form-group col-md-4">
                              <label>City</label>
                              <input type="text" class="form-control" name="pCity">
                            </div>

                            <!--The tweleve states of Malaysia, though KL is default due to it being a Jinjang community-->
                            <div class="form-group col-md-4">
                              <label>State</label>
                              <select name="pState" class="form-control">
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
                            <div class="form-group col-md-4">
                              <label>Zip</label>
                              <input type="text" class="form-control" name="pZip">
                            </div>

                          </div>
                        </div>
                        <div class="modal-footer">
                          <div style="text-align: center;">
                            <br />
                            <input type="submit" value="Get Started" name="register"
                            id="pSubmit" class="btn btn-default" required>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- End of Modal-->

    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading">
              <h2 class="h-bold text-center">About Jinjang Utara</h2>
              <h3 class ="text-center">Impact a life, transform a community.</h3>
              <br>
              <div class="divider-header"></div>
              <p>The entire housing was built on the city’s landfilled rubbish dump. It is currently notorious for the high crime rate, drug abuse, gang fights and conflicts. A harbor for drug addicts, alcoholics, gangsters, prostitutes and petty criminals.
                Jinjang Utara is littered with dilapidated rumah transit (supposed to be temporary housing). Currently, housing more than 2000 people. These are forgotten people who became disillusioned and embittered. The inhabitants waited for 40 years to date, to be relocated to their new residence under Projek Perumahan (PPR) which has yet to happen. This is 38 years later than the promised duration by the government. Even if they are offered low cost housing tomorrow, they will not be able to afford it as they can hardly afford the RM40 per month rent even now. The average combined income per month for each family is less than RM1000.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="../img/j1.jpg" alt="" class="img-responsive" />
        </div>
        <div class="col-md-6">
          <br><br><br>
          <p> The integrity of the rumah transit is questionable because they were not built to last. This poses a health and safety hazard for the family staying under the roof of each unit. The occupants have grown over the years to include three generations with an average of ten people in each unit. Each unit is cramped in a 480-square-feet space for the entire family of over 10 pax each.</p>
        </div>
      </div>

      <div class="col-lg-8 col-lg-offset-2">
        <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
          <div class="section-heading">
            <div class="divider-header"></div>
            <p>The children in Jinjang Utara have been growing up in a poverty stricken environment. Some were abandoned by their parents or are neglected in an environment of abject poverty. Violence is rampant in this place. Teenagers are at risk of being recruited by gangs. With their home so broken and crowded, the teenagers have no place to turn to. The gangs offered financial and communal support/relief, including a sense of belonging.
              Jonathan Ambalagan and Mary Ramamoothy started the community work and have been reaching out to the children of Jinjang Utara for the past 17 years. It is their life mission to see the community transformed and changed through helping the children - one child at a time. The chief focus is on education and social concern activities. They conduct weekly outdoor activities to instill moral values in children. Over 100 children attend their session every week. Over the years, many of these children have progressed to complete their secondary education. Few are even completing their college education through the sponsorship of kind benefactors like HELP Education Group.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <br><br><br>
            <p> Jonathan and Mary make home visits weekly to know each family’s respective needs. In the process, they are supporting some of the families’ need such as education (school bus), groceries, school supplies, etc. Because of the financial burden, many of these children are undernourished and some are even deprived of food for many days. They then have to survive on occasional leftovers offered by kind neighbors. </p>
          </div>
          <div class="col-md-6">
            <img src="../img/j2.png" alt="" class="img-responsive" />
          </div>
        </div>

        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading">
              <div class="divider-header"></div>
              <p>The children are constantly subjected to danger of bad influence, perversion and exploitation daily under such conditions. Occasionally, Jonathan and Mary will be called for counselling, as the men are thrown in jail, taken into drug rehab, youths arrested for fights or drug possession, etc. The work is immense with never ending challenges.</p>
            </div>
          </div>
        </div>
      </div>


      <!-- Section: about -->
      <section id="about">
        <div class="container marginbot-50">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2 class="h-bold text-center">About AGN</h2>
                <div class="row">
                  <div class="col-md-4 agn">
                    <img src="../img/agnlogo.jpg" alt="" class="img-responsive" />
                  </div>

                  <div class="col-md-8">
                    <br><br><br>
                    <p> ACTS Global Networking (AGN) is a non-profit organization mainly focusing on education and social concern activities. One of the community activities that it has been involved in over the past fourteen years is its “street ministry” where the organization reaches out and helps the hurting and neglected children and youth in Jinjang. AGN has been extending support, counselling and meeting the material needs of this needful community for over fourteen years. </p>
                    <p>One of AGN project namely Jinjang Utara Community. AGN will collect donations for the community and find sponsors for children, thus they can go to school. In addition, AGN also organizes social or educational events for the children and youth.
                    </p> <br>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container marginbot-50">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                <u><h3 class="h-bold"> Literacy and Numeracy Programme </h3></u>

                <img src="../img/edu.png" alt="" class="img-responsive" /> <br>

                <p> Education has an important role to play in the eradication of poverty. Unfortunately for many families living in poverty, education is a luxury they cannot afford. This is a great tragedy, as education should be a basic human right that must be met.</p>

                <p>The effects of poverty had resulted in some children growing up in poverty stricken homes, suffering more frequent and persistent health problems compared to children who grow up under better financial circumstances. Children raised under poverty noticeably, tend to miss school more often because of illness, level of stress at home, lack of child- care facilities, and unfortunately, sometimes, violence at home. As our nation progresses, there needs to be intervention programmes for the poor to ensure they are not left behind. </p>

                <p>Even though schooling is free here in Malaysia, those who live in poverty still cannot afford to pay for their children’s miscellaneous fees such as activities, textbooks and uniforms, and their meals. Now in this age and era, each child needs a computer, and these items that we take for granted are not cheap for those who are destitute. </p>

                <p>Sadly, those who are destitute would rather send their children out to work, so that they can earn a living to support their parents and siblings. These children should remain in school, as it is proven that each year they remain in school their earning potential increases by 10-20%. </p>

                <p>English may not be the most spoken language in the world, but it remains as the dominant language for business and has become almost a necessity for people to enter a global workforce. Its importance in the global market place therefore cannot be understated, as learning English really can change lives. </p>

                <p>Hence, the literacy project was launched in December 2014, giving opportunities for the resident children to unlock their full potential and find meaningful careers in the future.The children in the Jinjang community are especially weak in the foundational subjects of English, Maths and Science. The Maths Numeracy Project for the children from Jinjang Utara then followed suit in early 2017. </p>

                <p>We are committed to do what we can to improve the literacy and numeracy skills of those who are left behind. </p>

                <p> Although some supporters have donated generously each year to charity, the needs of the poor cannot all be met. There are only so much we can do. Many households in destitute require financial aid for many things including tuition and remedial classes for subjects that they are weak in. </p>

                <p> This is a small project, but one that must continue and sustain itself, so that it will have a greater impact on these children’s lives. We encourage you to join us in our effort in uplifting our communities and making a difference in their lives. It stems from a simple conviction that we all share, that every child and every life matters, for our community and for the future of our nation. </p><br>

                <div class="quotes"> “Life is not a competition. Life is about helping and inspiring others, so we can reach our full potential”
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Section: about -->

      <!-- Section: how can you help -->
      <section id="services" class="color-dark bg-white">
        <div class="container marginbot-50">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                  <h2 class="h-bold">How You Can Help</h2>
                  <div class="divider-header"></div>
                  <p>You have two hands. One to help yourself, the second to help others. </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.8s">
                <div class="service-icon">
                  <span class="fa fa-group fa-5x"></span>
                </div>
                <h2 class="iconTitle">Volunteers</h2>
                <p>With your support we can :
                  <ul>
                    <li> Help poor families send their children to school </li>
                    <li> Help poor children in their studies to enable them to stay in school </li>
                    <li> Help children learn new skills to be able to secure employment in the future </li>
                    <li> Help women build a better life for themselves, their families and their community </li>
                  </ul>
                </p>
                <p> Volunteer as a teacher : </p>
                <ul>
                  <li> We need teachers who can teach Primary Maths and English to children from Jinjang. Our classes are on Saturdays from 2 pm to 5 pm, in HELP University, KPD,  Jalan Dungun, Kuala Lumpur. </li>
                </ul>
              </div>
            </div>

            <div class="col-md-4">
              <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.8s">
                <div class="service-icon">
                  <span class="fa fa-book fa-5x"></span>
                </div>
                <h2 class="iconTitle">Learning Materials</h2>
                <ul>
                  <li> We need help in curriculum design/development. Materials that we can use to teach these children. We have around 60 children taking Maths and another 60 taking English tuition with us each Saturday. We need materials that can be used by teachers as well as workbooks for the children </li>
                  <li> Each week, children will go through workbooks with exercises that will strengthen their understanding of the respective subjects </li>
                </ul>
              </div>
            </div>

            <div class="col-md-4">
              <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.8s">
                <div class="service-icon">
                  <span class="fa fa-pencil fa-5x"></span>
                </div>
                <h2 class="iconTitle">Children School Suplies</h2>
                <ul>
                  <li> We need school bags, school shoes, socks, books, stationery, etc that can be used by the children to start the school year. Each year before Christmas (early December), we host a big Christmas event for the children from this community, where we provide games, songs and lunch for the children. At the end of the party, we will distribute school bags, stationery and other essential items to encourage them to get the new year started </li>
                </ul>
              </div>
            </div>
          </div><br><br>

          <div class="row">
            <div class="col-md-4">
              <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.8s">
                <div class="service-icon">
                  <span class="fa fa-money fa-5x"></span>
                </div>
                <h2 class="iconTitle">Sponsor a Child</h2>
                <p>How the child sponsorship works :
                  <ul>
                    <li> Contact us to find out the details of needy children </li>
                    <li> Choose a child to sponsor </li>
                    <li> Sponsor at least RM150 per month which will cover the cost of school bus, daily lunch allowance and compulsory school fees </li>
                    <li> Alternately, your sponsorship can be pooled with other sponsors to support a child </li>
                    <li> By sponsoring a child, you get to see the impact your sponsorship has on the child and on the community</li>
                  </ul>
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.8s">
                <div class="service-icon">
                  <span class="fa fa-female fa-5x"></span>
                </div>
                <h2 class="iconTitle">E-Business</h2>
                <ul>
                  <li> Empowering mothers out of poverty. In some communities like Jinjang, the girls will be the target of vices, especially if they are not able to find jobs to help sustain their families. In families with many children, the mothers struggle with finding jobs, as they still have very young children who need to be taken care of, at home. Unable to leave the home or join the work force, they remain destitute and helpless. When you empower a woman, she can become a catalyst for positive change, whose success can benefit the family and even her community. Help them by providing a work opportunity today.
                  </li>
                </ul>
                <button type="button" class="postBtn btn btn-block"><a href=#> Post a Job! </a></button>
              </div>
            </div>

            <div class="col-md-4">
              <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.8s">
                <div class="service-icon">
                  <span class="fa fa-heart fa-5x"></span>
                </div>
                <h2 class="iconTitle">Donation</h2>
                <ul>
                  <li> Any donation no matter how small will be deeply appreciated and is much needed. </li>
                  <li>Giving is not just about making a donation, it's about making a difference. </li>
                </ul>
                <button type="button" class="donationBtn btn btn-block"><a href=#donations> Make a Donation Now! </a></button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Section: how can you help -->

      <!-- Section: donations -->
      <section id="donations">
        <div class="container marginbot-50">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                  <h2 class="h-bold"> Donation </h2>
                </div>
              </div>
            </div>
          </div>

          <div class="divider-header"></div>
          <p class="Aname"> Account Holder Name : ACTS Global Networking </p>
          <div class="row">
            <div class="col-sm-6 col-md-5">
              <img src="../img/MBB_logo.png" alt="" class="img-responsive bankLogo" />
              <p style="font-size: 45px; padding-bottom:50px;"> 5678 2345 1234 </p>
            </div>
            <div class="col-sm-6 col-md-6 col-md-offset-1">
              <img src="../img/PBB_logo.png" alt="" class="img-responsive" />
              <p style="font-size: 45px; padding-bottom:50px;"> 123 4567 890 </p>
            </div>
          </div>

          <div class="container Pform">
            <h1 class="pTitle"> Make A Pledge : </h1>
            <form class="pledge">
              <label>Full Name </label><input type="text" name="fullName"><br><br>
              <label>Address </label><input type="text" name="address"><br><br>
              <label>Email </label><input type="text" name="email"><br><br>
              <label>Mobile.No </label><input type="text" name="mobileNo"><br><br>
              <label>Quantum Pledged(One time Payment) </label><input type="text" name="quantumP"><br><br>
              <label>Monthly Payment </label><input type="text" name="monthlyP"><br><br>
              <label>Date to be delivered </label><input type="date" name="date"><br><br>
              <button type="submit" class="submitBtn"> Submit </button>
            </form>
          </div>

        </div>
      </section>
      <!-- /Section: donations -->

      <?php
      if(isset($_SESSION['eSignUp'])){
        if($_SESSION['eSignUp'] == "failed") {
          echo
          "<script>alert('This email has been taken!')</script>";
          unset($_SESSION['eSignUp']);
        }
        if($_SESSION['eSignUp'] == "success") {
          echo
          "<script>alert('Successfully registered!')</script>";
          unset($_SESSION['eSignUp']);
        }
      }
      if(isset($_SESSION['pSignUp'])){
        if($_SESSION['pSignUp'] == "failed") {
          echo
          "<script>alert('This username has been taken!')</script>";
          unset($_SESSION['pSignUp']);
        }
        if($_SESSION['pSignUp'] == "success") {
          echo
          "<script>alert('Successfully registered!')</script>";
          unset($_SESSION['pSignUp']);
        }
      }
      ?>

      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="text-center">
                <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
                <p> ACTS Global Networking (AGN) <br /> 123,Jalan Satu, 12345 Kuala Lumpur. <br /> Call : 03-1234567 / Whatsapp : 012-34567891<br/>
                  &copy;Copyright 2015 - Knight.</p>
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
