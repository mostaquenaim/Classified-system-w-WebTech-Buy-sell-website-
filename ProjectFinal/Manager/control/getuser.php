<?php
include('../model/db.php');

$user = $_POST['Email'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByUname($conobj,"registration",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>username</th><th>Name</th><th>email</th><th>address</th></tr>";

    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["M_fName"]."</td><td>".$row["M_lName"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td></tr>";
    }
    echo "</table>";
  } 
  
  else {
    echo "Sorry! User Not Found";
  }
  
}
else{
  echo "please enter something";
}