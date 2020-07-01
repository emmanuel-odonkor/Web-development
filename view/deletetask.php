<?php
//include the controller
require('../controllers/taskcontroller.php');

//grab the task_id of the task to be deleted
$myid = $_GET['anykey'];

//cal the function from the taskcontroller.php to delete task
$cdelete = deletetaskctrl($myid);

if ($cdelete) {
	//if a task is successfully deleted, it redirects the listcheck.php page to re-view their changes
	header("location:listcheck.php");

}else{
	//echo failure if datails not successfully deleted
				echo "<div class='alert alert-danger'>
  						<strong>Danger!</strong> Failed to Delete Task.
					 </div>";
				echo "<a href='listcheck.php'>Retry</a>";
	
}

 
?>
