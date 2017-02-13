<?php

include 'connect.php';

$email=$_POST['email'];
$otp=$_POST['otp'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];


$sql_users="SELECT * FROM users WHERE email='$email' AND otp='$otp'";

$result_users = mysqli_query($connect, $sql_users);

if(mysqli_num_rows($result_users)<=0)
{	
	echo "ERROR:wrong email or otp .try again";

}
else
{

if($pass1==$pass2)
{
	$sql_changepass = "UPDATE users SET password='$pass1' WHERE email='$email'";
	mysqli_query($connect,$sql_changepass);
	echo 'password changed succesfully. Login <a href="index.php">here</a>';
	$otp_null="UPDATE users SET otp=null WHERE email='$email' AND otp='$otp'";
	mysqli_query($connect,$otp_null);
}
else
{
	echo 'passwords did not match.Please again <a href="changepass.php">here</a>';
}
	
}




?>
