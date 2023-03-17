
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
       <h2> Your report has been submitted </h2> <br><br>
       <a href="check_profile.php">Home</a>
    </body>
    </html>