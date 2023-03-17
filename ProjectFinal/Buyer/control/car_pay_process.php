<?php

include ("../model/db.php");
session_start();

if(isset($_POST["submit"]) && isset($_GET["id"])){
    
    $id=$_GET["id"];

    $urdb= new db();
    $myconn = $urdb->openCon();

    $result=$urdb->showproductdetails($myconn,'seller_table',$id);

    while($row = $result->fetch_assoc()){

        $id=$_GET["id"];
    $urdb= new db();
    $myconn = $urdb->openCon();
    
    
    $date=date("Y-m-d");//today's date
    $urdb->addtobuy($_SESSION['username'], $row['id'],'Card',$date, $row['up_product_name'],$row['up_product_price'],'buyer_buy',$myconn);
    
        //$buyer_uname,$id,$payment,$date,$product_name,$product_price,$buyer_table,$conn
    }

    header("Location: buyer_pay_confirm.php");
}

?>
