
<html>
<body>

<?php
include 'connect.php';

require 'PHPMailer/PHPMailerAutoload.php';

$otp=(rand(10000000000000,99999999999999999));

$email=$_POST['email'];
//$email="abc@xyz.com";
$sql_users = "UPDATE users SET otp='$otp' WHERE email='$email'";
mysqli_query($connect, $sql_users);
if(mysqli_query($connect, $sql_users))
{
	
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');


//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();


//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 3;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
//$mail->Host = gethostbyname('smtp.gmail.com');

$mail->Host = 'smtp.mail.yahoo.com';
// use
// $mail->Host = gethostbyname('smtp.mail.yahoo.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "vinitkadam03@yahoo.com";

//Password to use for SMTP authentication
$mail->Password = "coldfusion@1997";

//Set who the message is to be sent from
$mail->setFrom('vinitkadam03@yahoo.com', 'Vinit Kadam');

//Set an alternative reply-to address
//$mail->addReplyTo('vinitkadam03@yahoo.com');

//Set who the message is to be sent to
$mail->addAddress($email);

//Set the subject line
$mail->Subject = 'OTP for rait login';
/*
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
*/

$mail->Body    = 'Enter this otp to change password '.$otp;

//Replace the plain text body with one created manually
$mail->AltBody = 'otp:'.$otp;
/*
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');
*/
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "otp sent!";
	echo "Enter otp <a href=changepass.php>here</a>";

}
}
else
{
	echo "wrong email id. Try again";
}
	

?>

</body>
</html>