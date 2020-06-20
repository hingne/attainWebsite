<?php
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];
$Design=$_POST['Design'];
$Flash=$_POST['Flash'];
$Banner=$_POST['Banner'];
$Ecard=$_POST['Ecard'];
$to="hemvirgo@yahoo.com";
$message="$name have asked you a question. He said:\n$comments\n\n";
$message .= "\nNeeds more information on: $Design, $Flash, $Banner, $Ecard\n\n";
$message .= "\nTheir e-mail address was: $email";
echo "<script language='javascript'> ";
if(mail($to,"Comments From Your Site",$message,"From: $email\n")) {
echo " alert('Thanks for your comments. We will get back to you soon.'); ";
} else {
echo " alert('There was a problem sending the mail. Please check that you filled in the form correctly.'); ";
}
echo " history.go(-2); ";
echo "</script>";

?>