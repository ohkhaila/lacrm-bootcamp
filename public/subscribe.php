<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "enter the lists email address here";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "enter the URL of the result page here";

## FORM VALUES ##


$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## Important: The php script will not work on your local computer - you need to upload it to your web server. ##

header( "Location: $location" );
?>
