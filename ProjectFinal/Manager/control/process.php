<?php
include("../model/db.php");
if(isset($_POST["submit"]))
{
    $patterfnName="/^[A-Z]+$/";



    $M_fname=$_POST["M_fname"];
    $M_lname=$_POST["M_lname"];
    $Dateofbirth=$_POST["Dateofbirth"];
    $NID=$_POST["nid"]; 
    $Email=$_POST["Email"];
    $Address=$_REQUEST["address"];
    $gender=$_POST["gender"];
    $Password=$_POST["Password"];
    $Branch=$_POST["Br"];
    $flag=true;

    if( empty($Password) || empty($M_fname) || empty($M_lname) || empty($NID) || empty($Email) || empty($Address) || empty($Branch) ){
        $flag=FALSE;

    }

    $patternfName="/^[A-Z]+$/";

    if (!preg_match ($patterfnName, $M_fname)) {  
        $flag=FALSE;
    }

    $patternLName="/^[a-z]+$/";

    if (!preg_match ($patternLName, $M_lname)) {  
        $flag=FALSE;
    }


    

    if($flag){


    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser($M_fname,$M_lname,$Dateofbirth,$NID,$Email,$Address,$gender,$Password,$Branch,"registration",$myconn);
}
}
?>