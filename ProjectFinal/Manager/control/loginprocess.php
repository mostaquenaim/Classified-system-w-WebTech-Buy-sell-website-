<?php
include("../model/db.php");
session_start();
$error="";


// store session data
if (isset($_POST['submit'])) 

{
if (empty($_POST['Email']) || empty($_POST['Password'])) 

{
$error = "Email or Password is invalid";
}


else
{
    $Email=$_POST["Email"];
    $Password=$_POST["Password"];
    

$connection = new db();
$conobj=$connection->openCon();

$userQuery=$connection->loginuser($conobj,"registration",$Email,$Password);

if ($userQuery->num_rows > 0) {
 echo "hello";
  $_SESSION['Email']=$_POST['Email'];
  $_SESSION['Password']=$_POST['Password'];
  $_SESSION['M_fname']=$_POST['M_fname'];
}


 else {
$error = "Email or Password is invalid";
}
$connection->CloseCon($conobj);

}
}

?>