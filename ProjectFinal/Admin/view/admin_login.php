<?php 
include('../control/admin_login.php');

if(isset($_SESSION['email']))
{
header("location: admin_homepage.php");
}
?>

<html>
    <head>
    <title>Sellhobe.com</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/jquery.js"></script>
    <link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
    <link rel="stylesheet" type="text/css" href="../css/admin_login_style.css">
    </head>
    
    <body background="../uploads/admin/admin_login_background.jpeg">
        <center>
        </center>
        <form action="" method="post">
        <h1><center><font color="white">Welcome!</font></center></h1>
        <hr size="2" width="100%">
            <center>
            <br>
            <table>
            <tr><td>
            Email:
            </td><td>
            <input type="text" name="email" placeholder="email" autofocus>
            </td></tr>
            
            <tr><td>
            Password:
            </td><td>
            <input type="text" name="password" placeholder="password">
            </td></tr>

            <tr><td>
            <br>
            </td></tr>
            </table>

            <table>
            <tr><td>
            </td><td>
            <input type="submit" class="button submit" name="submit" value="login" >
            </td>
            <td>
            <input type="reset" class="button reset" name="reset" value="reset">
            </td>
            </tr>

            </table>
            <table>
            <tr><td>
            </td><td>
            <button>
            <a href="../view/homepage.php">Back</a>
            </button></td>
            <td><br></td><td>
            <button>
            <a href="../view/admin_registration.php">Register</a>
            </button>
            </td>
            </tr>
            </table>
    </form>
    <br>
    <?php echo $error; ?> 
    </center>
    </body>
</html>