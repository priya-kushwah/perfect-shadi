<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$cast= $_POST['cast'];
$city= $_POST['city'];

$to = "hi@minbo.ai";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone . "\r\n cast =" . $cast. ;
$headers = "From: noreply@minbo.ai" . "\r\n" .
"CC: perfectshadi50@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>