<?php
session_start(); 
setcookie("email","visited",time()+86400);
if(isset($_COOKIE["email"]))
{
    echo "<center>";
    echo "Welcome back again!";
    echo "<br>";
}
else
{
    echo "<center>";
    echo "Welcome to sellhobe.com! Have fun! :D";
    echo "<br>";
}
if(empty($_SESSION["email"])) 
{
header("Location:admin_login.php"); // Redirecting To Home Page
}
?>


<html>
<head>
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body background="../uploads/admin/admin_registration_background.jpg">
</div>
<div class="sticky">
<div class="topnav">
  <a href="../view/admin_registration.php">Add New Admin</a>
  <a href="../view/admin_updateuser.php">Edit Profile</a>
  <a href="../view/admin_deleteuser.php">Delete Account</a>
  <a href="../view/admin_adminlist.php">All Admin List</a>
  <a href="../view/admin_searchuser.php">Search Admin</a>
  <a href="../view/admin_showBuyerSeller.php">View Buyer/Seller</a>
  <a href="../view/admin_history.php">Order Buyer/Seller</a>
  <a href="../view/admin_reportlist.php">Report List</a>
  <a href="../view/admin_memberships.php">Memberships</a>
  <a href="../view/admin_promotions.php">Promotions</a>
  <a href="../view/admin_delivery.php">Delivery Status</a>

</div>
</div>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
<center>
    <h1>Hello! Admin :: <?php echo $_SESSION["email"];?></h1>
    <h2>Welcome to sellhobe.com!</h2> 
    <br>
    <img src="../uploads/admin/sellhobe.jpeg" height="300" width="200">
    <br>
    <br>
  <!--button class="button logout_button"><a href="../control/admin_logout.php">Logout</a></button-->
  <!-- jQuery -->
  <br>
  <br>
  <div id="flip_2">Click me to show (Logout)</div>
  <div id="panel_2">
     <button class="button logout_button">
       <a href="../control/admin_logout.php">Logout!</a>
     </button>
  </div>
<br>
<br>
<!-- jQuery -->
<div id="flip">About Us</div>
<div id="panel">sellhobe.com makes buying and selling used items more easier and user friendly along with safe and secure transitions. The user-friendly interface makes selling/buying simpler, by our simple verification process anyone can sell their used products and find buyer withing short period of time and people from all around the country can buy and sell their products from their desired locations.</div>

</center>
<script src="../js/myscript.js"></script>
<script src="../js/jquery.js"></script>

</form>
</body>
</html>