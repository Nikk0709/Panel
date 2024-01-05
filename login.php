<?php
error_reporting(0);
session_start();
$usname=$_POST['username'];
$password=$_POST['pswd'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'portal');
$q="select * from registerat where Scholarnumber='$usname' AND psw='$password'";
$result=mysqli_query($con,$q);
$num =mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num==1)
{
$_SESSION['username']=$row['username'];
header('location:index.php');}
else
{
  // header('location:http://localhost/Blood/index.php'); 
  // print "wrong password";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="loginbox">
<h2>Login Form</h2>
<form action="" method="post">
  <div class="imgcontainer">
    <img src="image/logo.jpg" alt="logo" class="logo">
  </div>
  

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="pswd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pswd" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <span class="psw"> <a href="index.php">Forgot password?</a></span>
  </div>

 
</form>
</div>

</body>
</html>