<?php
include('../model/admin_db.php');
session_start(); 

if(empty($_SESSION["email"])) // Destroying All Sessions
{
header("Location: ../control/admin_homepage.php"); // Redirecting To Home Page
}
?>

<html>
<head>
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>
<body background="../uploads/admin/admin_registration_background.jpg">
<form>
<h2><center>All Registered Admin List:</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_homepage.php">Back</a></button></center>
</form>

<form>
<center>
<?php
$connection = new db();
$conobj=$connection->openCon();

$userQuery=$connection->ShowAll($conobj,"admin");

if ($userQuery->num_rows > 0) 
{
  echo "<table><tr><th>fname</th><th>lname</th><th>age</th><th>nid</th><th>address</th><th>gender</th><th>mobile</th><th>email</th><th>password</th></tr>";
  while($row = $userQuery->fetch_assoc())
  {
    echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["nid"]."</td><td>".$row["address"]."</td><td>".$row["gender"]."</td><td>".$row["mobile"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
  }
    echo "</table>";
  } 
  else 
  {
    echo "No results found! :(";
  }
?>
</center>
</form>
</body>
</html>