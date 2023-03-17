<?php
session_start(); 

if(empty($_SESSION["email"])) // Destroying All Sessions
{
header("Location:admin_login.php"); // Redirecting To Home Page
}
?>
<html>
<body background="../uploads/admin/admin_registration_background.jpg">
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>
<form>
<h2><center>All Buyer & Seller Informations</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_homepage.php">Back</a></button></center>
</form>

<form>
<center>

<button class="button delivery_button">
  <a href="../view/admin_buyerlist.php">Buyer Informations</a>
</button>

<button class="button delivery_button">
  <a href="../view/admin_sellerlist.php">Seller Informations</a>
</button>


</body>
</html>