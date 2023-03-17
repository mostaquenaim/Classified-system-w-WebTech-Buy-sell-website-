<?php
include('../model/admin_db.php');
session_start(); 

if(empty($_SESSION["email"])) // Destroying All Sessions
{
header("Location: ../control/admin_homepage.php"); // Redirecting To Home Page
}
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->deleteRow($myconn,'seller_table',$id);

     header("Location: admin_sellerlist.php");
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
<h2><center>All Registered Seller List:</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_showBuyerSeller.php">Back</a></button></center>
</form>

<form>
<center>
<?php
$connection = new db();
$conobj=$connection->openCon();

$userQuery=$connection->ShowAll($conobj,"seller_table");

if ($userQuery->num_rows > 0) 
{
  echo "<table><tr><th>id</th><th>s_uname</th><th>s_phone</th><th>s_address</th><th>Delete</th></tr>";
  while($row = $userQuery->fetch_assoc())
  {
    echo "<tr><td>".$row["id"]."</td><td>".$row["s_uname"]."</td><td>".$row["s_phone"]."</td><td>".$row["s_address"]."</td><td><a href='admin_sellerlist.php?id=".$row['id']."' > Delete </a></td></tr>";
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