<?php

include ("../model/db.php");
session_start();



if(isset($_POST["show"] )){
        //echo "dhukse";
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
    
}

while($row = $result2->fetch_assoc()){
    echo "<table>
<tr>
<td>".$row['buyer_msg']."
</td>

<td>".$row['seller_msg']." </td>
</tr></table>";

}
$message="";



}


?>
