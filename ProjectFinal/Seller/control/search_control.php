<?php
include("../model/db.php");
$uname = $_POST['uname'];
// $mobno = $_POST['mobno'];

if($uname!="")
{

    $mydb= new db_seller();
    $myconn = $mydb->openCon();
    $MyQuery=$mydb->GetUserByUname($uname,"sellerreg",$myconn);
    

if ($MyQuery->num_rows > 0) {
    echo "<table border=1><tr><th>username</th><th>First Name</th><th>Last Name</th><th>Email</th><th>address</th><th>Mobile</th></tr>";

    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["uname"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["mobno"]."</td></tr>";
    }
    echo "</table>";
  } 
  
  else {
    echo "no user found!!";
  }
  
}
else{
  echo "please enter something";
}