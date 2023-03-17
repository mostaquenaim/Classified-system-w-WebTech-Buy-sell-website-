<?php
session_start(); 
if(empty($_SESSION["Email"])) 
{
header("Location:login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" type="text/css" href="../css/sellershow.css">
<body>
    
    <form>
        <center>
<h2>Hey Manager!</h2>
<h3> <?php echo $_SESSION["Email"];?></h3>
<br/><h5>Welcome to home page.</h5>


<h5>Do you want to see Every<a href="pagetwo.php"> Manager Details</a></h5>
<h5><a href="login.php"> Back</a></h5>
<h5><a href="pageone.php">Update</a></h5>
<br/>
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>
 <center>
</form>
</head>
</body>
</html>

<?php


?>   