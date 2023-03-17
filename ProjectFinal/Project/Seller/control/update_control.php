<?php

include("../model/db.php");
if(isset($_POST["submit"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $uname=$_POST["uname"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $mobno=$_POST["mobno"];

    // $id = $_POST["id"]; 

    $mydb= new db_seller();
    $myconn = $mydb->openCon();
    $mydb->updateUser($fname,$lname,$uname,$email,$pass,$mobno,"sellerreg",$myconn);
}


?>