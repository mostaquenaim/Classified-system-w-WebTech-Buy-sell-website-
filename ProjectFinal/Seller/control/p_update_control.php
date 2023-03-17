
<?php
include("../model/db.php");
if (isset($_POST['submit'])) 
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    $mydb= new db_seller();
    $myconn = $mydb->openCon();
    $mydb->productUpdate($name,$size,$color,$price,$id,"product",$myconn);
}

?>