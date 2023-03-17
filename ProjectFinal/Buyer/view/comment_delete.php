<?php
include ('../model/db.php');
session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
            $urdb= new db();
            $myconn = $urdb->openCon();
        
            $urdb->deleteproductcomment($myconn,'buyer_comment',$id);
            
            header("location: comment_deleted.php");


            
}

?>