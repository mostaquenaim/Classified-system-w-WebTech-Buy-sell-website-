<?php
include("../model/admin_db.php");
session_start();
$error="";

if (isset($_POST['submit']))
{ 
    
    if (empty($_POST['name']) || empty($_POST['description']))
    {
        echo "Invalid";
    }
    else
    {
        echo "ok";
        $connection = new db();
        $conobj=$connection->openCon();
        $userQuery=$connection->addPromo($conobj,"promotions",$_POST['name'],$_POST['description']);
        echo $userQuery;
        $connection->CloseCon($conobj); 
    }
}
?>