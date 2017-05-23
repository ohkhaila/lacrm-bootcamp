<?php
include('config/init.php');
?>
<html>
    <head>
        <title>My website</title>
               <link rel='stylesheet' href='style.css?Time=<?php echo microtime()?>'/>
    </head>
    <body style>
        <h1 style> Keeping Up with Kay </h1>
        <div class="topnav" id="myTopnav">
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="public/wellness.php">Wellness</a></li>
                <li><a href="public/fun.php">Fun</a></li>
                <li><a href="public/empowerment.php">Empowerment</a></li>
                <li><a href="public/aboutme.php">About</a></li>
                <li><a href="public/resources.php">Resources</a></li>
            </ul>
        </div>
        <p style></p>
