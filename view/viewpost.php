<?php
    include('config/init.php');

    //View blog post. This is printing the html/css of the blog post
        $Post = getPost($_REQUEST['BlogPostId']);
            echo "
                <h1>$Post[Title]</h1>
                <body>$Post[Body]</body>";

?>
<html>
</br>
    <form method='post' name='comment'>
        NAME: <input type = 'text' name='Name' id='Name'/><br/>
        Email:<input type = 'text' name='Email' id='Email'/><br/>
        Comment:<br/>
        <input type="hidden" name="getCommentsForPost" value="true"/>
        <textarea name='Comment' id='Comment'></textarea>
        <input type='submit' value='Submit'/>
    </form>"
</html>
<h1> Comments</h1>
<?php
//saving comments to database
getCommentsForPost('BlogPostId');
$BlogPostId= $_REQUEST['BlogPostId'];
$Name=$_REQUEST['Name'];
$Email=$_REQUEST['Email'];
$Comment=$_REQUEST['Comment'];
saveComment($BlogPostId, $Name, $Email, $Comment);

    //Displaying comments
$Comments=getCommentsForPost('BlogPostId');
foreach ($Comments as $Comment){
    //$ShowComment= getComment($_REQUEST['CommentId']);
    echo "
    <h2>$Comment[Name]</h2>
    <body>$Comment[Comment]</body>";
}
