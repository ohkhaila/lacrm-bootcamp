<?php

$recipient = "enter the lists email address here";
$subject = "Subscribe";
$location = "enter the URL of the result page here";
$sender = $recipient;
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");
header( "Location: $location" );
?>
