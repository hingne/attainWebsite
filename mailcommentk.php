<?php
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$to="hemvirgo@yahoo.com";
$message="<br><br>Comments from website:\n\n";
$message .= "Name: $name \n\n";
$message .= "Email: $email \n\n";
$message .= "Address:\n$address \n\n";
$message .= "Phone: $phone \n\n";
$message .= "Comments: \n";
$message .= "$comments\n\n\n";
echo "<script language='javascript'> ";
if(mail($to,"Comments From Your Site",$message,"From: $email\n")) {
echo " document.write('<br><br><br><font face=verdana size=2><center><b>Thanks for your comments. We will get back to you soon.'); ";
} else {
echo " alert('<br><br><br><font face=verdana size=2><center><b>There was a problem sending the mail. Please check that you filled in the form correctly.'); ";
}
echo "</script>";
?>