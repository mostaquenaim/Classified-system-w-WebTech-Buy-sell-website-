<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}
include('../model/db.php');

    $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->addtocart($myconn,'buyer_cart',$_SESSION['uname'], , $product_name);

?>