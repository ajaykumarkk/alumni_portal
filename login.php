<?php
/*include_once('config.php');

$user=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM users where username='".$user."' and password='".$password."'";

$res=mysqli_query($con,$query);

if($res){
    echo "success";
    header("location: http://iidt.edu.in");
}else{
    echo "wrong password";
}
*/

include_once('config.php');
session_start();

$user=$_POST['username'];
$password=hash($_POST['password']);

$email = test_input($_POST["username"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  echo "User Name Error";
}
else
{
	$query="SELECT * FROM users where username='".$user."' and password='".$password."'";

	$res=mysqli_query($con,$query);
	$rowcount=mysqli_num_rows($res);

	if($rowcount>0){
	  header ("location: http://iidt.edu.in");
	}else{
		echo "wrong password";
	}
}