<?php
    include('config/init.php');
?>
     <body>
         
         <h1> Keeping Up with Kay </h1>
            <div id="page1">
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
                  <!-- <img src="/images/9thward.jpg" alt="9th ward" style="width:304px;height:228px; border-radius:50%;"/>
               --></div>

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
/*function insertComments($Name, $Comment,$CommentId, $Date){
    $result= dbQuery("INSERT INTO comments(Name, Comment, CommentId, Date)
    VALUES (:Name, :Comment, :CommentId, :Date)",
    array(
        'Name'=>$Name,
        'Comment'=>$Comment,
        'CommentId'=>$CommentId,
        'Date'=>$Date,
    ));
}


insertComments("Kay", "here", "0"); */
function getAllComments(){
    $result=dbQuery("
    SELECT*
    FROM comments
    ");
}

/*http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/create-html-form*/
 ?>
