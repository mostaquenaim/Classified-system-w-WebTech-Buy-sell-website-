<?php
include("../model/db.php");
session_start(); 

 $error="";
// store session data
if (isset($_POST["submit"])) {  
         
 
   
   if (empty($_POST["uname"]) || empty($_POST["pass"])) {
            
         $error = "Username or Password is invalid";
      }
      else
      { 
             $uname = $_POST['uname'];
             $pass = $_POST["pass"];
    

            $mydb= new db_seller();
            $myconn = $mydb->openCon();
            $result = $mydb->entryUser($uname,$pass,"sellerreg",$myconn);


            // $_SESSION["uname"] = $_POST["uname"];
            // $_SESSION["pass"] = $_POST["pass"];
            if ($result->num_rows > 0){
               $_SESSION["uname"] = $uname;
                   $_SESSION["pass"] = $pass;
                   header("Location: ../view/seller_profile.php");

            }
            else{
               echo "emon kono user nai";
            }

            // while($row = $result->fetch_assoc())
            
      //      

      }

// if (empty($_POST["uname"]) || empty($_POST["pass"])) {
// $error = "Username or Password is invalid";
// }
// else
// {



//    }

}


   if(isset($_POST["Rsubmit"])){
    header("Location: ../view/seller_view.php");
   }
   
 

?>