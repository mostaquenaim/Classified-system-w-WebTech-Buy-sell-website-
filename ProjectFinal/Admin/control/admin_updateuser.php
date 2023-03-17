<?php
// session_start();
$error="";

if (isset($_POST['update']))
 { 
if (empty($_POST['fname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->openCon();
$userQuery=$connection->UpdateUser($conobj,"admin",$_SESSION["email"],$_POST['fname'],$_POST['lname'],$_POST['age'],$_POST['nid'],$_POST['address'],$_POST['password'],$_POST['mobile'],$_POST['gender'],$_SESSION['email']);
echo $userQuery;
$connection->CloseCon($conobj);
}
}
?>