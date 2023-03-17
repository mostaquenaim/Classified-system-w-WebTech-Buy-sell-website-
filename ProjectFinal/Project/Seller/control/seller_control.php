<?php

include("../model/db.php");
// $file="";

if(isset($_POST['submit'])){


    // name 
    // $file= $_POST ['picture'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $patternName="/^[a-zA-z]*$/";
    if(empty($fname) || empty($lname)){
        // echo " First name or last name cannot be empty <br> ";
    }
    else{
        if(!preg_match($patternName, $fname) || !preg_match($patternName, $lname)){
            // echo "Only alphabets and whitespace are allowed <br>"; 
        }else{
            // echo $fname ." ";
            // echo $lname ."<br>";
        }
    }
 
    // user name 
    $uname = $_POST['uname'];
    if(!preg_match(("/^[a-z]*$/"), $uname)){
        // echo "user name should be small alphabets <br>";
    }else{
        // echo "User name is :".$uname ."<br>";
    }

    // mobile no 
    $mobno = $_POST['mobno'];
    // $Mpattern="/^[013,017,018,015,016,019]{3}[0-9]{8}$^/";
    $Mpattern="/^[013,017,018,015,016,019]{3}[0-9]{8}$^/";
    if(is_numeric($mobno) && strlen($mobno)==11 && !preg_match($Mpattern,$mobno)){
        // echo "Mobile no :". $mobno ."<br>";
    }else{
        // echo "You should enter only numbers <br>";
    }

    // NID 
    $NID = $_POST["NID"];
    if(is_numeric($NID) && strlen($NID)==13){
        // echo "NID no :". $NID ."<br>";
    }else{
        // echo "You should enter only numbers <br>";
    }



    // email 

    $email = $_POST['email'];
    $pattern = "/^[_a-z-]+(\.[_a-z-]+)*@[a-z-]+(\.[a-z-]+)*(\.[a-z]{2,3})$^/";  
    // $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^/";  
    if (!preg_match ($pattern, $email)){
        // echo "Invalid email!! <br>";  
    }else{
        // echo "email address is: " .$email ."<br>";  
    }  

    // address 

    $address = $_POST['address'];
    if(empty($address)){
        // echo "Address is required <br>";
    }else{
        // echo "Address :".$address ."<br>";
    }
    
    // dob 
    $dob = $_POST['dob'];
    if(empty($dob)){
        // echo " Enter date of birth <br>";
    }else{
        // echo "Date of birth: ".$dob ."<br>";
    }

    // password 

    // $patternPass= "/^[ A-Za-z0-9_@./#&+-]*$/;";//"/^[ A-Za-z0-9_@./#&+-]*$/"; //"^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*.!@$%^&(){}[]:;<>,.?/~_+-=|\]).{6,32}$";
    $patternPass= "/^[ A-Za-z0-9]*$/";
    $pass = $_POST["pass"];
    $confirmpass = $_POST["confirmpass"];
    // if(!preg_match( $patternPass, $pass) && strlen($confirmpass) < 6) {
    //     echo "-Password should be at least 6 characters in length<br>"; 
    //     echo "-should include at least one upper case letter<br>";
    //     echo "-should include at least one lower case letter<br>";
    //     echo "-one number<br>";
    // }else{
       
    // }
    
    if ($_POST["pass"] == $_POST["confirmpass"]) { 
        // echo "password entered!<br>";
     }
     else {
        // echo "password did not match!<br>";
     }
    


    // robot 
    if(!isset($_POST["robot"])){
    //    echo "You must verify that you are not a robot<br>";
    }

    // 

    // photo 
    // $file= $_POST["file"];
    // echo $_FILES["file"]["name"];
    // if(move_uploaded_file($_FILES["file"]["tmp_name"])){//,"../uploads/file.jpeg"
    //     echo "<br>File Uploaded";
      
    // }else{
    //     echo "File not uploaded";
    // }

    $mydb= new db_seller();
    $myconn = $mydb->openCon();
    $mydb->insertUser($fname,$lname,$uname,$mobno,$NID,$email,$address,$dob,$pass,"sellerreg",$myconn);//,$file
    
}
// else if(!isset($_POST['submit'])){
//     echo "please fill the form";
// }else{
//     echo "data inserted";
// }
    





    
    // $formdata = array
    // (
    //     "fname: "=> $_POST["fname"],
    //     "lname: "=> $_POST["lname"],
    //     "uname: "=> $_POST["uname"],
    //     "mobno: "=> $_POST["mobno"],
    //     "NID: "=> $_POST["NID"],
    //     "email: "=> $_POST["email"],
    //     "address: "=> $_POST["address"],
    //     "dob:"=> $_POST["dob"],
    //     "pass: "=> $_POST["pass"]
        
    // );

    // $existingdata = file_get_contents("../data/seller_data.json");
    // $tempJSONdata = json_decode($existingdata);
    // $tempJSONdata[] =$formdata;

    // //Convert updated array to JSON
    // $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
    // //write json data into data.json file
    // if(file_put_contents("../data/seller_data.json", $jsondata))
    // {
    //     echo "<br> Data successfully saved <br>";
    // }
    // else 
    // {
    //     echo " no data saved!";
    //     echo "<br>";
    // }
    // $data = file_get_contents("../data/seller_data.json");
    // $mydata = json_decode($data);






// if(isset($_POST["Asubmit"])){
//     header("Location: ../view/seller_login.php");
//    }

if(isset($_POST["Bsubmit"])){
    header("Location: ../view/seller_login.php");
   }






?>