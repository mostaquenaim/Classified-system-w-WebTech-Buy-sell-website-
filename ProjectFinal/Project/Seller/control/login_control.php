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
    

            // $mydb= new db_2();
            // $myconn = $mydb->entryCon();
            // $var = $mydb->entryUser($uname,$pass,"sellerreg",$myconn);
            $mydb= new db_seller();
            $myconn = $mydb->openCon();
            $gandu = $mydb->entryUser($uname,$pass,"sellerreg",$myconn);


            // $_SESSION["uname"] = $_POST["uname"];
            // $_SESSION["pass"] = $_POST["pass"];
            if($gandu){
                   $_SESSION["uname"] = $_POST["uname"];
                   $_SESSION["pass"] = $_POST["pass"];
                   header("Location: ../view/seller_profile.php");
            }
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