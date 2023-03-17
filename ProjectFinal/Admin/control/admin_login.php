<?php
include("../model/admin_db.php");
session_start();
$error="";


// store session data
if (isset($_POST['submit'])) 

{
  if (empty($_POST['email']) || empty($_POST['password'])) 
  {
  $error = "email or password is invalid";
  }
  else
  {
    $email=$_POST["email"];
    $password=$_POST["password"];
    $connection = new db();
    $conobj=$connection->openCon();

    $userQuery=$connection->loginuser($conobj,"admin",$email,$password);

    if ($userQuery->num_rows > 0) 
    {
      $_SESSION['email']=$_POST['email'];
      $_SESSION['password']=$_POST['password'];
      $_SESSION['fname']=$_POST['fname'];
    }
    else
    {
    $error = "email or password is invalid";
    }
    $connection->CloseCon($conobj);
  }
}
?>