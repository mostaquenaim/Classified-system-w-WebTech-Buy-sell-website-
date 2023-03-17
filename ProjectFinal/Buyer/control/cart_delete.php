<?php
session_start();
 include("../model/db.php");

$connection = new db();
$conobj=$connection->openCon();

$sqlstr="DELETE from $_SESSION['username'] WHERE id=''";

        if($conobj->query($sqlstr))
        {
            echo "Deleted <br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
        
?>