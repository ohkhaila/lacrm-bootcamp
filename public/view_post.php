<?php
include('config/init.php');

//Get the PostId from $_REQUEST and save it to a $PostId variable
$_REQUEST=array()
//Call getPost, pass it the $PostId, save the returned value to a new variable called $pinkwatercolordesktop
    getPost($PostId);
//Echo the header html
    echo "$REQUEST[0]";
//Echo the post html, inserting values from $Post
    echo "$REQUEST[1]";
//Echo the footer html
    echo "sitFooter";
 ?>
