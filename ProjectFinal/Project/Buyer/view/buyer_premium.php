<?php
session_start();

include('../model/db.php');

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}





$mydb= new db();
    $myconn = $mydb->openCon();
    $result=$mydb->premiumcheck($myconn,"buyer_info",$_SESSION['username'],'yes');
    // echo "$result->num_rows";
    
    if($result->num_rows > 0)
    {
        header("location:buyer_premium_confirm.php");
    }

// while($row = $result->fetch_assoc()) {
//     $check= $row['premium_check'];
//     if($check='yes'){

        

//     }
// }

if(isset($_POST["Bkash"])){

    header("Location: buyer_premium2.php");
    }
    
    else if(isset($_POST["Credit"])){
    header("Location: buyer_premium3.php");
    }

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
    <h1> You are welcome to get premium Membership</h1>
    <br>
    1. Get notifications of offers regularly <br>
    2. Get free delivey <br>
    3. Get report response faster <br>
    4. Get more offers by giving reviews often <br>
    <br><br>
    <h2><b> All this for only BDT 499. </b></h2>
    <table>
        <tr>
            <td>
            <input type="Submit" name="Bkash" value="Bkash" >  
            </td>
            <td>
            <input type="Submit" name="Credit" Value="Credit Card"> 
            </td>
        </tr>
    </table>
     
       
    
    
    </form>

    <?php
    
    ?>
    </body>
</html>