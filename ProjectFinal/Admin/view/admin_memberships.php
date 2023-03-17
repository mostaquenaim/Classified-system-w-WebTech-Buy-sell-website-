<?php
session_start(); 
include('../model/admin_db.php');

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->deleteRow($myconn,'memberships',$id);

     header("Location: admin_memberships.php");
}
?>
<html>
<body background="../uploads/admin/admin_registration_background.jpg">
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>
<form>
<h2><center>Membership Status</center></h2>
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
$userQuery=$connection->ShowAll($conobj,"memberships");

if ($userQuery->num_rows > 0) 
{
  echo "<form action='' method='post'>";
  echo "<table><tr><th>Serial</th><th>Username</th><th>Package</th><th>Cost</th><th>Payment Status</th><th>Starting Date</th><th>Expiring Date</th><th>Invoke</th></tr>";

  while($row = $userQuery->fetch_assoc()) 
  {
    echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["package"]."</td><td>".$row["cost"]."</td><td>".$row["payment"]."</td><td>".$row["starting_date"]."</td><td>".$row["expiring_date"]."</td><td><a href='admin_memberships.php?id=".$row['id']."' > Yes </a></td></tr>";
  }
  echo "</table>";
  }
  else 
  {
    echo "No results found! :(";
  }
?>
</body>
</html>