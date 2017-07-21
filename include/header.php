<?php

/*function siteHeader(){
    echo */
    ?>
    <html>
        <head>
            <title>Keeping Up With Kay</title>
                   <link rel='stylesheet' href='/style.css?Time=<?php echo microtime()?>'/>
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
                   <link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet"/>
        </head>
        <body>
            <div id="nav">
                <ul>
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="/view/mindfulness.php">Mindfulness</a></li>
                    <li><a href="/view/physicalwellness.php">Physical Wellness</a></li>
                    <li><a href="/view/fun.php">Fun</a></li>
                    <li><a href="/view/beauty.php">Beauty</a></li>
                    <li><a href="/view/about.php">About</a></li>
                </ul>
             <a href="https://twitter.com/OhKHAila" class="fa fa-twitter"></a>
             <a href="https://www.snapchat.com/add/yo_jonesy" class="fa fa-snapchat-ghost"></a>
             <a href="https://www.pinterest.com/khailaj43/" class="fa fa-pinterest"></a>
             <a href="https://www.linkedin.com/in/khaila-jones-913699aa/" class="fa fa-linkedin"></a>
             <a href="https://www.youtube.com/channel/UCLN0Ysl72hd0MQgKdrB7sAg" class="fa fa-youtube"></a>
             <a href="https://www.instagram.com/ohkhaila" class="fa fa-instagram"></a>
            </div>
        </head>
        <div id="sidebar">
            <h2>
                 Welcome
            </h2>
            <img src="/images/headshot.jpg" alt="headshot" style= "width:304px; height:228px; border-radius:50%"/>
                <p>I'll put more info about myself here. I am a junior at Webster University studying Secondary Education with an emphasis in English Language Arts.</p>

                <div id=subscription>
                        Subscribe and never miss a new blog post!
                    <form method="POST" action="public/subscribe.php">
                         <p>Name: <input type="text" name="Name" size="20"></p>
                         <p>Email: <input type="text" name="Email" size="20"></p>
                         <p><input type="submit" value="Submit" name="Submit"></p>
                    </form>
                </div>
                <br/>
             <h2>
                Be Social!<br/>
                <a href="https://www.instagram.com/ohkhaila" class="fa fa-instagram"></a>
                <a href="https://twitter.com/OhKHAila" class="fa fa-twitter"></a>
                <a href="https://www.snapchat.com/add/yo_jonesy" class="fa fa-snapchat-ghost"></a><br/>
                <a href="https://www.pinterest.com/khailaj43/" class="fa fa-pinterest"></a>
                <a href="https://www.linkedin.com/in/khaila-jones-913699aa/" class="fa fa-linkedin"></a>
                <a href="https://www.youtube.com/channel/UCLN0Ysl72hd0MQgKdrB7sAg" class="fa fa-youtube"></a>
            </h2>

        </div>
    </body>
</br></br>
