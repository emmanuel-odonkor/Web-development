<!DOCTYPE html>
<html>
<head>
	<title>To-Do-List--List all Tasks</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Stylesheet for the Table contaning about a users list of task  -->
	<style type="text/css">
      table{

        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 15px;
        font-style: bold;
        text-align: center;
      }

      th{
        background-color: #588c7e;
        color: white;
      }
      tr:nth-child(even){background-color: #f2f2f2}
    </style>
    
    <!-- Stylesheet for the background of the List all tasks page  -->
    <style type="text/css">
		.login-form {
			width: 800px;
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
            height: 650px;
            margin-bottom: 9px;
	    }
	</style>
</head>
<body>
	<div class="login_bg">
	<div class="login-form">
		<form>
			<h2 class="text-center"><u>LIST OF TASKS</u></h2>

			<table border="5px">
				<thead>
					<tr>
						<th>Username</th>
						<th>Task Name</th>
						<th>Task Date</th>
						<th>Task Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				
			
	<?php
		//include the controller
		require('../controllers/taskcontroller.php');


		//check if submit button for the user to view and make changes was click
        if (isset($_POST['usend'])) {
        //grab the username from the listcheck.php and stores in variable
        	$name = $_POST['uname'];

		//calls the function from taskcontroller.php to display list of tasks for the specified username
		$clist = viewalltaskctrl($name);
		if ($clist) {

			foreach ($clist as $key => $value) {


				$myid = $value['task_id'];
				$username = $value['username'];
				$name = $value['task_name'];
				$date = $value['date'];
				$time = $value['time'];
                
            $_SESSION['myid'] = $myid;
            $tid = $_SESSION['myid'];

                echo "<tr>";
                echo "<td>$username</td>";
                echo "<td>$name</td>";
                echo "<td>$date</td>";
                echo "<td>$time</td>";

				echo "<td><a href='deletetask.php?anykey=$myid'>Delete Task</a> ||
				<a href='updatetask.php?anykey=$myid'>Update Task</a>
				 </td>";

				 echo "</tr>";

			}
		}else{
			//If no tasks exists for the specific username, the system echoes "NO RECORDS"
			echo "YOU HAVE NO RECORDS OF TO-DO TASKS";
		}
	}
	?>

	</tbody>
</table>
	<center><a class="btn btn-lg btn-primary btn-block text-uppercase" href="Home_Page.php"><b>Back to home page</b></a></center> 
	  </form>  
	</div>
</div>
		
</body>
</html>