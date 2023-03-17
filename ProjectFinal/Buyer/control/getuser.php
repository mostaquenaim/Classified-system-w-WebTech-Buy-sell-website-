<?php
include('../model/db.php');

$user = $_POST['uname'];
// echo $user;

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetProductByUname($conobj,"seller_table",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>username</th><th>product name</th><th>product price</th></tr>";

    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["s_uname"]."</td><td>".$row["up_product_name"]."</td><td>".$row["up_product_price"]."</td>
      <td><a href='buyer_see_product.php?id=".$row["id"]."'>Check</a></td></tr>";
    }
    echo "</table>";

  } 
  
  else {
    echo "0 results";
  }
  
}
else{
  echo "please enter something";
}
?>