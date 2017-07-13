<?php
function getPost($PostId) {
    $result=dbQuery("
        SELECT *
        FROM posts
        WHERE PostId = :PostId
        ",
        array(
            "PostId"=>$PostId
        ));
return $result->fetch();
    }
    function getAllBlogPosts(){
        $result=dbQuery("
            SELECT *
            FROM posts
        ");
    return $result->fetchAll();
    }
    foreach($Post as $indiv){
        // $indiv['title']
        echo "
        <a href='/public/viewpost.php?$BlogPostId=".$indiv['PostId']."'>".$indiv['Title']."</a>";
    }
?>
