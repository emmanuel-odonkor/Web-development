<?php

session_start();
require('../controllers/taskcontroller.php');

//gets the task_id of the task to be updated when the user clicks on the "Update task" link
$id = (isset($_GET['anykey']) ? $_GET['anykey'] : '');
$task = getTask($id);

//displays in the respective sections, information about that task which is selected and about to be updated
if($task){
foreach ($task as $value) {
  
  $tname=$value['task_name'];
  $tdate=$value['date'];
  $ttime=$value['time'];
  $tid = $value['task_id'];
  $_SESSION['id'] = $tid;

}
}

?>

 <?php
//check if the "UPDATE TASK" button was click
 if (isset($_POST['uupdate'])){
    //grab form data and stores them in variables
    $Tname = $_POST['utask'];
    $Tdate = $_POST['udate'];
    $Ttime = $_POST['utime'];
  

    //call function from taskcontroller.php to update a task
    $updatetask =  updatetaskctrl($Tname, $Tdate, $Ttime,$_SESSION['id']);

    //redirects the user to the listcheck.php page for the user to view their changes
    if ($updatetask) {
        $_SESSION['response']= "<strong style='font-size:16px;'>Task Successfully Updated. Click on 'VIEW CHANGES' button to view the update you made to your tasks</strong>";
        $_SESSION['res_type'] = 'success';
        //header("location: listcheck.php");
    }else{
      //echoes an error if a task failed to update
        $_SESSION['response']= "Failed to Update Task";
        $_SESSION['res_type'] = 'danger';
    }
}
     ?>

     <?php if (isset($_SESSION['response'])): ?>
      <div class="alert alert-<?php echo $_SESSION['res_type'];?>">
        <?php
        echo $_SESSION['response'];
        unset($_SESSION['response']);
         ?>
      </div>
    <?php endif ?>
     
<!DOCTYPE html>
<html>
<head>
	<title>To-Do-List--Update task</title>
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
        height: 700px;
        margin-bottom: 9px;
      }
  </style>
</head>
<body>
  <div class="login_bg">
  <div class="login-form">
    <!--This form already presents information about the stored task and awaits updates from the user -->
      <form action="" method="post">
          <h2 class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="color:white;">ToDoList App</h2> 
          <h2 class="text-center"><b>UPDATE TASK</b></h2>       
          <div class="form-group">
            <label style="font-size: 13px;">New Task</label>
              <input type="text" class="form-control" placeholder="Enter the task to do" value="<?php echo isset($tname)? $tname: ''; ?>" id="tid" style="font-size: 16px;" required="required" name="utask" style="width: 250px;">
          </div>
          <hr />
          <div class="form-group">
            <label style="font-size: 13px;" >New Date</label>
              <input type="date" class="form-control" placeholder="Enter the date to do task" value="<?php echo $tdate; ?>" required="required" style="font-size: 16px;" name="udate" style="width: 250px;">
          </div>
          <hr />
          <div class="form-group">
            <label style="font-size: 13px;">New time in 12 hour format</label>
              <input type="time" class="form-control" placeholder="Enter time(In 12 hour format)" value = "<?php echo $ttime; ?>" required="required" style="font-size: 16px;" name="utime" style="width: 250px;">
          </div>
          <br />
          <div class="form-group">
              <center><button type="submit" onclick="taskvalidation()" name="uupdate" class="btn btn-primary btn-block">UPDATE TASK</button></center>
          </div>
      
              <center><a class="btn btn-lg btn-primary btn-block text-uppercase" href="listcheck.php"><b>CLICK TO VIEW CHANGES</b></a></center>      
      </form>
    </div>
</div>
   
          
</body>
</html>
