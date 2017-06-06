<?php
date_default_timezone_set('America/Chicago');
  function add($num1, $num2){
    return $num1 + $num2;
}

                echo"
                    <form method 'get' action=''>
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


                if(isset($_REQUEST['num1'])){$result6=add($_REQUEST['num1'],$_REQUEST['num2']);
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
                }


                $c3 = AddColor ('color1', 'color2');
                    echo $c3;
                 function AddColor($color1, $color2){
                    if ($color1 == 'red' && $color2 == 'yellow'){
                    return $c3;
}
                    if ($color1 == 'yellow' && $color2 == 'red'){
                        return 'orange';
                    }
                    if ($color1 == 'blue' && $color2 == 'yellow'){
                        return 'orange';
                    }
                    if ($color1 == 'yellow' && $color2 == 'blue'){
                        return 'orange';
                    }
                    if ($color1 == 'blue' && $color2 == 'red'){
                        return 'orange';
                    }
                    if ($color1 == 'red' && $color2 == 'blue'){
                        return 'orange';
                    }
                    if ($color1 == 'blue' && $color2 == 'red'){
                        return 'orange';
                    }
                    if ($color1 == 'blue' && $color2 == 'blue'){
                        return 'orange';
                    }
                    if ($color1 == 'red' && $color2 == 'red'){
                        return 'orange';
                    }
                    if ($color1 == 'yellow' && $color2 == 'yellow'){
                        return 'orange';
                    }
}

function change($color){
    return "background-color:$color";
}


                echo"
                	 <form method 'get' action=''>
                		 <select name= 'color1'>
                			 <option value= 'red'>red</option>
                			 <option value= 'yellow'>yellow</option>
                			 <option value= 'blue'>blue</option>
                		 </select>
                		 <select name= 'color2'>
                         <option value= 'red'>red</option>
                         <option value= 'yellow'>yellow</option>
                         <option value= 'blue'>blue</option>
                		 </select>
                		 <input type= 'submit'/>
                		 </form>
                		 ";


                if(isset($_REQUEST['color1'])){$result=Addcolor($_REQUEST['color1'],$_REQUEST['color2']);
                    if($_REQUEST['color1']=='red' && $_REQUEST['color2']=='red'){
                        $c3= $color;
                        $color = $_REQUEST['color1']=='red' && $_REQUEST['color2']=='red';
                        echo"
                            <style>
                                body {
                                background-color:#ff0000;

                        echo $color;
                            </style>
                            ";
                    }
                    else if($_REQUEST['color1']=='blue' && $_REQUEST['color2']=='blue'){
                        $c3= $color;
                        $color = $_REQUEST['color1']=='blue' && $_REQUEST['color2']=='blue';
                        echo"
                            <style>
                                body {
                                background-color:#0000ff;

                        echo $color;
                            </style>
                            ";
                    }
                    else if($_REQUEST['color1']=='yellow' && $_REQUEST['color2']=='yellow'){
                        $c3= $color;
                        $color = $_REQUEST['color1']=='yellow' && $_REQUEST['color2']=='yellow';
                        echo"
                            <style>
                                body {
                                background-color:#ffff00;

                        echo $color;
                            </style>
                            ";
                    }
                    else if($_REQUEST['color1']=='red' && $_REQUEST['color2']=='blue'){
                        $c3= $color;
                        $color = $_REQUEST['color1']=='red' && $_REQUEST['color2']=='blue';
                        echo"
                            <style>
                                body {
                                background-color:#7d26cd;

                        echo $color;
                            </style>
                            ";
                    }
                    else if($_REQUEST['color1']=='blue' && $_REQUEST['color2']=='red'){
                        $c3= $color;
                        $color = $_REQUEST['color1']=='blue' && $_REQUEST['color2']=='red';
                        echo"
                            <style>
                                body {
                                background-color:#7d26cd;

                        echo $color;
                            </style>
                            ";
                    }
                    else if($_REQUEST['color1']=='red' && $_REQUEST['color2']=='yellow'){
                        $c3= $color;
                        $color = $_REQUEST['color1']=='red' && $_REQUEST['color2']=='yellow';
                        echo"
                            <style>
                                body {
                                background-color:#ee4000;

                        echo $color;
                            </style>
                            ";
                    }
                    else if($_REQUEST['color1']=='yellow' && $_REQUEST['color2']=='red'){
                        $c3= $color;
                        $color = $_REQUEST['color1']=='yellow' && $_REQUEST['color2']=='red';
                        echo"
                            <style>
                                body {
                                background-color:#ee4000;

                        echo $color;
                            </style>
                            ";
                    }
                    else if($_REQUEST['color1']=='yellow' && $_REQUEST['color2']=='blue'){
                        $c3= $color;
                        $color = $_REQUEST['color1']=='yellow' && $_REQUEST['color2']=='blue';
                        echo"
                            <style>
                                body {
                                background-color:#4cbb17;

                        echo $Color;
                            </style>
                            ";
                    }
                    else if($_REQUEST['color1']=='blue' && $_REQUEST['color2']=='yellow'){
                        $c3=$color;
                        $color = $_REQUEST['color1']=='blue' && $_REQUEST['color2']=='yellow';
                        echo"
                            <style>
                                body {
                                background-color:#4cbb17;

                        echo $Color;
                            </style>
                            ";
                    }
                    echo "$c3";
                }


 ?>
