<?php
 include("../model/db.php");

 session_start();

 if(!isset($_SESSION['username'])){
     header("location: buyer_login.php");
 }


        
?>