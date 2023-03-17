<?php
session_start(); 
//include('../model/admin_db.php');
include('../control/admin_promotions.php');
?>

<html>
<head>
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>
<body background="../uploads/admin/admin_registration_background.jpg">
<form action="" method="post">
<h2><center>Promotions:</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_homepage.php">Back</a></button></center>
<hr size="2" width="100%">
<center><button><a href="../view/admin_currentpromotions.php">Current Promotions</a></button></center>
</form>

<form action="" method="post">
<center>
    Promo Name
    <br>
    <input type="text" name="name">
    <br>

    Description
    <br>
    <input type="text" name="description">
    <br>
    <br>
    <input type="submit" name="submit" value="submit">
    <br>
    <input type="reset" name="reset" value="reset">

</center>
</form>
</div>

</body>
</html>