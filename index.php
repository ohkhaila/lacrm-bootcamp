<?php
    include('config/init.php');
    ?>
    <html>
        <head>
            <title>Keeping Up With Kay</title>
                   <link rel='stylesheet' href='style.css?Time=<?php echo microtime()?>'/>
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                   <link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
        </head>
        <body>

            <div id="nav">
                 <ul>
                     <li><a href="#about">About</a></li>
                     <li><a href="#blog">blog</a></li>
                     <li><a href="#extra">extra</a></li>

             </ul>
             <a href="https://twitter.com/OhKHAila" class="fa fa-twitter"></a>
             <a href="https://www.snapchat.com/add/yo_jonesy" class="fa fa-snapchat-ghost"></a>
             <a href="https://www.pinterest.com/khailaj43/" class="fa fa-pinterest"></a>
             <a href="https://www.linkedin.com/in/khaila-jones-913699aa/" class="fa fa-linkedin"></a>
             <a href="https://www.youtube.com/channel/UCLN0Ysl72hd0MQgKdrB7sAg" class="fa fa-youtube"></a>
             <a href="https://www.instagram.com/ohkhaila" class="fa fa-instagram"></a>
            </div>
            <!--This lets the browser know that the link is within the page.
            (Just think about when you use href=”#” causing the page to refresh–
            it’s the same idea. The “#” is still telling the browser to load the
            same page, except when you include text after the # sign, it’s further
            telling the browser to look for link of that name on the same page, and
            scroll to that location).
            So then if you wanted “three” pages in one, you just create an id for each
             page in the html. Then, the first thing you do within that div is insert the
              “id” you specified in the navigation within an anchor tag, like this:-->
            <div id="page1">
              <a id="about" class="smooth"></a>
              <h1> Keeping Up with Kay </h1>
              <h2> Hello! Welcome!  </h2>
              <h3> Intro Video</h3>
                <!--About page content goes here.-->
            </div>

            <div id="page2">
              <a id="blog" class="smooth"></a>
              <h4> Latest blog posts<br/>
                <?php
                    getAllPost();
                 ?>
             </h4><br>
                <!--blog page content goes here.-->
            </div>

            <div id="page3">
              <a id=extra class="smooth"></a>
              <h5>pictures</h5>
              <h6>subscription space
                  <form method="POST" action="public/subscribe.php">
                      <p>Name: <input type="text" name="Name" size="20"></p>
                      <p>Email: <input type="text" name="Email" size="20"></p>
                      <p><input type="submit" value="Submit" name="Submit"></p>
                  </form>

                <!--extra page content goes here.
            So that’s it for your html – just add the
            rest of the html content as you normally would,
            except it will all go in the same file (likely index.html),
            and each “page’s” content will go within the appropriate id
            (#page1, #page2, or #page3).-->
            </div>
            </h6>


        <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>
            <script>

        (KJ)This is supposed to make the scrolling smooth... cant seem to get it to work    $('.smooth').on('click', function() {
                $.smoothScroll({
                    scrollElement: $('body'),
                    scrollTarget: '#' + this.id
                });

                return false;
            });
            </script> -->
        </body>
