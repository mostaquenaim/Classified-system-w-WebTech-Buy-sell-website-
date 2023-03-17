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
       <h3>You comment has been posted</h3>  <br><br>
       <a href="check_profile.php">Home</a>
    </body>
</html>