<?php
    include('config/init.php');

    //View blog post. This is printing the html/css of the blog post
        $Post = getPost($_REQUEST['BlogPostId']);
            echo "
                <h1>$Post[Title]</h1>
                <body>$Post[Body]</body>";



                
    // we want to show all of the comments
    // submitted by users for this particular page. -->the comments
    // are stored in the database so I'm gonna connect to
    // the database

    // Below  I am setting up the connection to the server. Because
    // the database lives on the same physical server as our php code,
    // we are connecting to "localhost". "cf" and "password"
    // are the username and password

    $con = mysql_connect("localhost","cf","password");

    // The statement above has just tried to connect to the database.
    // If the connection failed for any reason (such as wrong username
    // and or password, we will print the error below and stop execution
    // of the rest of this php script

    if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }

    // We now need to select the particular database that we are working with
    // My database is named cf

    mysql_select_db("cf", $con);

    // now need to setup the SQL query to grab all comments from this page.
    $article_id = $_GET['BlogPostId'];

    // security. We assume that the $article_id
    // is a number, but if someone changes the URL,
    // then they will have the potential to run any code they want in your
    // database. The following code will check to ensure that $article_id is a number.
    // If it is not a number (IE someone is trying to hack your website), it will tell
    // the script to stop executing the page

    if( ! is_numeric($article_id) )
      die('invalid comment id');

    // Now that we have our article id, we need to update the SQL query. This
    // is what it looks like after we update the article number and assign the
    // query to a variable named $query

    $query = "SELECT * FROM `comments` WHERE `BlogPostId` =$article_id";

    // Now that we have the Query, we will run the query against the database
    // and actually grab all of our comments

    $comments = mysql_query($query);
    echo $comments;
    // Before we start writing all of the comments to the screen, let's first
    // print a message to the screen telling our users we're going to start
    // printing comments to the page.

    echo "<h1>Comments</h1>";

    // We are now ready to print our comments! Below we will loop through our
    // comments and print them one by one.

    // The while statement will begin the "looping"

    while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
    {

      // As we loop through each comment, the specific comment we're working
      // with right now is stored in the $row variable.

      // for example, to print the commenter's name, we would use:
      // $row['name']

      // if we want to print the user's comment, we would use:
      // $row['comment']

      // As this is a beginner tutorial, to make our code easier to read
      // we will take the values above (from our array) and put them into
      // individual variables

      $name = $row['name'];
      $email = $row['email'];
      $comment = $row['comment'];
      $timestamp = $row['timestamp'];

      // Be sure to take security precautions! Even though we asked the user
      // for their "name", they could have typed anything. A hacker could have
      // entered the following (or some variation) as their name:
      //
      // <script type="text/javascript">window.location = "http://SomeBadWebsite.com";</script>
      //
      // If instead of printing their name, "John Smith", we would be printing
      // javascript code that redirects users to a malicious website! To prevent
      // this from happening, we can use the htmlspecialchars function to convert
      // special characters to their HTML entities. In the above example, it would
      // instead print:
      //
      // <script type="text/javascript">window.location = "http://SomeBadWebsite.com";</script>
      //
      // This certainly would look strange on the page, but it would not be harmful
      // to visitors

      $name = htmlspecialchars($row['name'],ENT_QUOTES);
      $email = htmlspecialchars($row['email'],ENT_QUOTES);
      $comment = htmlspecialchars($row['comment'],ENT_QUOTES);

      // We will now print the comment to the screen

      echo "  <div style='margin:30px 0px;'>
          Name: $name<br />
          Comment: $comment<br />
          Timestamp: $timestamp
        </div>
      ";
    }

    // At this point, we've added the user's comment to the database, and we can
    // now close our connection to the database:
    mysql_close($con);



?>
<br/>
<br/>

<form method='post'>
  NAME: <input type='text' name='name' id='name' /><br />
  Email: <input type='text' name='email' id='email' /><br />
  Comment:<br />
  <textarea name='comment' id='comment'></textarea><br />
  <input type='hidden' name='articleid' id='articleid' value='<?php echo $_GET['id']; ?>' />
  <input type='submit' value='Submit' />
</form>
