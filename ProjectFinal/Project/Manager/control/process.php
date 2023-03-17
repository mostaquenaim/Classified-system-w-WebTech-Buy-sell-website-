<?php
include("../model/db.php");
if(isset($_POST["submit"]))
{
    $M_fname=$_POST["M_fname"];
    $M_lname=$_POST["M_lname"];
    $Dateofbirth=$_POST["Dateofbirth"];
    $NID=$_POST["nid"]; 
    $Email=$_POST["Email"];
    $Address=$_REQUEST["address"];
    $gender=$_POST["gender"];
    $Password=$_POST["Password"];
    $Branch=$_POST["Br"];
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser($M_fname,$M_lname,$Dateofbirth,$NID,$Email,$Address,$gender,$Password,$Branch,"registration",$myconn);
}
?>