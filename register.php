<?php
include 'connect.php';
?>

<html>
<body>
<center><img src="logo.png" alt="logo" height="100px" width="400px"/> </center>

<center>
<hr width = 30%> 

<form action="register_insert.php" method="post" autocomplete="off">
	<table>
		<tr>
			<td>NAME:</td>
			<td><input type='text' name='name' placeholder="Eg. Vinit Kadam"required/> </td>
		</tr>
		<tr>
			<td> EMAIL: </td>
			<td> <input type="email" name='email' maxlength='50' placeholder="abc@xyz.com" required/> </td>
		</tr>
		<tr>
			<td> PASSWORD: </td>
			<td> <input type="password" name='password' placeholder="Password" maxlength='50' required>
		</tr>
		<tr>
			<td colspan="2" align="center" ><input type='submit' value="REGISTER" /></td>
		</tr>
	</table>
</form>

</body>
</html>
