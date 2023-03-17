<?php
include("../control/buyer_login_process.php");
if(isset($_SESSION['username']))
{
    header("Location: check_profile.php");
}
$error="";
?>


<html>
    <head>
  <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">

  </head>
    <body>
        
  
  <center>
  <!-- <div class="sticky">
            <div class="topnav">
            <a href="homepage.php">Home </a>
            <a href="buyer_login.php">Login </a>
    
 </div>  
</div> -->
    
        <h1>Buyer Login</h1>
        <hr size="2" width="100%">



    <form action ="" method="POST" enctype="multipart/form-data">
                
<table>
    <tr>
        <td>User name:</td>
        <td><input type="text" name="username" ></td> 
</tr>

<tr>
        <td>Password:</td>
        <td><input type="password" name="password" ></td> <br>
</tr>
<tr> </tr>
</table>
       
                  <table>
                    <tr>
                    <button type="submit" name="submit" value="Login"> Login </button>
                    </tr>
                  </table>
                           
                            
                        

Not registered yet? <a href="../view/Buyer_Registration.php"> Click here </a> 
<br>
<a href="../view/homepage.php">Go to homepage</a>               
</center>


</form>
</body>
</html>