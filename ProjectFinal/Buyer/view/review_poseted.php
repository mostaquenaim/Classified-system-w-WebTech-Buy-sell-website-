<?php

session_start();

include('../model/db.php');


if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}



?>

<html>
    <head>

    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
        
    </head>
    <body>

    <h1>Your review has been posted</h1><br><br>
    <a href="check_profile.php"></a>
            
        </body>
</html>