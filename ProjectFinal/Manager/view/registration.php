<?php
include("../control/process.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body>
<div class="registrationBox">
<h1 align="left">Registration form </h1>
</div>
<div class="frame">

</div>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">

<table>
        <tr><td>
        First Name:
        </td>
        <td><input type="text" name="M_fname" id="fname" placeholder= "type your first name" onkeyup="fnamecheck()"></td>
        <td><label id="fnamechk"></label></td>
        </td></tr>
        <tr><td>
        Last Name:
        </td>
        <td><input type="text" name="M_lname"  id="lname" placeholder= "type your last name" onkeyup="lnamecheck()"></td>
        <td><label id="lnamechk"></label></td>
        </td></tr>
        <tr><td>
        Age:
        </td>
        <td><input type="text" name="Dateofbirth" id="age" placeholder="type your age" onkeyup="agecheck()"></td>
        <td><label id="agechk"></label></td>
        </td></tr>
        <tr><td>
        Branch:
        </td><td>
        <input type="radio" name="Br" value = "Dhaka Cantonment">Dhaka Cantonment
        <input type="radio" name="Br" value = "Mohammadpur">Mohammadpur
        <input type="radio" name="Br" value = "Uttara">Uttara
        <input type="radio" name="Br" value = "Banani">Banani
        </td></tr>
        <tr><td>
        Address:
        </td><td>
        <input type="text" name="address">
        </td></tr>
        <tr><td>
        Gender:
        </td><td>
        <input type="radio" name="gender" value = "male">Male
        <input type="radio" name="gender" value = "female">Female
        <tr><td>
        E-mail:
        </td>
        <td><input type="email" name="Email"  id="email" onkeyup="emailcheck()"></td>
        <td><label id="emailchk"></label></td>
        </td></tr>
        <tr><td>
        Enter a Password:
        </td>
        <td><input type="password" name="Password" id="pass" onkeyup="passwordcheck()"></td>
        <td><label id="passchk"></label></td>
        </td></tr>
        <tr><td>
        NID:
        </td><td>
        <input type="text" name="nid" id="name" >
        </td></tr>
        

    </table>
    <tr>
        <input type="submit" class="button submit" name="submit">
        <input type="reset" class="button reset" name="reset">
    </tr>
</table>
</form>
<script src="../js/myscript.js"></script>
<label id="write"></label>
</div>
</body>
</html>