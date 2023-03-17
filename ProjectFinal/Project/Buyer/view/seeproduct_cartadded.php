

<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

// include ("../control/buyer_product_process.php");
include ('../model/db.php');

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">

    </head>
<body>
    
<?php
if(isset($_GET["id"])){
    // echo "dhukse";
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

if(isset($_POST["chatseller"])){
    header("Location: chat_wid_sller.php");
}

else if(isset($_POST["rmvcart"])){
    // echo "dhukse1 <br>";
    $result=$mydb->showproductdetails($myconn,'seller_table',$id);
    while($row = $result->fetch_assoc()){
        // echo "dhukse2";
        $id=$_GET["id"];
    $urdb= new db();
    $myconn = $urdb->openCon();
    $urdb->addtocart($myconn,'buyer_cart',$_SESSION['username'], $row['id'], $row['up_product_name']);
        header("Location: seeproduct_cartadded.php")
    }
    // header("Location: buyer_add_to_cart.php");
}

else if(isset($_POST["wishlist"])){
    header("Location: buyer_wishlist.php");
}

else if(isset($_POST["buy"])){
    header("Location: buyer_buy.php");
}


?>


        <form action="" method="post">
        <br>
    <button name="chatseller" >Chat with Seller</button><br>
    <button name="rmvcart"  >Remove from cart</button><br>
    <button name="wishlist" >Wishlist</button><br>
    <button name="buy" >Buy</button><br>

    <a href="buyer_search.php">Go back</a>
   </form>
   <script scr='../js/myscript.js'></script>
 </body>
</html>