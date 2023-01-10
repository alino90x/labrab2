<?php 


  session_start(); 
 $x = $_GET['MyUsername'];

 
  
if(!isset($_SESSION['UserData']['user_name'])){
  header("location:login.php");
  
  exit;
  }
  
  ?>
  
  
  <?php





echo "Привет, ".$x.".";

?> 
  <br>
  <a href="logout.php">Выход</a>
        