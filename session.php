<?php
   session_start();
   include('connect.php');
   $user_check = $_SESSION['user'];
   
   $ses_sql = mysqli_query($conn,"select * from user where user_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['user_name'];
   $fullname = $row['full_name'];
   $mail = $row['email'];
   $iduser = $row['user_id'];
   
   if(!isset($_SESSION['user'])){
      header("location:login.php");
      die();
   }
?>