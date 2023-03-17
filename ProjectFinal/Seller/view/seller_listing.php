<?php
include("../control/list_control.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List a product</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype ="multipart/form-data">
        <table>
            
            <tr>
                <td>
                    Product name :
                </td>
                <td>
                    <input type="text" name="name">
                </td>
                
            </tr>
            
            <tr>
                <td>
                    size :
                </td>
                <td>
                    <input type="text" name="size">
                </td>
            </tr>
             
            <tr>
                <td>
                   color :
            </td>
            <td>
                 <input type="text" name="color">
            </td>
        </tr>
        
        <tr>
            <td>
                Set price:
            </td>
            <td>
                <input type="text" name="price">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
        </table>
        
    </form>
    <br>
    <a href="../view/seller_profile.php"><button>Go Back</button></a>
</body>
</html>