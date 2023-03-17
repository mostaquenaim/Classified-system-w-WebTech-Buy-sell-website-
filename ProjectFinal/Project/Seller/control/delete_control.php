<?php
session_start();
include("../model/db.php");
if(isset($_POST["delete"])){
    echo "asdfasdfsdf";
    $mobno=$_POST['mobno'];

    $mydb= new db_seller();
    $myconn = $mydb->openCon();
    $mydb->deleteUser($mobno,"sellerreg",$myconn);
session_destroy();
header("../view/seller_login.php");
}

    
?>