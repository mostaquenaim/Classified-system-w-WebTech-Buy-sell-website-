<?php
session_start();
include("../model/admin_db.php");
include("../view/admin_reportlist.php");
if(isset($_POST["delete"]))
{
    $id=$_POST['id'];
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->deleteReport($id,"buyer_report",$myconn);
    session_destroy();
    header("../view/admin_login.php");
}
?>