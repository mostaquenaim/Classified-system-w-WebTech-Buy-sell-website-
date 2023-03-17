<?php
include("../model/db.php");
$name = $_POST['name'];


if($name!="")
{

    $mydb= new db();
    $myconn = $mydb->openCon();
    $MyQuery=$mydb->searchProduct($name,"product",$myconn);
   


if ($MyQuery->num_rows > 0) {
    // echo "<table border=1><tr><th>username</th><th>First Name</th><th>Last Name</th><th>Email</th><th>address</th><th>Mobile</th></tr>";
    echo "<table border=1><tr><th>product Name</th><th>color</th><th>size</th><th>price</th></tr>";

    while($row = $MyQuery->fetch_assoc()) {
    //   echo "<tr><td>".$row["uname"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["mobno"]."</td></tr>";
      echo "<tr><td>".$row["name"]."</td><td>".$row["color"]."</td><td>".$row["size"]."</td><td>".$row["price"]."</td></tr>";
    }
    echo "</table>";
  } 
  
  else {
    echo "no product found!!";
  }
  
}
else{
  echo "please enter something";
}