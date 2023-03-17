<?php
session_start();
// session_destroy();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../view/seller_login.php"); // Redirecting To Home Page
}
// header("Location: ../view/seller_login.php");
?>