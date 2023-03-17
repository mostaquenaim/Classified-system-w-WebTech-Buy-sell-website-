<?php
include('../model/admin_db.php');

$user = $_POST['email'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->GetUserByfname($conobj,"admin",$user );

if ($MyQuery->num_rows > 0) 
{
  echo "<table><tr><th>fname</th><th>lname</th><th>age</th><th>nid</th><th>address</th><th>gender</th><th>mobile</th><th>email</th><th>password</th></tr>";

  while($row = $MyQuery->fetch_assoc()) {
    echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["nid"]."</td><td>".$row["address"]."</td><td>".$row["gender"]."</td><td>".$row["mobile"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
  } 
  
  else {
    echo "User Not found! :(";
  }
  
}
else{
  echo "Please enter first name to search!";
}