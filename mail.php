<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['emailaddress'];
$phone=$_POST['phonenumber'];
$message=$_POST['message'];
$to="info@anikdiagnosticcentre.com";
$subject="Mail from Contact Page";
$txt="First Name = ".$fname . "\r\n Last Name = " . $lname . "\r\n Email = " . $email . "\r\n Phone Number = " . $phone . "\r\n Message = " . $message;
$header=$email;
if($email!=NULL)
{
    mail($to,$subject,$txt,$header);
}
header("Location:contact-us.html");
?>