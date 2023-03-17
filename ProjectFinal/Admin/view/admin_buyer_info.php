<?php
session_start();
include("../model/admin_db.php");

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->deleteRow($myconn,'buyer_cart',$id);

     header("Location: admin_buyer_info.php");
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
<h2><center>Current Buyer History</center></h2>
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

//  $result=$connection->insertIntoCart("product_1",10,$_SESSION['username'],$conobj);
$result=$connection->showRow($conobj,'buyer_cart');


// $check=0;
    echo "<table><tr><th>ID</th><th>Buyer Name</th><th>Product ID</th><th>Product Name</th><th>Delete</th><th>See Product Info</th></tr>";
    while($row = $result->fetch_assoc()) 
    {    
    echo "<tr><td>".$row["id"]."</td><td>".$row["buyer_uname"]."</td><td>".$row["product_id"]."</td><td>".$row["product_name"]."</td><td><a href='admin_buyer_info.php?id=".$row['id']."' > Delete </a></td><td><a href='admin_buyer_see_product.php?id=".$row['product_id']."'> See product </a></td></tr>";
    }

    

    ?>
    </body>
</html>