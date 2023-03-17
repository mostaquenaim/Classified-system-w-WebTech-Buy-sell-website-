<?php

include ("../model/db.php");
session_start();

if(isset($_POST["submit"]) && isset($_GET["id"])){

    $bkash=$_POST['phoneno'];
    $pin=$_POST['pin'];
    $bool1=true;


    $patternmob='/^1[13456789][0-9]{8}$/'; 

    if(!preg_match ($patternmob, $bkash))
    {
        echo "wrong";
        $bool1=FALSE;

    }

    $patternpin='/^[0-9]{5}$/';

    if(!preg_match ($patternpin, $pin))
    {
        echo "wrong";
        $bool1=FALSE;

    }

    if($bool1){

    
    $id=$_GET["id"];

    $urdb= new db();
    $myconn = $urdb->openCon();

    $result=$urdb->showproductdetails($myconn,'seller_table',$id);

    while($row = $result->fetch_assoc()){

        $id=$_GET["id"];
    $urdb= new db();
    $myconn = $urdb->openCon();
    
    
    $date=date("Y-m-d");//today's date
    $urdb->addtobuy($_SESSION['username'], $row['id'],'Bkash',$date, $row['up_product_name'],$row['up_product_price'],'buyer_buy',$myconn);
    
        //$buyer_uname,$id,$payment,$date,$product_name,$product_price,$buyer_table,$conn
    }

    header("Location: buyer_pay_confirm.php");
}
}

?>
