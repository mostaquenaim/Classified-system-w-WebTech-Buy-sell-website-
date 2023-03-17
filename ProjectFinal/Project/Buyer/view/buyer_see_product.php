

<?php
include ('../model/db.php');
session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}
// include ("../control/buyer_product_process.php");

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    </head>
    <body>
    <div class="sticky">
    <div class="topnav">
    <a href="check_profile.php">Home</a>
</div>
</div>
<br><br><br>


        <?php

if(isset($_GET["id"])){
    // echo "dhukse";
    $id=$_GET["id"];
    $mydb= new db();
    $myconn = $mydb->openCon();

    $result=$mydb->showproductdetails($myconn,'seller_table',$id);

    while($row = $result->fetch_assoc()){
        echo "<b>By, ". $row['s_uname']."</b>  <a href='follow_seller.php?id=".$id."' > <i>  Follow </i> </a> <br>
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

else if(isset($_POST["addcart"])){
    // echo "dhukse1 <br>";
    $result=$mydb->showproductdetails($myconn,'seller_table',$id);
    while($row = $result->fetch_assoc()){
        // echo "dhukse2";
        $id=$_GET["id"];
    $urdb= new db();
    $myconn = $urdb->openCon();
    // if($_GET['value']=="Add to cart"){
    $urdb->addtocart($myconn,'buyer_cart',$_SESSION['username'], $row['id'], $row['up_product_name']);
    // header("Location: buyer_see_product.php");
    // }
        
    }
    // header("Location: buyer_add_to_cart.php");
}

else if(isset($_POST["wishlist"])){
    $result=$mydb->showproductdetails($myconn,'seller_table',$id);

    while($row = $result->fetch_assoc()){

        $id=$_GET["id"];
    $urdb= new db();
    $myconn = $urdb->openCon();

    $urdb->addtowish($myconn,'buyer_wish',$_SESSION['username'], $row['id'], $row['up_product_name']);
    
        
    }
    
}

else if(isset($_POST["buy"])){

    

    header("Location: buyer_buy.php");

}


?>


        <form action="" method="post">
        <br>
        <?php echo"
        <button><a href='chat_wid_sller.php?id=".$id."'>Chat with Seller</a></button><br><br>" ?>
    <!-- <button name="chatseller" >Chat with Seller</button><br> -->
    <button name="addcart" id="addcart" ><a href="#">Add to cart</a></button><br><br>
    <button name="wishlist" ><a href="#">Wishlist</a> </button><br><br>
    <!-- <button name="buy" >Buy</button><br> -->
    <?php 
    $id=$_GET["id"];
    echo"
    <button><a href='buyer_buy.php?id=".$id."' >Buy</a></button><br><br>";
    echo"
    <button><a href='product_report.php?id=".$id."' >Report</a></button><br><br>";
    echo"
    <button><a href='product_comment.php?id=".$id."' >Comment</a></button><br><br>";
    echo"
    <button><a href='product_review.php?id=".$id."' >Review</a></button><br><br>";
    ?>


    <br>
    <h3>Comments</h3>
    <br>
    
    <?php
    $id=$_GET['id'];
            $urdb= new db();
            $myconn = $urdb->openCon();
        
            $result3=$urdb->showcomment($myconn,'buyer_comment',$id);

            while($row = $result3->fetch_assoc()){

                echo "<i><b><h4>". $row['b_uname']."</b></i>  :  ".
                $row['Comment']."</h4>";

                if($row['b_uname']==$_SESSION['username']){ 

                echo "<a href='comment_delete.php?id=".$row['id']."'>   Delete </a>";
                    

                }
                // else{
                //     echo "doesn't match";
                // }
                
                echo"<br><br>
                
                ";




            }


            
    ?>




    
   </form>
 </body>
</html>