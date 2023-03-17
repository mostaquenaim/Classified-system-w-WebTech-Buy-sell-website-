<?php
include("../control/update_control.php");
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

<table>
        <tr><td>
            current Mobile no :
        </td><td>
            <input type="text" name="mobno" id="">
        </td>

        </tr>
        <tr><td>
        First Name:
        </td><td>
        <input type="text" name="fname">
        </td></tr>
        <tr><td>
        Last Name:
        </td><td>
        <input type="text" name="lname">
        </td></tr>
        <tr><td>
        Username :
        </td><td>
        <input type="text" name="uname">
        </td></tr>
        <tr><td>

        
        E-mail:
        </td><td>
        <input type="email" name="email">
        </td></tr>
        <tr><td>
        Change password :
        </td><td>
        <input type="password" name="password">
        </td></tr>
        <tr><td>

    </table>
    <input type="submit" class="button submit" name="submit" value="Update">
        <!-- <input type="reset" class="button reset" name="reset"> -->
</form>
<br>
<a href="../view/seller_editprofile.php"><button>Go back</button></a>
    
</body>
</html>