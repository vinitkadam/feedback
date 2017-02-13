<?php

include 'connect.php';


?>

<html>
<head>
<title>forgot pass</title>
</head>

<body>
<center>
<img src="logo.png" alt="logo" height="100px" width="400px"/>
</center>
<center>
<hr width = 30%> 
<form action="randomno.php" method="post" autocomplete="off">
	<table>
		<tr>
			<td> EMAIL: </td>
			<td> <input type="email" name='email' maxlength='100' placeholder="abc@xyz.com" required/> </td>
		</tr>
		<tr>
		
			<td colspan="2" align="center" ><input type='submit' value="SUBMIT" /></td>
		</tr>
		<tr>
		<td colspan="2" align="center"> <a href="changepass.php"><input  type="button" 
                                                    value="enter OTP here"/></a>
		</td>			
		
		</tr>
	</table>
</form>
</center>
<body>

<html>