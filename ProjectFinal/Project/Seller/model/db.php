<?php
// session_start();
class db_seller
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
function insertUser($fname,$lname,$uname,$mobno,$NID,$email,$address,$dob,$pass,$table,$conn)//,$file
{
$sqlstr="INSERT into $table (fname,lname,uname,mobno,NID,email,address,dob,password) 
VALUES ('$fname','$lname','$uname','$mobno','$NID','$email','$address','$dob','$pass')";//,picture ,'$file'
if($conn->query($sqlstr))
{
    echo "data inserted";
}
else
{
echo "failed".$conn->error;
} 

}





function entryUser($uname,$pass,$table,$conn){
    $sqlstr = "SELECT * FROM sellerreg where uname = '$uname' and password = '$pass'";

if($conn->query($sqlstr))
{
    // $_SESSION["uname"] = $_POST["uname"];
    // $_SESSION["pass"] = $_POST["pass"];
    // // $_SESSION['IS_LOGIN']='yes';
    // header("Location: ../view/seller_profile.php");
    // // header("Location: ../view/seller_view.php");
    
    //  echo "data inserted";
    return true ;
}
else
{
    
echo "failed".$conn->error;
return false;
}
} 


// function entryUser($username,$password,$buyer_table,$conn){

//     $result = $conn->query("SELECT * FROM ". $buyer_table." WHERE uname='". $username."' AND pass='". $password."'");
//     return $result;
// }







function updateUser($fname,$lname,$uname,$email,$pass,$mobno,$table,$conn)
{
    
$sqlstr = "UPDATE sellerreg SET fname='$fname', lname='$lname', uname='$uname', password = '$pass', email='$email' WHERE mobno='$mobno'";
if($conn->query($sqlstr))
{
    echo "data updated successfully";
}
else
{
echo "failed".$conn->error;
} 
}

function deleteUser($mobno,$table,$conn)
{
$sqlstr = "DELETE FROM sellerreg WHERE mobno='$mobno' ";
if($conn->query($sqlstr))
{
    echo "data deleted successfully";
}
else
{
echo "failed".$conn->error;
} 
}

function listing($name,$size,$color,$price,$table,$conn)
{
    $sqlstr = "INSERT into $table (name,size,color,price) 
    VALUES ('$name','$size','$color','$price')";

if($conn->query($sqlstr))
{
    echo "inserted successfully";
}
else
{
echo "failed".$conn->error;
} 



}


function viewproduct($name,$size,$color,$price,$table,$conn)
{
    $sqlstr = "SELECT * from product";
    if($conn->query($sqlstr))
{
    echo "successfully";
}
else
{
echo "failed".$conn->error;
} 

}

function productUpdate($name,$size,$color,$price,$id,$table,$conn){
    $sqlstr = "UPDATE product SET  name='$name', size='$size', color = '$color', price='$price' WHERE id='$id'";
if($conn->query($sqlstr))
{
    echo "data updated successfully";
}
else
{
echo "failed".$conn->error;
} 
}
//     if($conn->query($sqlstr))
//     {   
//         // $result = $conn->query($sqlstr);
//         // myaqli_fetch_assoc($conn);
//         echo "successfully";
// }
// else
// {
// echo "failed".$conn->error;
// } 
// }
    


function report($report,$table,$conn){
    $sqlstr = "INSERT into $table (report_issue) 
    VALUES ('$report')";
if($conn->query($sqlstr))
{
    echo "Reported";
}
else
{
echo "failed".$conn->error;
} 
}



function GetUserByUname( $uname,$table,$conn)
 {
$result = $conn->query("SELECT * FROM  $table WHERE uname='$uname'");
 return $result;
 }




 function deleteProduct($id,$table,$conn)
 {
 $sqlstr = "DELETE FROM product WHERE id='$id'";
 if($conn->query($sqlstr))
 {
     echo "product deleted successfully";
 }
 else
 {
 echo "failed".$conn->error;
 } 
 }



 function searchProduct( $name,$table,$conn)
 {
$result = $conn->query("SELECT * FROM  product WHERE name='$name'");
 return $result;
 }











}
?>