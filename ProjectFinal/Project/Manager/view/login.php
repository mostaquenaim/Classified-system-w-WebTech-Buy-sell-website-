<?php 
include('../control/loginprocess.php');

if(isset($_SESSION['Email'])){
header("location: afterlogin.php");
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="../css/mycss.css"></head>
<body>
<center>
<h2>Login as a Manager</h2>
<hr size="2" width="100%">
<form action="" method="post">
    <input type="text" name="Email" placeholder="Enter your email here" >
    <br><br>
    <input type="password" name="Password" placeholder="Enter your password" >
    <br><br>
    <input name="submit" type="submit" value="Login">
    <br><br>
    <a href="../view/mypage.php">BACK</a>
    <br>
    <a href="../view/registration.php" > Register now </a>
</form>
<br>
<?php echo $error; ?>
</center>
</body>
</html>