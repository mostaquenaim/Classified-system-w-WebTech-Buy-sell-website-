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


function insertUser($buyer_fname,$buyer_lname,$b_uname,$b_mbl_no,$b_email,$b_pass,$b_dob,$b_gender,$b_file,$buyer_table,$conn)
    {
    //$sqlstr="INSERT into $table (fname,lname,age,designation,planguage,email,password,picture,premium) 
    //VALUES ('$fname','$lname',$age,'$desg','$pre','$email','$password','$file','no)";

    $sqlstr="INSERT into $buyer_table (b_fname,b_lname,b_uname,b_mbl_no,b_email,b_pass,b_dob,b_gender,b_file,premium_check) 
    VALUES ('$buyer_fname','$buyer_lname','$b_uname',$b_mbl_no,'$b_email','$b_pass','$b_dob','$b_gender','$b_file','no')";

        if($conn->query($sqlstr))
        {
            echo "data inserted";
        }
        else
        {
        echo "failed".$conn->error;
        } 
    }

function CheckUser($conn,$buyer_table,$username,$password){

        $result = $conn->query("SELECT * FROM ". $buyer_table." WHERE b_uname='". $username."' AND b_pass='". $password."'");
        return $result;
}
//$first,$last,$user,$mobile,$email,$password,$dob,$file,"buyer_info",$myconn)
function UpdateUser($first,$last,$user,$mobile,$email,$password,$dob,$table,$conn)
 {
     $sql = "UPDATE $table SET b_fname='$first',b_lname='$last',b_mbl_no='$mobile',b_email='$email',b_pass='$password',b_dob='$dob' WHERE b_uname='$user' ";

    if ($conn->query($sql) == TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }

 function updatepremium($username,$prm,$table,$conn){

    $sql = "UPDATE $table SET premium_check='$prm' WHERE b_uname='$username' ";

    if ($conn->query($sql) == TRUE) {
        //$result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;

 }

 function updatedp($conn,$table,$username,$file){
    $sql = "UPDATE $table SET b_file='$file' WHERE b_uname='$username' ";

    if ($conn->query($sql) == TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }

function deletebuyer($conn,$table,$username)
{
    $sql = "DELETE FROM $table WHERE b_uname='$username' ";
    $result=$conn->query($sql);
    return $result;
}

function showchatwidseller($conn,$table,$busername,$susername){
    $sql = "SELECT * FROM $table WHERE b_uname='$busername' AND s_uname='$susername'";
    $result=$conn->query($sql);
    return $result;
}

function chatwidseller($conn,$table,$s_username,$b_name,$msg){

    $sqlstr = "INSERT into $table (b_uname,s_uname,buyer_msg) 
    VALUES ('$b_name','$s_username','$msg')";
    $conn->query($sqlstr);

    $result=$conn->query($sqlstr);

    return $result;
    
} 

 function showdetails($conn,$buyer_table,$username){
    $sql = "SELECT * FROM $buyer_table WHERE b_uname='$username'";
    $result = $conn->query($sql);
    return $result;
 }

 function premiumcheck($conn,$buyer_table,$username,$prm){
    $sql = "SELECT * FROM $buyer_table WHERE b_uname='$username' AND premium_check='$prm'";
    $result = $conn->query($sql);
    return $result;
 }

function createcarttable($conn,$buyer_table){
    $sql = " CREATE TABLE IF NOT EXISTS $buyer_table
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (100)
                            );";

                            if($conn->query($sql))
                            {
                                echo "data inserted";
                            }
                            else
                            {
                            echo "failed".$conn->error;
                            } 
    $w_table= "wish_".$buyer_table;                  
    $sql = " CREATE TABLE IF NOT EXISTS $w_table
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (100)
                            );";

                            if($conn->query($sql))
                            {
                                echo "data inserted";
                            }
                            else
                            {
                            echo "failed".$conn->error;
                            }    

    $b_table= "buy_".$buyer_table;                  
    $sql = " CREATE TABLE IF NOT EXISTS $b_table
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (100)
                            );";

                            if($conn->query($sql))
                            {
                                echo "data inserted";
                            }
                            else
                            {
                            echo "failed".$conn->error;
                            }    
    
 }

