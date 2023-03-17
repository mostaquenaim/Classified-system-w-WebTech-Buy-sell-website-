<?php

include("../model/db.php");
// if(isset($_POST["submit"]))
// {
    $fname=$_POST["name"];
    $lname=$_POST["size"];
    $uname=$_POST["color"];
    $email=$_POST["price"];
    $id = $_POST["id"]; 

    $mydb= new db_seller();
    $myconn = $mydb->openCon();
    $mydb->listing($name,$size,$color,$price,$id,"product",$myconn);

    // $mydb= new db();
    // $myconn = $mydb->openCon();
    // $mydb->viewproduct($fname,$lname,$uname,$email,$pass,$id,"sellerreg",$myconn);
// }




?>