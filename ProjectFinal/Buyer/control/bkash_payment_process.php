<?php

include('../model/db.php');

if(isset($_POST["submit"])){

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

        $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->updatepremium($_SESSION['username'],'yes',"buyer_info",$myconn);



        header("Location: buyer_premium_confirm.php");


    }



    
}


?>