<?php
function getCommentsForPost($BlogPostId){

    $result=dbQuery("
    SELECT *
    FROM comments
    WHERE BlogPostId = :BlogPostId
    ", array('BlogPostId' => $BlogPostId));
    return $result->fetchAll();

}
function saveComment($BlogPostId){
    $Name=$_POST['Name'];
     $Email=$_POST['Email'];
     $Comment=$_POST['Comment'];


    $result=dbQuery("INSERT INTO comments (BlogPostId, Name, Email, Comment)
    VALUES (:BlogPostId, :Name, :Email, :Comment)",

    array(
        'BlogPostId'=>$BlogPostId ,
        'Name'=>$Name,
        'Email'=>$Email,
        'Comment'=>$Comment,
    ));
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
