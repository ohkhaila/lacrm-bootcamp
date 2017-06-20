<?php
date_default_timezone_set('America/Chicago');

if(isset($_REQUEST['operation'])){
    echo "The form was submitted";
    var_dump($_REQUEST);
    exit;
}
?>
 <html>
     <head>
         <title>Daily Check In with Miss Jones!</title>
    </head>
    <body>
<!--
            <form action="process.php" method="post">
                 <input type="text" name="firstname">
                 <input type="text" name="lastname" >
                 <input type="submit" name="submit" value="login">
             </form>
        </html>
    -->
<?php /*
         if (isset($_POST['submit'])) {
           echo "Your firstname is " . $_POST['firstname'] . "<br>";

           echo "Your last name is " . $_POST['lastname'] ;
       */
?>
        <h1>Pick your class!<h1>
            <form method='post' action=''>
                <select name='class'>
                    <option value='fox'>fox</option>
                    <option value='owl'>owl</option>
                    <option value='elephant'>elephant</option>
                </select><br />

        How would you rate yourself in the following areas?<br />
            Following Directions <br/>

                    <select name='directions'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />


            Having a Positive Attitude

                    <select name='attitude'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Bringing All Materials

                    <select name='materials'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Controlling off task talking

                    <select name='talking'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Being Respectful to Myself and Others

                    <select name='respect'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Cooperating with Others

                    <select name='cooperation'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Giving My Best Effort

                    <select name='effort'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Turning in work on time

                    <select name='turnin'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />
                    <input type='submit' />
                </form>

            Life Outside of Class<br />

            About how much sleep did you get last night?

                <form method'sleep' action=''>
                <select name='sleep'>
                    <option value='0-3 hours'>0-3 hours</option>
                    <option value='4-6 hours'>4-6 hours</option>
                    <option value='7-9 hours'>7-9 hours</option>
                    <option value='10+hours'>10+ hours</option>
                </select>

                    <input type='submit'>
            </form>

<?php
    /*
        if(isset($_REQUEST['Kayla'])){$}
*/
 ?>
