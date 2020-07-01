<?php
//a printout message telling the user what to do given the instructions
echo "<div class='alert alert-success' style='font-size:16px;'>
  						<marquee direction='right'><strong> ENTER YOUR NAME TO MAKE AND VIEW CHANGES TO YOUR TASKS</strong></marquee>
					 </div>
					 ";

?>
<!DOCTYPE html>
<html en = "lang">
<head>
	<title>To-Do-list--Check</title>
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

	<script type="text/javascript" src="../js/task.js"></script>
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
		<!--This form takes in the username whose task details would be displayed-->
	    <form action="listtasks.php" method="post">
	    	<h2 class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="color:white;">ToDoList App</h2> 
	        <h4 class="text-center"><b>ENTER YOUR NAME TO MAKE AND VIEW CHANGES TO YOUR TASKS</b></h4>       
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Username" required="required" id="uid" name="uname" style="font-size: 16px;" style="width: 250px;">
	        </div>
	        <div class="form-group">
	            <center><button type="submit" name="usend" onclick="uservalidation()" class="btn btn-primary btn-block">SUBMIT</button></center>
	        </div>
	        <center><a class="btn btn-lg btn-primary btn-block text-uppercase" href="Home_Page.php"><b>Back to home page</b></a></center> 
	    </form>
</body>
</html>