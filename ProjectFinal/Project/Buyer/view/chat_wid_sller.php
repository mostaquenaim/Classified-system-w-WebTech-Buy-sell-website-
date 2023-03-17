<?php

include ("../model/db.php");
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
        
    <?php
if(isset($_GET["id"]) && isset($_POST["submit"])  ){
    
    $message=$_POST["support"];
    $id=$_GET["id"];

    $connection = new db();
    $conobj=$connection->openCon();


$result=$connection->showproductdetails($conobj,'seller_table',$id);

//showchat($conobj,'chat_seller_buyer',$_SESSION['username'], )
//$conn,$table,$busername,$susername
while($row = $result->fetch_assoc()){
    $conobj=$connection->openCon();

    $result3=$connection->chatwidseller($conobj,"chat_seller_buyer",$row['s_uname'],$_SESSION['username'],$message);

    $result2=$connection->showchatwidseller($conobj,'chat_seller_buyer',$_SESSION['username'], $row['s_uname']);
    //echo "ekbar";
}

while($row = $result2->fetch_assoc()){
    echo "<table>
<tr>
<td>".$row['buyer_msg']." </td><td> ----- 
</td> <td> ".$row['seller_msg']." </td>
</tr>


</table>";

}
$_POST["support"]="";



}


?>

    <form action="" method="post">
    

        <h3></h3>
        <br>
        <textarea name="support" id="" cols="40" rows="5"></textarea>
        <br><br><button type="submit" name="submit" value=""> Send </button>
        </form>
    </body>
</html>
