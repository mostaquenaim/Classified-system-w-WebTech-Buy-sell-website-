<?php
include("../control/admin_registration.php");
?>
<html>
<head>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_registration_style.css">
</head>
<body background="../uploads/admin/admin_registration_background.jpg">

<div class="frame">
</div>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">

<div class="registrationBox">
<h1 align="center">Admin Registration </h1>
</div>
<center>
<button class="button back">
    <a href="../view/admin_login.php">Back</a>
</button>
</center>
<hr size="2" width="100%">
<center>

<table>
        <tr><td>
        First Name:
        </td>
        <td><input type="text" name="fname" id="fname" placeholder= "type your first name" onkeyup="fnamecheck()"></td>
        <td><label id="errorfname"></label></td>
        </td></tr>
        <tr><td>
        Last Name:
        </td>
        <td><input type="text" name="lname"  id="lname" placeholder= "type your last name" onkeyup="lnamecheck()"></td>
        <td><label id="errorlname"></label></td>
        </td></tr>
        <tr><td>
        Age:
        </td>
        <td><input type="text" name="age" id="age" placeholder="type your age" onkeyup="agecheck()"></td>
        <td><label id="ageerror"></label></td>
        </td></tr>
        <tr><td>
        Address:
        </td><td>
        <input type="text" name="address">
        </td></tr>
        <tr><td>
        Mobile:
        </td><td>
        <input type="text" name="mobile" id="mobile" onkeyup="mobilecheck()"></td>
        <td><label id="mobileerror"></label></td>
        </td></tr>
        <tr><td>
        Gender:
        </td><td>
        <input type="radio" name="gender" value = "male">Male
        <input type="radio" name="gender" value = "female">Female
        <input type="radio" name="gender" value = "others">Others
        <tr><td>
        E-mail:
        </td>
        <td><input type="email" name="email"  id="email" onkeyup="emailcheck()"></td>
        <td><label id="emailerror"></label></td>
        </td></tr>
        <tr><td>
        Enter a Password:
        </td>
        <td><input type="password" name="password" id="password" onkeyup="passcheck()"></td>
        <td><label id="passerror"></label></td>
        </td></tr>
        <tr><td>
        NID:
        </td><td>
        <input type="text" name="nid" id="nid" onkeyup="nidcheck()"></td>
        <td><label id="niderror"></label></td>
        <br>
        <br>
        </td></tr>
        

    </table>
    <table>
    <tr>
        <td></td><td></td><td></td><td></td><td></td>
        <td>
        <input type="submit" class="button submit" name="submit">
        </td>
        <td>
        <input type="reset" class="button reset" name="reset">
        </td>
        <td>

        </td>
        <tr>
    </tr>
</table>
</center>
<script src="../js/myscript.js"></script>
<label id="write"></label>
</form>

</div>

</body>
</html>