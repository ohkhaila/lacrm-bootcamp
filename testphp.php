<?php
date_default_timezone_set('America/Chicago');
    function add($num1, $num2){
    return $num1 + $num2;
}

                echo"
                    <form method='post' action=''>
                        <input name='num1' type='text' />
                        <select name= 'operation'>
                            <option value= 'add'>+</option>
                            <option value= 'subtract'>-</option>
                            <option value= 'multiply'>*</option>
                            <option value= 'divide'>/</option>
                        </select>
                        <input name='num2' type 'text'/>

                        <input type= 'submit'/>
                        </form>
                        ";


    if(isset($_REQUEST['num1'])){
        $result6=add($_REQUEST['num1'],$_REQUEST['num2']);
        if($_REQUEST['operation']=='add'){
             $y= $_REQUEST['num1'] + $_REQUEST['num2'];
        }
        else if($_REQUEST['operation']=='subtract'){
             $y= $_REQUEST['num1'] - $_REQUEST['num2'];
        }
        else if($_REQUEST['operation']=='multiply'){
             $y= $_REQUEST['num1'] * $_REQUEST['num2'];
        }
        else if($_REQUEST['operation']=='divide'){
             $y= $_REQUEST['num1'] / $_REQUEST['num2'];
        }
        echo "<h1>The result is $y </h1>";
        InsertNum($_REQUEST['num1'], $_REQUEST['num2']);
    }
    function InsertNum($num1, $num2){
    echo "$num1, $num2";
    }

/*
                function change($color1, $color2)
                {
                $color1 = array('red','green','blue');
                /*arrays start at 0. so 'red' is 0, 'greem is 1'*/
/*                $color2 = array('white', 'yellow','orange');
                echo $color2[2]


                echo"
                	 <form method 'get' action=''>
                		 <select name= 'color1'>
                			 <option value= 'red'>red</option>
                			 <option value= 'purple'>purple</option>
                			 <option value= 'yellow'>yellow</option>
                			 <option value= 'orange'>orange</option>
                		 </select>
                			 <select name= 'add'>
                				 <option value= 'add'>+</option>
                			 </select>
                		 <select name= 'color'>
                			 <option value= 'white'>white</option>
                			 <option value= 'blue'>blue</option>
                			 <option value= 'black'>black</option>
                			 <option value= 'green'>green</option>
                		 </select>
                		 <input type= 'submit'/>
                		 </form>
                		 ";

*/



 ?>
