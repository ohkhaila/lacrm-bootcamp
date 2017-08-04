<?php
include ('init.php');

$Post = getPost($_REQUEST['BlogPostId']);
    echo "
        <h1>$Post[Title]</h1>
        <body>$Post[Body]</body>";

 ?>
