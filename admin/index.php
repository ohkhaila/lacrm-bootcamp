<html>
    </br>
    </br>
    </br>
        <title>Admin</title>
        <h1> Admin</h1>
            <a href="/admin/create.php"><h2>New Post</h2></a></li>
    </br>
        <h2>Edit Post</h2>
</html>
<?php

include ('config/init.php');

$Posts = getAllBlogPosts();

foreach($Posts as $Post){
    echo "<a href=/admin/edit_post.php?BlogPostId=$Post[PostId]>$Post[Title] </a><br/>";
//Here we're echoing the link then the text(in this case Title) then closing the a tag
}


?>
