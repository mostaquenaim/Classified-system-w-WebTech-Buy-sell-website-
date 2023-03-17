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
        <h2>Thanks for buying the product</h2><br>
        <h4>Stay with sellhobe</h4><br><br>
        <a href="check_profile.php">Home</a>
    </body>
</html>