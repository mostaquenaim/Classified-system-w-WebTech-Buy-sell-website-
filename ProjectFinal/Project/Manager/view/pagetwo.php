<?php
include('../model/db.php');
session_start(); 

if(empty($_SESSION["Email"])) // Destroying All Sessions
{
header("Location: ../control/loginprocess.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="../css/sellershow.css">
<body>
  <center>
<h2>Manager Details Page</h2>
<br/>

<?php
$connection = new db();
$conobj=$connection->openCon();

$userQuery=$connection->ShowAll($conobj,"registration");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>M_fName</th><th>Email</th><th>Address</th><th>Branch</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["M_fName"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Branch"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }



?>





<a href="../control/logout.php">logout</a>
</center>
</head>
</body>
</html>