function addtocart($conn,$table,$buyer_uname, $product_id, $product_name) {
    
    $sqlstr="INSERT into $table (buyer_uname,product_id,product_name) 
    VALUES ('$buyer_uname','$product_id','$product_name')";

        if($conn->query($sqlstr))
        {
            echo "ADDED TO CART SUCCESSFULLY<br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
}

function addtowish($conn,$table,$buyer_uname, $product_id, $product_name) {
    
    $sqlstr="INSERT into $table (buyer_uname,product_id,product_name) 
    VALUES ('$buyer_uname','$product_id','$product_name')";

        if($conn->query($sqlstr))
        {
            echo "ADDED TO WISHLIST SUCCESSFULLY<br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
}

function showwish($conn,$table,$uname){
    $sql = "SELECT * FROM $table WHERE buyer_uname='$uname'";
    $result = $conn->query($sql);
    return $result;
}

function deletefromwish($conn,$buyer_table,$id){
    
    $sqlstr="DELETE from $buyer_table WHERE id='$id'";

        if($conn->query($sqlstr))
        {
            echo "Deleted <br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
}

function insertIntoCart($product_name,$product_price,$buyer_table,$conn){
    $sqlstr="INSERT into $buyer_table (product_name,product_price) 
    VALUES ('$product_name','$product_price')";

        if($conn->query($sqlstr))
        {
            echo "data inserted<br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
 }


function showcart($conn,$buyer_table,$uname){
    $sql = "SELECT * FROM $buyer_table WHERE buyer_uname='$uname'";
    $result = $conn->query($sql);
    return $result;
 }

function deletefromcart($conn,$buyer_table,$id){
    
    $sqlstr="DELETE from $buyer_table WHERE id='$id'";

        if($conn->query($sqlstr))
        {
            echo "Deleted <br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
}

function addtobuy($buyer_uname,$id,$payment,$date,$product_name,$product_price,$buyer_table,$conn){


    $sqlstr="INSERT into $buyer_table (buyer_uname,product_id,product_name,product_price,payment,buy_date) 
    VALUES ('$buyer_uname','$id','$product_name','$product_price','$payment','$date')";

        if($conn->query($sqlstr))
        {
            echo "data inserted<br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
 }

function showbuyinghistory($conn,$buyer_table,$uname){
        $sql = "SELECT * FROM $buyer_table WHERE buyer_uname='$uname'";
        $result = $conn->query($sql);
        return $result;
}

function postreview($conn,$table, $uname,$review,$id){
    $sqlstr="INSERT into $table (b_uname,product_id,Review) 
    VALUES ('$uname','$id','$review')";

        if($conn->query($sqlstr))
        {
            // echo "data inserted<br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
}

function showbuy($conn,$buyer_table,$id,$uname){

    $sql = "SELECT * FROM $buyer_table WHERE buyer_uname='$uname' AND product_id='$id'";
        $result = $conn->query($sql);
        return $result;

}

function showallreview($conn,$buyer_table,$id){

    $sql = "SELECT * FROM $buyer_table WHERE product_id='$id'";
        $result = $conn->query($sql);
        return $result;

}


function reportproduct($conn,$table, $id,$uname,$report)
{
    $sqlstr="INSERT into $table (b_uname,product_id,report) 
    VALUES ('$uname','$id','$report')";

        if($conn->query($sqlstr))
        {
            echo "data inserted<br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
}

function GetProductByUname($conn,$table, $pname)
{
    $result = $conn->query("SELECT * FROM  $table WHERE up_product_name like '%$pname%'");
 return $result;
 }

function insertcomment($conn,$table, $uname,$comment,$id){
    $sqlstr="INSERT into $table (b_uname,product_id,Comment) 
    VALUES ('$uname','$id','$comment')";

        if($conn->query($sqlstr))
        {
            echo "data inserted<br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
}

function showcomment($conn,$table,$id){
    $result = $conn->query("SELECT * FROM  $table WHERE product_id='$id' ");
 return $result;
}

function deletecomment($conn,$table, $uname,$id,$commentid){
    $result = $conn->query("DELETE FROM  $table WHERE product_id='$id' AND  b_uname='$uname' AND id='$commentid' ");
    return $result;
}


function deleteproductcomment($myconn,$table,$id)
{
    $result = $myconn->query("DELETE FROM  $table WHERE id='$id' ");
    return $result;
}

function deleteproductreview($myconn,$table,$id)
{
    $result = $myconn->query("DELETE FROM  $table WHERE id='$id' ");
    return $result;
}

 function showproductdetails($conn,$table, $id)
{
    $result = $conn->query("SELECT * FROM  $table WHERE id='$id'");
    return $result;
}


function addproblem($conn,$table, $problem,$user)
{
    $sqlstr="INSERT into $table (b_uname,problem) 
    VALUES ('$user','$problem')";

        if($conn->query($sqlstr))
        {
            //echo "data inserted<br>";
        }
        else
        {
        echo "failed".$conn->error;
        }
}
// f
function CloseCon($conn)
 {
 $conn -> close();
 }

}



?>