<?php
session_start();
include("../model/admin_db.php");
if(isset($_POST["delete"]))
{
    $email=$_POST['email'];
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->deleteUser($email,"admin",$myconn);
    session_destroy();
    header("../view/admin_login.php");
}
?>