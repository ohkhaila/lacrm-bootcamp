<?php
    include('config/init.php');
    ?>
    <html>
        <head>
            <title>My website</title>
                   <link rel='stylesheet' href='style.css?Time=<?php echo microtime()?>'/>
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            <div class="topnav" id="nav-1">
                <ul>
                    <li><a class= 'link-1' href="/index.php">Home</a></li>
                    <li><a class= 'link-1' href="public/wellness.php">Wellness</a></li>
                    <li><a class= 'link-1' href="public/fun.php">Fun</a></li>
                    <li><a class= 'link-1' href="public/empowerment.php">Empowerment</a></li>
                    <li><a class= 'link-1' href="public/aboutme.php">About</a></li>
                    <li><a class= 'link-1' href="public/resources.php">Resources</a></li>
                </ul>
            </div>
            <h1> Keeping Up with Kay </h1>
            <h2> Hello! Welcome!  </h2>
            <h3> Intro Video</h3>
            <h4> Latest blog posts </h4>
            <h5>pictures</h5>
            <h6>subscription space
                <form method="POST" action="public/subscribe.php">
                    <p>Name: <input type="text" name="Name" size="20"></p>
                    <p>Email: <input type="text" name="Email" size="20"></p>
                    <p><input type="submit" value="Submit" name="Submit"></p>
                </form>


            </h6>

            <a href="https://twitter.com/OhKHAila" class="fa fa-twitter"></a>
            <a href="https://www.snapchat.com/add/yo_jonesy" class="fa fa-snapchat-ghost"></a>
            <a href="https://www.pinterest.com/khailaj43/" class="fa fa-pinterest"></a>
            <a href="https://www.linkedin.com/in/khaila-jones-913699aa/" class="fa fa-linkedin"></a>
            <a href="https://www.youtube.com/channel/UCLN0Ysl72hd0MQgKdrB7sAg" class="fa fa-youtube"></a>
            <a href="https://www.instagram.com/ohkhaila" class="fa fa-instagram"></a>
