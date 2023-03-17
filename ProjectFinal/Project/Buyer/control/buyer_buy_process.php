<?php

include('../model/db.php');

if(isset($_GET["id"])){
    
    $id=$_GET["id"];

    $urdb= new db();
    $myconn = $urdb->openCon();

    $result=$urdb->showproductdetails($myconn,'seller_table',$id);

    while($row = $result->fetch_assoc()){

        $id=$_GET["id"];
    

    $urdb->addtowish($myconn,'buyer_wish',$_SESSION['username'], $row['id'], $row['up_product_name']);
    
        
    }

}

if(isset($_POST["bkash"])){
    header("location: buyer_bkash_pay.php");
}

else if(isset($_POST["card"])){
    header("location: buyer_card_pay.php");
}

else if(isset($_POST["cash"])){
    header("location: buyer_cash_pay.php");
}

?>