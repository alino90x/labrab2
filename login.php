<?php 
   
  session_start();

   if(isset($_POST['Submit'])){
  
  
   $logins = array('Ali' => '123456');

  $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
 
  if (isset($logins[$user_name]) && $logins[$user_name] == $password){
  
   
  $_SESSION['UserData']['user_name']=$logins[$user_name];
  header("location:index.php?MyUsername=$user_name");
  exit;
  } else {
  
  
  
  $msg="<span style='color:red'>Неверные учетные данные</span>";
  }
  }
 


?>
  <form action="" method="POST" name="Login_Form">
  
  <?php if(isset($msg)){?>
  
  <?php echo $msg;?>
 
  <?php } ?>
 
 <center><h3>Login</h3></center>
 <br>
 <center><p>Username : ALi</p></center>
  <center><p>Password : 123456</p></center><br>
  <center><label class="form-label" for="favcolor">Username : <input name="user_name" type="text" class="Input"></label></center><br>
  <center><label class="form-label" for="favcolor">Password : <input name="password" type="password" class="Input"></label></center><br>
 <center><input name="Submit" type="submit" value="Login" class="Button"></center>
 
  </form>
  