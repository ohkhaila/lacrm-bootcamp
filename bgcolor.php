<?php

date_default_timezone_set('America/Chicago');

    function change($color){
        return "background-color:$color";
    }




    echo "
        <form method 'get' 'action''>
            <input name='color' type='text'/>
            <input type='submit'/>
            </form>
            ";

    if(isset($_REQUEST['color'])){
        $Color = $_REQUEST['color'];
        echo"
        <style>
        body {
            background-color:";

        echo $Color;

        echo "
        }
        </style>
        ";
    }
    else {
        echo"
        <style>
        body{
            background color: #0000ff
        }
        </style>
        ";
    }

 ?>
