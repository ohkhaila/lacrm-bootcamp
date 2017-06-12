<?php
function siteHeader(){
    echo"
    <html>
        <head>
            <title>My website</title>
                   <link rel='stylesheet' href='style.css?Time=<?php echo microtime()?>'/>
        </head>";
}
