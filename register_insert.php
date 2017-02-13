<?php
include "connect.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql_users = " INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

if(mysqli_query($connect, $sql_users))
{
	echo "Registration succesfully inserted in database";
}
else
{
	echo "Registration unsuccesful, please try again";
}
echo "<br>";

echo $sql_users;

?>

