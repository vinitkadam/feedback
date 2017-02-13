<?php
include 'connect.php';
?>

<html>
<head>
	<title> Photoz </title>
</head>

<body>
<center>
<img src="logo.png" alt="logo" height="100px" width="400px"/>
</center>
<center>
<hr width = 30%> 
<form action="updatepass.php" method="post" autocomplete="off">
	<table>
		<tr>
		<td>EMAIL:</td>
		<td><input type="email" name="email" required/></td>
		</tr>
		
		<tr>
		<td>OTP:</td>
		<td><input type="text" name="otp" required /></td>
		</tr>
		
		<tr>
			<td>NEW PASSWORD </td>
			<td> <input type="password" name='pass1' maxlength='50'  maxlength='50' required/> </td>
		</tr>
		
		<tr>
			<td>CONFIRM PASSWORD: </td>
			<td> <input type="password" name='pass2' maxlength='50' required>
			
		</tr>
		<tr>
		<td></td>
		<td ><input type="submit" value="SUBMIT" /></td>
		</tr>
		
	</table>
</form>
</center>
</body>

</html>