<?php
include("../control/report_control.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report a problem</title>
</head>
<body>
    <center>
        <form action=" <?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
           
             write your problem here : <br><br>
            <textarea name="report" id="" cols="30" rows="10"></textarea><br><br>
            
            <input type="submit" name="submit" value="submit">
        </form><br>
        <a href="../view/seller_profile.php"><button>Go Back</button></a>
       
    </center>
</body>
</html>