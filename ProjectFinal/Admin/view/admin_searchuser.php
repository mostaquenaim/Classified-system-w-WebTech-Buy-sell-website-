<?php
session_start(); 

if(empty($_SESSION["email"])) // Destroying All Sessions
{
header("Location:admin_login.php"); // Redirecting To Home Page
}

?>

<html>
<head>
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>
<body background="../uploads/admin/admin_registration_background.jpg">
<form>
<h2><center>Search Admin By Name:</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_homepage.php">Back</a></button></center>
</form>

<form>
<center>
<h4>Enter First Name to search:</h4>
<input type="text" id="email" name="email" placeholder ="Enter First Name...">
</center>
</form>
<center>
    <button onclick="searchUser()">Search</button>
    <p id="mytext"></p>
</center>

<script src="../js/ajax.js"></script>
</body>
</html>