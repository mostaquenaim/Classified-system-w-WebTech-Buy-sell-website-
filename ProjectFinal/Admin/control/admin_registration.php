<?php
include("../model/admin_db.php");
if(isset($_POST["submit"]))
{
    //Unique - First Name must be only upper case words
    $fname = $_POST["fname"];
    if(empty($fname))
    {
        $fnameErr = "You haven't entered your first name!";
        echo "<br>";
        $errorFlag=true;
    }
    else
    {
        if (!preg_match("/^[A-Z-' ]*$/",$fname))
        {
            $fnameErr = "Must be Alphabets & CAPITAL letters! :(";
            echo "<br>";
            $errorFlag=true;
        }
        else 
        {
            echo "<br>";
        }
    }
    
    //Unique - Last Name must be only lower case words
    $lname = $_POST["lname"];
    if(empty($lname))
    {
        $lnameErr = "You haven't entered your last name!";
        echo "<br>";
        $errorFlag=true;
    }
    else
    {
        if (!preg_match("/^[a-z-' ]*$/",$lname))
        {
            $lnameErr = "Must be Alphabets & small letters! :(";
            $errorFlag=true;
            echo "<br>";
        }
        else 
        {
            echo "<br>";
        }
    }

    //Unique - Age must be number + age must be more than 9 years
    $age = $_POST["age"];  
    if (!preg_match ("/^[0-9\+]*$/", $age) && strlen($age)>1)
    {  
        echo "Must be Numbers & over 9 years! :(";
        echo "<br>"; 
        $errorFlag=true;
    } 
    else
    {  
        echo "<br>";
    }

    #unique .com has to be at the end
    $email = $_POST["email"];
    if (empty($email) && !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
    {
        echo "Invalid email!";
        echo "<br>";
        $errorFlag=true;
    }
    else 
    {
        echo "<br>";
    }

    //Unique - password must be at least 6 char/one small/large/number/symbol
    $password = $_POST["password"];
    if(strlen($password)>6 && !preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,20}$/ix',$password))
    {
        echo "Password must be at least 8 char & include at least one upper case, one number, special char!";
        echo "<br>";
    }
    else
    {
        echo "<br>";
    }
    
    //Unique - NID must be number + 10 char
    $nid = $_POST["nid"];
    if(empty($nid) && strlen($nid)==10)
    {
        $nidErr = "You haven't entered your NID Information!";
        echo "<br>";
        $errorFlag=true;
    }
    else
    {
        if(is_numeric($nid) && strlen($nid)==10)
        {
            echo "<br>";
        }
        else
        {
            echo "NID can't have symbols/letters! and must be 10 digit!";
            echo "<br>";
            $errorFlag=true;
        }
    }
    
    //Unique - Mobile number must be 11 digit & Numbers
    $mobile = $_POST["mobile"];  
    if (!preg_match ("/^[0-9\+]*$/", $mobile) && strlen($mobile)==11)
    {  
        echo "Mobile number must be 11 digit & Numbers! :(";
        echo "<br>"; 
        $errorFlag=true;
    } 
    else
    {  
        echo "<br>";
    }

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $nid=$_POST["nid"]; 
    $email=$_POST["email"];
    $address=$_REQUEST["address"];
    $gender=$_REQUEST["gender"];
    $password=$_POST["password"];
    $mobile=$_POST["mobile"];
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser($fname,$lname,$age,$nid,$email,$address,$gender,$password,$mobile,"admin",$myconn);
}
?>