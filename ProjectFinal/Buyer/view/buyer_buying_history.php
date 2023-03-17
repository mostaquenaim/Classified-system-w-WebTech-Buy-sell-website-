<?php
include("../model/db.php");
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
    <?php

$connection = new db();
$conobj=$connection->openCon();

$result=$connection->showbuyinghistory($conobj,'buyer_buy',$_SESSION['username']);


    while($row = $result->fetch_assoc()) {
    echo "Id: ".$row['id']."<br>Product name: " . $row["product_name"]. "<br> Product id: " . $row['product_id']." 
    <br> Price: " . $row['product_price']."<br> Payment Method: " . $row['payment']."
    <br> Buying date: " . $row['buy_date']."<br> <br>";

    
   
    }

    

    ?>
    </body>
</html>