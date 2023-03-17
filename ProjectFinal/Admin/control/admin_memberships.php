<?php
session_start();
include("../model/admin_db.php");
if(isset($_POST["update"]))
{
    $id=$_POST['id'];
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->deleteUser($id,"memberships",$myconn);
    session_destroy();
    header("../view/admin_login.php");
}
?>