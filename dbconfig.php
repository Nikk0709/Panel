<?php
/*session_start();*/
$servername = "localhost";
$username = "root";
$password = "";
$database ="portal";

//create connection

$con = mysqli_connect($servername,$username,$password,$database);
//check connectioin
if ($con) {
	/*echo " Database Connected Successfully";*/
}
else{
	die("connection faild:".mysqli_connect_error());
}

/*echo "<center><h1>STUDENT PROFILE <h1></center>";*/
 ?>