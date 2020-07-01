<?php

// This Session.php page verfies the session, if no session exists it will redirect the user to login page.
   include('settings/db_cred.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $sql = mysqli_query($db,"SELECT  `username` from `user` where `username` = '$user_check' ");
   
   $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: index.php");
      die();
   }
?>