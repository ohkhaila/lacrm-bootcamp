<?php
    include('config/init.php');


    $Post = getPost($_REQUEST['BlogPostId']);
        echo "
            <h1>$Post[Title]</h1>
            <body>$Post[Body]</body>";
?>
<br/>
<br/>
<?php
            include ('comments/manage_comments.php');
            include('comments/formcode.php');
            include ('comments/display_comments.php');
?>
