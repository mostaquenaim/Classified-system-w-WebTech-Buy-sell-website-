<?php
include("../control/buyer_reg_process2.php");

if(isset($_SESSION['username']))
{
    header("Location: check_profile.php");
}
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">

    </head>
    <body>
    <form action ="" method="POST" enctype ="multipart/form-data">

        <center><br><br><br><br>
        <h1> Your registration is complete!</h1>
        
        <h2>
        <table><tr>
        <td><a href="../view/buyer_login.php">Login</a></td>
    </tr>
<tr><td>
<a href="../view/homepage.php">Go to homepage</a>
</td></tr></table>
        </h2>
        </center>
        
</form>
<!-- <script src="../js/myscript.js"></script> -->
</body>
</html>
