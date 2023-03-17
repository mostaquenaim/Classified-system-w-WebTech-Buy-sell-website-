<?php
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
        <h2>Select payment method </h2>
        <!-- <form action="" method="post"> -->

            <?php 
            $id=$_GET["id"];
            echo "
            <br><a href='buyer_bkash_pay.php?id=".$id."'> Bkash </a>
        
            <br><a href='buyer_card_pay.php?id=".$id."'> Credit Card </a>
            
            <br><a href='buyer_cash_pay.php?id=".$id."'> Cash on Delivery </a>
            ";

            ?>

            <!-- <button name="bkash"> Bkash </button> <br><br>
            <button name="card"> Credit Card </button> <br><br>
            <button name="cash"> Cash on Delivery </button><br> -->

            

        <!-- </form> -->
    </body>
</html>