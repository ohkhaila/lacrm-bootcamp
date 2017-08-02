<?php
function getCommentsForPost($BlogPostId){

    $result=dbQuery("
    SELECT *
    FROM comments
    WHERE BlogPostId = :BlogPostId
    ");
    return $result->fetchAll();
}
function saveComment($BlogPostId, $Name, $Email, $Comment){
    $result=dbQuery("INSERT INTO comments (BlogPostId, Name, Email, Comment)
    VALUES (:BlogPostId, :Name, :Email, :Comment)",

    array(
        'BlogPostId'=>$BlogPostId,
        'Name'=>$Name,
        'Email'=>$Email,
        'Comment'=>$Comment,
    ));
    echo "true";
}
//("2","giluh","kjbjkb","kbjhknj");
function getComment($CommentId){

    $result=dbQuery("
    SELECT*
    FROM comments
    WHERE CommentId=CommentId
    ");
    return $result->fetch();
}
