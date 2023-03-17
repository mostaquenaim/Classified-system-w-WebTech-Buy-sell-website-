<?php
include("../model/admin_db.php");
// include("../control/cart_delete.php");
session_start();

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->deleteRow($myconn,'seller_table',$id);

     header("Location: admin_seller_info.php");
}



?>
<html>
    <body>
    <head>
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>
<body background="../uploads/admin/admin_registration_background.jpg">
<form>
<h2><center>Current Seller History</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_history.php">Back</a></button></center>
</form>

<form>
<center>
    <?php

$connection = new db();
$conobj=$connection->openCon();
$result=$connection->showSeller($conobj,'seller_table');


// $check=0;
    echo "<table><tr><th>ID</th><th>Seller Name</th><th>Product Name</th><th>Product Price</th><th>Seller Phone No</th><th>Product Details</th><th>Stock</th><th>Delete</th></tr>";
    while($row = $result->fetch_assoc()) 
    {    
    echo "<tr><td>".$row["id"]."</td><td>".$row["s_uname"]."</td><td>".$row["up_product_name"]."</td><td>".$row["up_product_price"]."</td><td>".$row["s_phone"]."</td><td>".$row["product_details"]."</td><td>".$row["stock"]."</td><td><a href='admin_seller_info.php?id=".$row['id']."' > Delete </a></td></tr>";
    }
    ?>
    </body>
</html>