<?php

// include('../model/db.php');

 $error="";

if (isset($_POST['update']))
 { 
if (empty($_POST['M_fName']) || empty($_POST['Email'])) {
$error = "input given is invalid";
}
else
{
    echo "hello";
$connection = new db();
$conobj=$connection->openCon();

$userQuery=$connection->UpdateUser($conobj,"registration",$_SESSION["Email"],$_POST['M_fName'],$_POST['gender']);

echo $userQuery;
$connection->CloseCon($conobj);

}
}


?>