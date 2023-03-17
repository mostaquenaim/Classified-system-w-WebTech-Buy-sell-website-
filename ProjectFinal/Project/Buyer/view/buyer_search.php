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
    <a href="check_profile.php">HOME</a><br>
    
    <label>find product</label>

<input type="text" id="uname" name="uname" >
<button onclick="showmyuser()">Search</button>



<p id="mytext"></p>
<script src='../js/myscript.js'></script>
    </body>
</html>
