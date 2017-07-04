<?php
    include('config/init.php');
?>
     <body>
         <h1> Keeping Up with Kay </h1>
            <div id="page1">
                <div id="welcome">
                    <h3>Hello! Welcome!</h3> <br/>
                </div>
                <div id=intro>
                    <h3> Intro Video</h3>
                </div>
            </div>
            <div id="page2">
                <div id="blogPosts">
                    <h3>Latest blog posts</h3><br/>
<?php
    getAllBlogPosts();
 ?>
             </div><br>
            </div>

            <div id="page3">
              <div id="pictures"><h3>pictures</h3><br/>
                <img src="/images/9thward.jpg" alt="9th ward" style="width:304px;height:228px; border-radius:50%;"/>
            </div>

             <div id=subscription> <h3>Join Us!</h3>
                  <form method="POST" action="public/subscribe.php">
                      <p>Name: <input type="text" name="Name" size="20"></p>
                      <p>Email: <input type="text" name="Email" size="20"></p>
                      <p><input type="submit" value="Submit" name="Submit"></p>
                  </form>
            </div>

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
</html>
