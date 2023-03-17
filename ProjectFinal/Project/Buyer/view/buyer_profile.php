<?php

session_start();
// include("../control/buyer_profile_process.php");

if(!isset($_SESSION['username']))
{
    header("Location: buyer_login.php");
    echo "<br>Login first<br>";

}

// $username=
setcookie("Username", $_SESSION['username'], time() + (86400*30),"/");
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    </head>
    <body>

    <h1> Welcome </h1>

    <?php

// $connection = new db();
// $conobj=$connection->openCon();

// $result=$connection->showdetails($conobj,"buyer_info",$_SESSION['username']);


    // while($row = $result->fetch_assoc()) {
    // echo "lname: " . $row["b_lname"]. " - Name: " . $row["b_fname"]. " " .
    // $row["b_pass"]. "<br>";
    // }

    

    ?>

        <!-- <h1>Welcome 
            <?php //echo $_SESSION['firstName']." ".$_SESSION['lastName'];?> 
        </h1><br>
        <hr size="2" width="100%">
        <h2>User Info</h2><br>
        <?php
        // echo "First name: ".$_SESSION['firstName']."<br>";
        // echo "Last name: ".$_SESSION['lastName']."<br>";
        // echo "Password: ".$_SESSION['password']."<br>";
        // echo "Username: ".$_SESSION['username']."<br>";
        // echo "Email: ".$_SESSION['email']."<br>";
        // echo "Mobile no.: ".$_SESSION['mobile']."<br>";
        // echo "Date of birth: ".$_SESSION['Dob']."<br>";
        // echo "Gender: ".$_SESSION['gen']."<br>";
        //echo "Uploaded file: ".$_SESSION['Files']."<br>";
        //echo "Username: ".$_SESSION['username']."<br>";
        ?>
        <br><br>
        <a href="../view/buyer_logout.php">Logut</a><br>
        <a href="../view/homepage.php">Go to homepage</a> -->

    </body>
</html>