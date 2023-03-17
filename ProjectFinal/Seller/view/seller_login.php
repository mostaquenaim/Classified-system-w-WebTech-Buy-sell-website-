<?php
include('../control/login_control.php');

if(isset($_SESSION["uname"])){
header("location: seller_profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mystyle_login.css">
</head>
<body>
<center>
<br>

<form action="" method="post" class="solid" enctype="multipart/form-data">
    <h2>Login</h2><br>
    <h6>login with your correct username and password</h6>
    
    Username :
    <input type="text" name="uname" placeholder="Enter your username" ><br><br>
    Password :
    <input type="password" name="pass" placeholder="Enter your password" ><br><br>
    
    <input name="submit" type="submit" value="LOGIN"class="button submit ">
    <!-- <button type="submit" name="submit" value="Login""> Login </button> -->
    <input name="Rsubmit" type="submit" value="REGISTER NOW?" class="button reset">
</form>
<!-- <a href="../view/homepage.php">HOME</a>  -->
<br>
<?php echo $error; ?>
</center>
</body>
</html>