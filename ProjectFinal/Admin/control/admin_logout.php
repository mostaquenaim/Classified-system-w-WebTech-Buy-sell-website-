<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../view/admin_login.php"); // Redirecting To Home Page
}
?>