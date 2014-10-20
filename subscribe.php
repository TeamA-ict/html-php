<?php


$email=stripslashes($_POST['email']);



$subject ="Email Subscription for Newsletter";


$message="

Below is a copy of the message submitted:

--------------------------------------------------


Email:               $email;

--------------------------------------------------

Thank you";



// Mail of sender

$mail_from=$email;

$to ='sachila_sunchi@yahoo.com';

$send_contact=mail($to,$subject,$message,$header);


if($send_contact){

echo header("Location: http://sachtest.atwebpages.com/");

}

else {

echo "ERROR";

}




?>
