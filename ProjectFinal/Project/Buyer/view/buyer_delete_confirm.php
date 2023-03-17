<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

include('../model/db.php');

    $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->deletebuyer($myconn,'buyer_info',$_SESSION['username']);

    session_destroy();
    header("Location: buyer_login.php");



?>