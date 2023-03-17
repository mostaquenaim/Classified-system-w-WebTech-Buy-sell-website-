<?php
session_start(); 
if(empty($_SESSION["uname"])) 
{
header("Location: ../view/seller_login.php"); // Redirecting To Home Page
}
setcookie("Username", $_SESSION["uname"], time() + (86400*2),"/");
?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type = "text/css" href="../css/mystyle_profile.css">
    </head>
<body>
    <!-- <center> -->

   
<!-- <h2>Home</h2> -->
<div class="header">
  <center>
  <h1>Welcom to your profile</h1>
  </center>
</div>

<div class="topnav">
  <!-- <a href="../view/seller_login.php"> <button> Home</button></a> -->
  <a href=""> Home</a>
  <a href="../view/seller_report.php">Report Problem</a>
  <a href="../view/seller_editprofile.php">Edit Profile</a>
  <a href="../view/seller_listing.php">Product Listing</a>
  <a href="../view/seller_product.php">Product View & Modification</a>
  <a href="../view/seller_product_search.php">Find your products</a>

</div>
</div>
<br><br><br><br>
<img src="../uploads/images.jpg" width="100" height="100"><br>

Hello <h3> <?php echo $_SESSION["uname"];?></h3>
<!-- <br/><h5>Welcome to home page.</h5> -->
<!-- <h5>Welcome to your profile.</h5> -->


<!-- <h5>Do you want to go to <a href="pagetwo.php"> MY Profile</a></h5> -->
<br>
<br>
 <label>Search user</label>

  <input type="text" id="uname" placeholder="Username" >
  <button onclick="showmyuser()">Search</button>

<p id="mytext"></p>

<script src="../js/myscript_seller.js"></script>
<br><br>
<br>
 <h5>Do you want to <a class="logout" href="../control/logout_control.php">logout</a></h5>
 <!-- </center> -->

</body>
</html>

<?php


?>   
