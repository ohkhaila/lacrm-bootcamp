<?php
date_default_timezone_set('America/Chicago');
include('config/init.php');
?>
 <html>
     <head>
         <title>Daily Check In with Miss Jones!</title>
    </head>
    <body>
        <div id = 'welcome'>
            <form method='get'>
                Name <input type="text" name="firstname">
                 <br>


    Pick your class!

                <select name='Class'>
                    <option value='fox'>fox</option>
                    <option value='owl'>owl</option>
                </select><br />

        How would you rate yourself in the following areas?<br />
            Following Directions <br/>

                    <select name='Directions'>
                        <option value='empty'></option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Having a Positive Attitude

                    <select name='Attitude'>
                        <option value='empty'></option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Bringing All Materials

                    <select name='Materials'>
                        <option value='empty'></option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Being Respectful to Myself and Others

                    <select name='Respect'>
                        <option value='empty'></option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />

            Turning in work on time

                    <select name='TurnIn'>
                        <option value='empty'></option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select><br />
                    <input type='submit' />
                </form>
        </div>
<div id = 'blogPosts'>
<?php
if (isset($_REQUEST['firstname'])) {
  echo "Your firstname is " . $_REQUEST['firstname'] . "<br>";
}

if(isset($_REQUEST['class']) && $_REQUEST['class'] =='fox'){
  echo "You're in the fox class!<br/>";}
    else{
        echo "You're in the owl class!<br/>";}

  if(isset($_REQUEST['Directions']) && $_REQUEST['Directions'] >= 4){
      echo "Master directions follower! <br/>";
  }
      else{
          echo"
          <form method='post'>
            Please tell me more about your experience in class this week. Tell me about things that me and you did that helped and/or did not help you follow directions this week.
              <input name='explain' type 'text'/>
              <input type='submit'/>
              </form>";
      }
      if(isset($_REQUEST['Attitude']) && $_REQUEST['Attitude'] >= 4){
          echo "Awesome Attitude!<br/>";
      }
          else {
              echo"
              <form method='post'>
              Please tell me more about your experience in class this week. Tell me about things that me and you did that helped and/or did not help you follow directions this week.
                  <input name='explain' type 'text'/>
                  <input type='submit'/>
                  </form>";
          }
          if(isset($_REQUEST['Materials']) && $_REQUEST['Materials'] >= 4){
              echo "Thanks for being prepared this week!<br/>";
          }
              else {
                  echo"
                  <form method='post'>
                  Please tell me more about your experience in class this week. Tell me about things that me and you did that helped and/or did not help you follow directions this week.
                      <input name='explain' type 'text'/>
                      <input type='submit'/>
                      </form>";
              }
              if(isset($_REQUEST['Respect']) && $_REQUEST['Respect'] >= 4){
                  echo "Thanks for being a decent human.<br/>";
              }
                  else {
                      echo"
                      <form method='post'>
                      Please tell me more about your experience in class this week. Tell me about things that me and you did that helped and/or did not help you follow directions this week.
                          <input name='explain' type 'text'/>
                          <input type='submit'/>
                          </form>";
                  }
                  if(isset($_REQUEST['TurnIn']) && $_REQUEST['TurnIn'] >= 4){
                      echo "Nice job!";
                  }
                      else {
                          echo"
                          <form method='post'>
                          Please tell me more about your experience in class this week. Tell me about things that me and you did that helped and/or did not help you follow directions this week.
                              <input name='explain' type 'text'/>
                              <input type='submit'/>
                              </form>";
                              postResults($_REQUEST['Directions'], $_REQUEST['FirstName'], $_REQUEST['Attitude'], $_REQUEST['Materials'], $_REQUEST['TurnIn']);

                      }
                      function postResults($FirstName, $Directions, $Attitude, $Materials, $Respect, $TurnIn){
                         echo "$FirstName, $Directions, $Attitude, $Materials, $Respect, $TurnIn";
                     }



                    function insertResults($FirstName, $Directions, $Attitude, $Materials, $Respect, $TurnIn){
                          $result = dbQuery ("INSERT INTO education(FirstName, Directions, Attitude, Materials, Respect, TurnIn)
                          VALUES (:FirstName, :Directions, :Attitude, :Materials, :Respect, :TurnIn)",
                          array(
                              $FirstName=>'Firstname',
                              $Directions=>'Directions',
                              $Attitude=>'Attitude',
                              $Materials=>'Materials',
                              $Respect=>'Respect',
                              $TurnIn=>'Turnin',
                          ));
                      }
                      function getAllResults(){
                          $result = dbQuery("
                          SELECT*
                          FROM education
                          ");
                          return $result->fetchAll();
                      }
 ?>
</div>
</html>
