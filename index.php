<?php
 //includes the file to connect to the database
 include("settings/db_cred.php");

//for header redirection
ob_start();


//start session  
session_start();

//uses a post request to capture login information
if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password taken the form 
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['upass']); 
      $mypass = md5($mypassword);
      
      //a database query to take from the database the user_id of the user who is logging in
      $sql = "SELECT `user_id` FROM `user` WHERE `username` = '$myusername' and `password` = '$mypass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      //recover the count of user_id from the database with the specified username and password
      $count = mysqli_num_rows($result);
      
      // If there exist a user_id from the database which matches the username and password
      if($count == 1) {
        // establishes a session for the username
         $_SESSION['login_user'] = $myusername;
        
        //redirects the user to the Home Page
         header("location: view/Home_Page.php");
      }else {
      	 //echo danger
		echo "<div class='alert alert-danger' style='font-size:16px;'>
  						<strong>Error!</strong> Your Login Name or Password is invalid. Sign up if you have no account
					 </div>";
      }
   }

?>

<!DOCTYPE html>
<html>
<head>
	<title>To-Do-list--Login</title>
	<meta charset="utf-8">
	<!--CDN Bootstrap and Jquery-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

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
	

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/task.js"></script>

	<!--Custom CSS for styling the form page and its background-->
	<style type="text/css">
		.login-form {
			width: 400px;
	    	margin: 50px auto;
	    	margin-bottom: 90px;
	        margin-top: 0;
		}
	    .login-form form {
	    	margin-bottom: 100px;
	        background: #f7f7f7;
	        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	        padding: 70px;
	        opacity: 93%;
	    }
	    .login-form h2 {
	        margin: 0 0 30px;
	    }
	    .form-control, .btn {
	        min-height: 50px;
	        border-radius: 7px;
	    }
	    .btn {        
	        font-size: 15px;
	        font-weight: bold;
	    }

	    .login_bg{
	    	background-image: url('images/pic3.jpg');
            background-size: 100% 100%;
            background-attachment: fixed;
            width: 100%;
            height: 630px;
            margin-bottom: 9px;
	    }
	</style>
</head>
<body>
	<div class="login_bg">
	<div class="login-form">
	<!-- This form allows the user to log in using your username and password  -->
	    <form action="" method="post">
	    	<h2 class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="color:white;">ToDoList App</h2> 
	        <h2 class="text-center"><b>LOG IN</b></h2>       
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Username" required="required" id="uid" name="uname" style="font-size: 16px;" style="width: 250px;">
	        </div>
	        <hr />
	        <div class="form-group">
	            <input type="password" class="form-control" placeholder="Password" required="required" name="upass" style="font-size: 16px;" pattern=".{8}" title="8 characters( Numbers,symbols,letters)" style="width: 250px;">
	        </div>
	        <br />
	        <div class="form-group">
	            <center><button type="submit" name="ulogin" onclick="uservalidation()" class="btn btn-primary btn-block">LOG IN</button></center>
	        </div>
	    <!-- Allows the user to Sign up if they do not have an account-->
              <center><a class="btn btn-lg btn-primary btn-block text-uppercase" href="login/signup.php"><b>Sign Up to create account</b></a></center>      
	    </form>
	</div>
</div>
</body>
</html>