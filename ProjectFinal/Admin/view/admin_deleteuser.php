<?php
include("../control/admin_deleteuser.php");

if(empty($_SESSION["email"])) // Destroying All Sessions
{
header("Location:admin_login.php"); // Redirecting To Home Page
}
?>

<html>
<body background="../uploads/admin/admin_registration_background.jpg">
<head>
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>

<form>
<h2><center>Delete Admin</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_homepage.php">Back</a></button></center>
</form>
    <center>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
    <tr>
    <td>
    Enter Email Address :
    </td>

    <td>
    <input type="text" name="email" id="">
    </td>
    </tr>

    <input type="submit" name ="delete" value="delete">

    </form>
    <br>
    <a href="../control/admin_logout.php.php"><button>Logout</button></a>
    </center>
</body>
</html>