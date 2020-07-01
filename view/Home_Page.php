<?php
   //includes the session file, to enable to start a session for the logged in user
   include("../session.php");

?>

<!DOCTYPE html>
<html lang= "en">
   <head>
   	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>To-Do-List App</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="Free-Template.co" />
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <script type="text/javascript" src="data.js"></script>

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">To-Do-List App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="../login/logout.php" class="nav-link">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
<section class="ftco-cover" style="background-image: url(../images/pic2.jpg);" id="section-home">
  <!-- Prints out a welcome message to the user with their signed in name on this Home Page -->
  <h3>Welcome <?php echo $login_session; ?></h3> 
      <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
          <div class="col-md-12">
            <h1 class="ftco-heading ftco-animate mb-3">Welcome to the To-Do-List App</h1> 
            <!-- The CRUD Functionalities for the logged in to perform are present here  --> 
            <a style="color: black;" class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="addtask.php"><b>CREATE/ADD TASK</b></a>
            <a style="color: black;" class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="listcheck.php"><b>LIST ALL TASKS</b></a>
            <a style="color: black;"class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="listcheck.php"><b>UPDATE TASK</b></a>
            <a style="color: black;" class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="listcheck.php"><b>DELETE TASK</b></a>
          </div>
        </div>
      </div>
    </section>
       <!-- END section -- This is the footer section -->
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md ftco-animate">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Purpose</h2>
                  <p> This software system gives you the chance to<br />
                    effectively manage your day to day activities.<br />
                    Planning in life has proven to be an efficienct<br />
                    tool in success. Therefore as an individual, it<br />
                    is necessary to have a tool that helps you to keep track of your affairs.</p>
                </div>
              </div>
              <div class="col-md ftco-animate">
                 <div class="ftco-footer-widget mb-4">
                  <center><h2 class="ftco-heading-2">CRUD FUNCTIONALITIES</h2></center>
                  <center><ul class="list-unstyled">
                    <li><a href="addtask.php" class="py-2 d-block">CREATE / ADD TASK</a></li>
                    <li><a href="listcheck.php" class="py-2 d-block">READ / LIST TASKS</a></li>
                    <li><a href="listcheck.php" class="py-2 d-block">UPDATE TASK</a></li>
                    <li><a href="listcheck.php" class="py-2 d-block">DELETE TASK</a></li>
                  </ul></center>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md text-left">
            <p>&copy; To-Do-List 2020. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

   <!-- Addition scripts to help make the webpabge look dynamic-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>
   </body>
   
</html>