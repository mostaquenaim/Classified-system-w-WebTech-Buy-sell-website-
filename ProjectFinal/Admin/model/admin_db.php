<?php
class db
{
function openCon()
{
$servername="localhost";
$username="root";
$dbname="project";
$password="";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    echo "error connecting db";
}
return $conn;
}

function loginuser($conn,$admin,$email,$password)
{
    $result = $conn->query("SELECT * FROM ".$admin." WHERE email='". $email."' AND password='". $password."'");
    return $result;
}

function ShowAll($conn,$table)
{
    $result = $conn->query("SELECT * FROM  $table");
    return $result;
}

function UpdateMembership($conn,$admin,$id,$username,$package,$cost,$payment,$starting_date,$expiring_date)
{
    $sql = "UPDATE $admin SET username='$username',package='$package',cost='$cost',payment='$payment',starting_date='$starting_date',expiring_date='$expiring_date' WHERE id='$id' ";

    if ($conn->query($sql) == TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
}

function UpdateUser($conn,$admin,$id,$fname,$lname,$age,$nid,$address,$password,$mobile,$gender,$email)
{
    $sql = "UPDATE $admin SET fname='$fname',lname='$lname',age='$age',nid='$nid',address='$address',password='$password',mobile='$mobile', gender='$gender' WHERE email='$email' ";

    if ($conn->query($sql) == TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
}

function insertUser($fname,$lname,$age,$nid,$email,$address,$gender,$password,$mobile,$admin,$conn)
{ 
    $sqlstr="INSERT into $admin (fname,lname,age,nid,email,address,gender,password,mobile) VALUES ('$fname','$lname','$age','$nid','$email','$address','$gender','$password','$mobile')";
    if($conn->query($sqlstr))
    {
        echo "data inserted successfully!";
    }
    else
    {
    echo "failed".$conn->error;
    } 
}

function addPromo($conn,$promotions,$name,$description)
{
    $sql = "INSERT into $promotions (name,description) VALUES ('$name','$description')";

    if ($conn->query($sql)) 
    {
        echo "Record updated successfully";
    } 
    else 
    {
        echo "failed".$conn->error;
    }
}

function ShowReport($conn,$buyer_table)
{
    $sql = "SELECT * FROM $buyer_table";
    $result = $conn->query($sql);
    return $result;
 }
 
function GetUserByfname($conn,$admin, $fname)
{
   $result = $conn->query("SELECT * FROM  $admin WHERE fname='$fname'");
   return $result;
}

function deleteUser($email,$table,$conn)
{
    $sqlstr = "DELETE FROM admin WHERE email='$email' ";
    if($conn->query($sqlstr))
    {
        echo "Account deleted successfully";
    }
    else
    {
    echo "Error!! :o".$conn->error;
    }
}

function showRow($conn,$table_name)
{
    $sql = "SELECT * FROM $table_name";
    $result = $conn->query($sql);
    return $result;
 }

function deleteRow($conn,$table_name,$id)
{    
    $sqlstr="DELETE from $table_name WHERE id='$id'";

    if($conn->query($sqlstr))
    {
        echo "Deleted <br>";
    }
    else
    {
    echo "failed".$conn->error;
    }
}

function showdetails($conn,$table_name,$username)
{
    $sql = "SELECT * FROM $table_name WHERE b_uname='$username'";
    $result = $conn->query($sql);
    return $result;
}

function showSeller($conn,$seller_table)
{
    $sql = "SELECT * FROM $seller_table";
    $result = $conn->query($sql);
    return $result;
}

function showSellerdetails($conn,$buyer_table,$username)
{
    $sql = "SELECT * FROM $buyer_table WHERE s_uname='$username'";
    $result = $conn->query($sql);
    return $result;
}

function showproductdetails($conn,$table, $id)
{
    $result = $conn->query("SELECT * FROM  $table WHERE id='$id'");
    return $result;
}

function deleteReport($id,$table,$conn)
{
    $sqlstr = "DELETE FROM buyer_report WHERE id='$id' ";
    if($conn->query($sqlstr))
    {
        echo "Report deleted successfully";
    }
    else
    {
    echo "Error!! :o".$conn->error;
    } 
}

function CloseCon($conn)
{
    $conn -> close();
}

}
?>