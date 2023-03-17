<?php
session_start(); 
include('../model/admin_db.php');

if(empty($_SESSION["email"])) // Destroying All Sessions
{
header("Location:admin_login.php"); // Redirecting To Home Page
}
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->deleteRow($myconn,'delivery_cod',$id);

     header("Location: admin_delivery_cod.php");
}
?>
<html>
<body background="../uploads/admin/admin_registration_background.jpg">
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>
<form>
<h2><center>Cash on delivery Listings</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_delivery.php">Back</a></button></center>
</form>

<form>
<center>
<?php
$connection = new db();
$conobj=$connection->openCon();
$userQuery=$connection->ShowAll($conobj,"delivery_cod");

if ($userQuery->num_rows > 0) 
{
  echo "<table><tr><th>Serial</th><th>Name</th><th>address</th><th>mobile</th><th>product</th><th>Deliverd?</th></tr>";
  while($row = $userQuery->fetch_assoc())
  {
    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["mobile"]."</td><td>".$row["product"]."</td><td><a href='admin_delivery_cod.php?id=".$row['id']."' > Yes </a></td></tr>";
  }
    echo "</table>";
  } 
  else 
  {
    echo "No results found! :(";
  }
?>
    </form>
</body>
</html>