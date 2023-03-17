<?php

include('../model/db.php');
session_start();
if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

if(isset($_GET['id']) && isset($_POST['report'])){
    $report=$_POST['reports'];
    $id=$_GET['id'];

    $mydb= new db();
    $myconn = $mydb->openCon();

    $result=$mydb->reportproduct($myconn,'buyer_report', $id,$_SESSION['username'],$report);

    header("Location: product_report2.php");
}
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    </head>

    
    <body>
    <a href="check_profile.php">Home</a>
    <form action="" method="post">
        <h3>Write repoting reason</h3>
        <br>
        <textarea name="reports" id="" cols="30" rows="10"></textarea>
        <br><br><button type="submit" name="report" >Send </button>
        </form>
    </body>
</html>



