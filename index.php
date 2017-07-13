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
                </div><br>
               </div>

               <div id="page3">
                 <div id="pictures"><h3>pictures</h3><br/>
                   <img src="/images/9thward.jpg" alt="9th ward" style="width:304px;height:228px; border-radius:50%;"/>
               </div>
                <div id=subscription> Join Us!
                     <form method="POST" action="public/subscribe.php">
                         <p>Name: <input type="text" name="Name" size="20"></p>
                         <p>Email: <input type="text" name="Email" size="20"></p>
                         <p><input type="submit" value="Submit" name="Submit"></p>
                     </form>
               </div>


           </body>
   </html>

<?php

    getAllBlogPosts();
function insertComments(){
    $result=dbQuery("
    SELECT*
    FROM comments
    WHERE PostId='PostId'");
}
 ?>
