<?php
    include("config/init.php");

    function getAllBlogPosts(){
        $result=dbQuery("
            SELECT*
            FROM posts
            ");
        return $result->fetchAll();
        }
    var_dump(getAllBlogPosts());
 ?>
