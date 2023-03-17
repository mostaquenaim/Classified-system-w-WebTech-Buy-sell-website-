<?php

include('../model/db.php');
session_start();
if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $mydb= new db();
    $myconn = $mydb->openCon();

    $result=$mydb->showproductdetails($myconn,'seller_table',$id);
    

    ?>

<a href="check_profile.php">Home</a>
<table>
    <tr>
        <td>
           <b>Seller username</b> 
        </td>
        <td>
        <b>Phone no.</b>  
        </td>
        <td>
        <b>Product id</b> 
        </td>
        <td>
        <b>Product name</b> 
        </td>
        <td>
        <b>Price</b> 
        </td>
        <td>
        <b>Product details</b> 
        </td>
        <td>
        <b>In stock?</b> 
        </td>
    </tr>

    <?php
    while($row = $result->fetch_assoc()){ ?>
<tr>
<td>
<?php echo $row['s_uname']; ?>
</td>
<td>
<?php echo $row['s_phone']; ?>
</td>
<td>
<?php echo $row['id']; ?>
</td>
<td>
<?php echo $row['up_product_name']; ?>
</td>
<td>
<?php echo $row['up_product_price']; ?>
</td>
<td>
<?php echo $row['product_details']; ?>

</td>
<td>
<?php echo $row['stock']; ?>

</td>

</tr>
</table>

   <?php }



}

?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    </head>
    <body>
        
    </body>
</html>