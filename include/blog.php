<?php

//This function is getting a secific blog post from the database
function getPost($PostId) {
    $result=dbQuery("
        SELECT *
        FROM posts
        WHERE PostId = :PostId
        ",
        array(
            "PostId"=>$PostId,
        ));
return $result->fetch();
    }

    function getComments9($PostId) {
        $result=dbQuery("
            SELECT *
            FROM comments
            WHERE BlogPostId = :BlogPostId
            ",
            array(
                "PostId"=>$PostId,
            ));
            
    return $result->fetch();
    }
//This function is getting all blog posts from the database
    function getAllBlogPosts(){
        $result=dbQuery("
            SELECT *
            FROM posts
        ");

    return $result->fetchAll();
    }

// I have  been trying to create a function that creates a link for each new blog post
        //foreach($Post as $indiv){
            // $indiv['title']
        //    echo "
        //    <a href='/public/viewpost.php?$BlogPostId=".$indiv['PostId']."'>".$indiv['Title']."</a>";

        //}
        ?>
