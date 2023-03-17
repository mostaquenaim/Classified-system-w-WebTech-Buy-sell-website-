
<?php
include("../control/delete_control.php");
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
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
          Enter current mobile number:
    <tr><td>
            current Mobile no :
        </td><td>
            <input type="text" name="mobno" id="">
        </td>
<br>
        <input type="submit" name ="delete" value="Delete">

    </form>
    <br>
<a href="../view/seller_editprofile.php"><button>Go back</button></a>
  
    
</body>
</html>