<?php
include("../control/p_update_control.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="" method="post" novalidate onsubmit="return validate()">


<tr><td>
    ID:
</td><td>
    <input type="text" name="id" value="">
</td>
</tr>
<tr><td>
    Name :
</td><td>
    <input type="text" id="name" name="name" value="">
</td></tr>
<tr><td>
Size : 
</td><td>
<input type="text" id="size" name="size" value="">
</td></tr>
<tr><td>
Color :
</td><td>
<input type="text" id="color" name="color" value="">
</td></tr>
<tr><td>
Price :
</td><td>
<input type="text" id="price" name="price" value="">
</td></tr>


    </table><br>
<input type="submit" name = "submit" value="Update">


</form>
<a href="../view/seller_product.php"><button>Go Back</button></a>
</body>
</html>