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
<h2><center>Check Delivery Listings</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_homepage.php">Back</a></button></center>
</form>

<form>
<center>

<button class="button delivery_button">
  <a href="../view/admin_delivery_courier.php">Courier Delivery Listings</a>
</button>

<button class="button delivery_button">
  <a href="../view/admin_delivery_cod.php">Cash on Delivery Listings</a>
</button>


</body>
</html>