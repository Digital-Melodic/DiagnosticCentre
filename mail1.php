<?php
$fname=$_POST['f_name'];
$phone=$_POST['f_mobile'];
$service=$_POST['f_service'];
if($service==1){
	$service="Bio-Chemistry";
}elseif($service==2){
	$service="Endocrinology";
}elseif($service==3){
	$service="Hematology";
}elseif($service==4){
	$service="Histopathology";
}elseif($service==5){
	$service="Serology";
}elseif($service==6){
	$service="ECG";
}
$email="info@anikdiagnosticcentre.com";
$to="info@anikdiagnosticcentre.com";
$subject="Mail from Contact Page";
$txt="Full Name = ".$fname . "\r\n Phone Number = " . $phone . "\r\n Message = " . $service;
$header=$email;
if($email!=NULL)
{
    mail($to,$subject,$txt,$header);
}
header("Location:index.html");
?>