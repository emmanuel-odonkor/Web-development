<!DOCTYPE html>
<html>
<head>
	<title>To-Do-List--Sign Up</title>
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
	<!--Custom CSS-->
	<style type="text/css">
		.signup-form {
			width: 400px;
	    	margin: 50px auto;
	    	margin-bottom: 90px;
	        margin-top: 0;

		}
	    .signup-form form {
	    	margin-bottom: 100px;
	        background: #f7f7f7;
	        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	        padding: 70px;
	        opacity: 93%;
	       

}
	    }
	    .signup-form h2 {
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
	    .FIRST{
	    	background-image: url('../images/pic3.jpg');
            background-size: 100% 100%;
            background-attachment: fixed;
            width: 100%;
            height: 630px;
            margin-bottom: 9px;
	        

	    }
	</style>

</head>
<body>
	<div class="FIRST">
	<div class="signup-form">
	    <form action="signupproc.php" method="post">
	    	<h2 class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="color:white;">ToDoList App</h2> 
	        <h2 class="text-center"><b>SIGN UP</b></h2>       
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Username" required="required" id="uid" name="uname" style="font-size: 16px;" style="width: 250px;">
	        </div>

	        <hr />
	        <div class="form-group">
	            <input type="password" id="inputpass" class="form-control" placeholder="Password" required="required" name="upass" style="font-size: 16px;" pattern=".{8}" title="8 characters( Numbers,symbols,letters)" style="width: 250px;">
	        </div>
	        <br />
	        <div class="form-group">
	            <center><button type="submit" onclick="uservalidation()" name="usignup" class="btn btn-primary btn-block">Sign Up</button></center>
	        </div>
	        <center><b style="font-size: 14px;">You do not have an account, please Sign up first</b></center>
	        <br />
	        <br />
	        <center><a href="../index.php" style="font-size: 13px;">Back to Login Page</a></center>
	               
	    </form>
	</div>
</div>
</body>
</html>