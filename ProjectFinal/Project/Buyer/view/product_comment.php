<?php

include('../model/db.php');
session_start();
if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

if(isset($_GET['id']) && isset($_POST['sub'])){
    $comment=$_POST['comment'];
    $id=$_GET['id'];

    $mydb= new db();
    $myconn = $mydb->openCon();

    $result=$mydb->insertcomment($myconn,'buyer_comment',$_SESSION['username'],$comment, $id);
    //insertcomment($conn,$table, $uname,$comment,$id)
    header("Location: product_comment2.php");
}
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    </head>

    
    <body>
    <a href="check_profile.php">Home</a>
    <form action="" method="post">
        <h3>Write your Comment here</h3>
        <br>
        <textarea name="comment" id="" cols="30" rows="10"></textarea>
        <br><br><button type="submit" name="sub" >Comment </button>
        </form>
    </body>
</html>



