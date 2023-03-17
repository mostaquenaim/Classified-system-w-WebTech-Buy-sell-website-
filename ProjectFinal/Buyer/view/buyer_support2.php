<?php


session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}


?>



<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    </head>
    <body>
        <h2>Your problem has been sent</h2>
        <br>
        <a href="check_profile.php">Go back to profile</a>
    </body>
</html>