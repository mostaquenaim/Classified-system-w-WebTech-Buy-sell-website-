<?php

include("../control/bkash_pay_process.php");
// session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css" onsubmit="return formcheck3()">
    </head>
    <body>
    
    <form action="" method="post" enctype="multipart/form-data">
    <table>
        

            <tr>
                <td>
                Bkash no. 
                </td>
                <td><input type="text" name="phoneno" id="mobile" placeholder="ignore first '0' e.g. 1758550331" onkeyup="mobilecheck()"> 

                </td>
                <td>
                    <label id="mobchk"></label>
                </td>
            </tr>

            <tr>
                <td>
                Pin  
                </td>
                <td>
                <input type="text" name="pin" id="pincheck" onkeyup="pincheck()">

                </td>
                <td> <label id="pinchk"></label> 
            </td>
                
                
            </tr>
            
            <tr>
                <td>
                <button type="submit" name="submit" value=""> Confirm</button>

                </td>
            </tr>
        
    

     
    </table>

    <!-- buyer_premium2 -->
    <script src="../js/myscript.js"></script>


    </body>
</html>