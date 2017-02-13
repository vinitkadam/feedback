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
<form action="authenticate.php" method="post" autocomplete="off">
	<table>
		<tr>
			<td> EMAIL: </td>
			<td> <input type="email" name='email' maxlength='50' placeholder="abc@xyz.com" required/> </td>
		</tr>
		<tr>
			<td> PASSWORD: </td>
			<td> <input type="password" name='password' placeholder="Password"maxlength='50' required>
			
		</tr>
		<tr>
		
			<td colspan="2" align="center" ><input type='submit' value="LOGIN" /></td>
			<td> <a href="forgotpass.php">Forgot Password</a></td>
		</tr>
		<tr>
			<td colspan="2" align="center"> <a title="Register" href="register.php" > Register now </a></td>
		</tr>
		
		
	</table>
</form>
</center>
</body>

</html>