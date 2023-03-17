<?php
class db
{
    function openCon()
    {
$servername="localhost";
$username="root";
$password="";
$dbname="project";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    echo "error connecting db";
}
return $conn;
    }

    



function insertUser($M_fname,$M_lname,$Dateofbirth,$NID,$Email,$Address,$gender,$Password,$Branch,$table,$conn)
{ 
$sqlstr="INSERT into $table (M_fName,M_lName,Dateofbirth,NID,Email,Address,gender,Password,Branch) VALUES ('$M_fname','$M_lname','$Dateofbirth','$NID','$Email','$Address','$gender','$Password','$Branch')";

if($conn->query($sqlstr))
{
    echo "Data inserted Successfully , Welcome as a new Manager!";
}
else
{
echo "failed".$conn->error;
} 
}




function loginuser($conn,$registration,$Email,$Password)
{
    $result = $conn->query("SELECT * FROM ".$registration." WHERE Email='". $Email."' AND Password='". $Password."'");
    return $result;
}

function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function UpdateUser($conn,$registration,$Email,$M_fName,$gender)
 {
     $sql = "UPDATE $registration SET M_fName='$M_fName', gender='$gender' WHERE Email='$Email' ";

    if ($conn->query($sql) == TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }

 
 function GetUserByUname($conn,$table, $uname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE Email='$uname'");
 return $result;
 }



 function DeleteUser($conn,$registration,$Email)
 {
     $sql = "DELETE FROM $registration WHERE Email='$Email' ";

    if ($conn->query($sql) == TRUE) {
        $result= "Record updated successfully";
        session_destroy();
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }
 

 function searchProduct( $name,$table,$conn)
 {
$result = $conn->query("SELECT * FROM  product WHERE name='$name'");
 return $result;
 }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>