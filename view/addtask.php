<?php
//include the controller
require('../controllers/taskcontroller.php');

//check if submit button was clicked to add a task
if (isset($_POST['uadd'])) {
	//grab form data and stores them in variables
	$pname = $_POST['uname'];
	$ptask = $_POST['utask'];
	$pdate = $_POST['udate'];
	$ptime = $_POST['utime'];

	//calls function from taskcontroller.php to add a task
	$ret =  addtaskctrl($pname ,$ptask, $pdate, $ptime);
	//echo result
	if ($ret) {
		//echo success, if the task was successfully added
				echo "<div class='alert alert-success' style='font-size:16px;'>
  						<strong>Success!</strong> New Task inserted.
					 </div>";
	}else{
		//echo danger, if the task was not successfully added
		echo "<div class='alert alert-danger' style='font-size:16px;'>
  						<strong>Danger!</strong> Error Inserting Task.
					 </div>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>To-Do-List--Add task</title>
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
	<!--Custom CSS for styling the form background as well as the page background-->
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
            height: 730px;
            margin-bottom: 9px;
	    }
	</style>

</head>
<body>
	<div class="login_bg">
	<div class="login-form">
		<!--Form to receive add task details of the user -->
	    <form action="" method="post">
	    	<h2 class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="color:white;">ToDoList App</h2> 
	        <h2 class="text-center"><b>ADD TASK</b></h2>
	        <div class="form-group">
	            <input type="text" class="form-control" id="nameid" placeholder="Enter your name" required="required" name="uname" style="font-size: 16px;" style="width: 250px;">
	        </div>
	        <hr />     
	        <div class="form-group">
	            <input type="text" class="form-control" id="tid" placeholder="Enter the task to do" required="required" name="utask" style="font-size: 16px;" style="width: 250px;">
	        </div>
	        <hr />
	        <div class="form-group">
	        	<label>Enter the date to perform task</label>
	            <input type="date" class="form-control" placeholder="Enter the date to do task" required="required" name="udate" style="font-size: 16px;" style="width: 250px;">
	        </div>
	        <hr />
	        <div class="form-group">
	        	<label>Enter time in 12 hour format</label>
	            <input type="time" class="form-control" placeholder="Enter time(In 24 hour format)" required="required" name="utime" style="font-size: 16px;" style="width: 250px;">
	        </div>
	        <br />
	        <div class="form-group">
	            <center><button type="submit" onclick="taskvalidation()" name="uadd" class="btn btn-primary btn-block">ADD TASK</button></center>
	        </div>
	    
              <center><a class="btn btn-lg btn-primary btn-block text-uppercase" href="Home_Page.php"><b>Back to home page</b></a></center>      
	    </form>
	</div>
</div>
</body>
</html>