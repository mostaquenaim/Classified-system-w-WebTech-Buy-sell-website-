<?php

include("../model/db.php");

if(isset($_POST["submit"])){

    $report=$_POST['report'];

    $mydb= new db_seller();
    $myconn = $mydb->openCon();
    $mydb->report($report,"report",$myconn);
}

?>