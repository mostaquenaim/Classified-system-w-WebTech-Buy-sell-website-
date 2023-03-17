<html>
    <body>
    <head>
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>
<body background="../uploads/admin/admin_registration_background.jpg">
<form>
<h2><center>Product Information</center></h2>
<hr size="2" width="100%">


<?php
session_start();
include ('../model/admin_db.php');

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $mydb= new db();
    $myconn = $mydb->openCon();

    $result=$mydb->showproductdetails($myconn,'seller_table',$id);

    while($row = $result->fetch_assoc()){
        echo "<b>By, ". $row['s_uname']."</b><br>
        Product name: ". $row['up_product_name']. "<br>
        Price: ". $row['up_product_price']. "<br>
        Details: ". $row['product_details']. "<br>
        Seller's phone no. : ". $row['s_phone']. "<br>
        <i><h5>". $row['stock']. "</h2></i><br>  ";      
    }
}
else if(isset($_POST["buy"]))
{
    header("Location: buyer_buy.php");
}


?>


<center><button><a href="../view/admin_buyer_info.php">Back</a></button></center>
</form>
 </body>
</html>