<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location: comment_deleted.php");
}

?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">

    </head>
    <body>
    <form action ="" method="POST" enctype ="multipart/form-data">

        <center><br><br><br><br>
        <h1> Your comment is deleted!</h1>
        
        <h2>
        <table><tr>
        <td><a href="check_profile.php">Home</a></td>
    </tr>
</table>
        </h2>
        </center>
        
</form>
<!-- <script src="../js/myscript.js"></script> -->
</body>
</html>
