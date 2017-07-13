<?php
include("config/init.php");

function insertInventory($Name, $Description, $NumberInStock, $Category){
    $result= dbQuery("INSERT INTO inventory(Name, Description, NumberInStock, Category)
    VALUES (:Name, :Description, :NumberInStock, :Category)",
    /*dbQuery takes a string... nothing is dynamic ':Name' is just text nothing an be changed about it*/
    array(
        'Name'=>$Name,
        'Description'=>$Description,
        'NumberInStock'=>$NumberInStock,
        'Category'=>$Category,
    ));
}
/*this function would go in your include folder so you can call it anywhere*/
insertInventory("test", "more test", 34, 'fake category');

function getAllInventory(){
    $result = dbQuery("
        SELECT*
        FROM inventory
        ");
        return $result->fetchAll();
}
var_dump(getAllInventory());


?>
