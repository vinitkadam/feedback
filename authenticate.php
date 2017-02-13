<?php
include 'connect.php';

$email=$_POST['email'];
$password=$_POST['password'];

$sql_users="SELECT * FROM users WHERE email='$email' AND password='$password'";

$result_users = mysqli_query($connect, $sql_users);

if(mysqli_num_rows($result_users)<=0)
{	echo "no user found with such email id and password";

}
else
{
	echo"user login succesful";
	$row_users = mysqli_fetch_array($result_users);

	session_start();
	$_SESSION['email']=$email;;
	$_SESSION['name']=$row_users['userid'];
	$_SESSION['userid']=$row_users['userid'];
}

?>