<?php
include("../control/seller_control.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seller registration form</title>

    <link rel="stylesheet" type = "text/css" href="../css/mystyle.css"> 

</head>

<!-- ../control/seller_control.php -->
<body>
      
<form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype ="multipart/form-data" onsubmit= "return formcheck()" >
<!-- onsubmit ="return formcheck() -->
    <center> 
<h1 id="p1">Seller registration form</h1>
<hr size="2" width="100%">
<table>
    <!-- first name  -->
<tr>
    <td> First name </td>
    <td> <input type="text" name="fname" placeholder="First name" id="fname" onkeyup="Fname()" ></td>
        <td>
            <label id="Fname"></label>
        </td>
</tr>
<!-- <tr><td><br></td></tr> -->
    <!-- last name  -->
<tr>
    <td>Last name </td>
    <td> <input type="text" name="lname" placeholder="Last name" id="lname" onkeyup="Lname()"></td>
    <td>
        <label id="Lname"></label>
    </td>
</tr>
<!-- <tr><td><br></td></tr> -->
    <!-- user name  -->
<tr>
<td>Username  </td>
    <td><input type="text" name="uname" placeholder="username" id="uname" onkeyup="Uname()"></td>
    <td>
        <label id="Uname"></label>
    </td>
</tr>
<!-- <tr><td><br></td></tr> -->
<!-- mobile no  -->
<tr>
    <td>Mobile no </td>
    <td>
        <input type="text" name="mobno" placeholder="e.g 018********" id="mob" onkeyup ="Mobile()">
    </td>
    <td>
        <label id="Mob"></label>
    </td>
</tr>
<!-- <tr><td><br></td></tr> -->
<!-- nid  -->
<!-- <tr>
    <td>NID </td>
    <td>
        <input type="file" name="NID" placeholder="Upload a pdf of jpg file">
    </td>
</tr> -->
<tr>
    <td>NID </td>
    <td>
        <input type="text" name="NID" placeholder="*** *** ****" id="nid" onkeyup ="NID()">
    </td>
    <td>
        <label id="Nid"></label>
    </td>
</tr>

<!-- <tr><td><br></td></tr> -->
    <!-- email  -->
<tr>
    <td> Email </td>
    <td> <input type="text" name="email" placeholder=" email" id="email" onkeyup ="Email()"><td>
        <td>
            <label id="EMAIL"></label>
        </td>
</tr>
<!-- <tr><td><br></td></tr> -->
<!-- address  -->
<tr>
    <td>Address </td>
    <td>
        <input type="text" name="address" placeholder="Address" id="address" onkeyup="Address()">
    </td>
    <td>
        <label id="ADD"></label>
    </td>
</tr>
<!-- <tr><td><br></td></tr> -->
<!-- DOB  -->
<tr>
    <td>Date of Birth </td>
    <td>
        <input type="date" name="dob" placeholder="Date of Birth">
        
    </td>
</tr>
<!-- <tr><td><br></td></tr> -->
<!-- password  -->
<tr>
    <td> Password </td>
    <td> <input type="password" name="pass" placeholder="password" id ="pass" onkeyup="Password()"><td>
    <label id="Pass"></label>
     
</tr>
<!-- <tr><td><br></td></tr> -->
<!-- confirm password  -->
<tr>
    <td>Confirm password </td>
    <td>
        <input type="password" name="confirmpass" placeholder="confirm password">
    </td>
</tr>
<!-- <tr><td><br></td></tr> -->
<tr>
    <!-- photo upload  -->
<td> Upload your photo </td>
<td> <input type="file" name="picture" placeholder=".jpg/.png"> <td>
    <label id="Picture"></label>
</tr>
<tr>
<!-- <tr><td><br></td></tr> -->

<tr>
    <td><input type="checkbox" name="robot" id="">I am not a robot</td>
</tr>
<tr><td><br></td></tr>
<!-- submit  -->
 
<tr>
    <td>

    </td>
    <td>
        <input type="submit" class="button submit" name="submit">
        <input type="reset" class="button reset" name="reset"><br><br>
        <!-- <input name="Bsubmit" type="submit" value="Back to login" class="button back"> -->
    </td>
  
</tr>

    <br><br>
</table>

<table>
    <tr>
        <td>
        <input name="Bsubmit" type="submit" value="Back to login" class="button back">
        </td>
    </tr>
</table>
</center>
</form>
<script src="../js/myscript_seller.js"></script>
<label id="write"></label>


</body>
</html>

