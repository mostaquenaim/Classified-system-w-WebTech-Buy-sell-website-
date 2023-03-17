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

    $mydb->deleteRow($myconn,'buyer_info',$id);

     header("Location: admin_buyerlist.php");
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
<h2><center>All Registered Buyer List:</center></h2>
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

$userQuery=$connection->ShowAll($conobj,"buyer_info");

if ($userQuery->num_rows > 0) 
{
  echo "<table><tr><th>id</th><th>b_fname</th><th>b_lname</th><th>b_uname</th><th>b_mbl_no</th><th>b_email</th><th>b_pass</th><th>b_dob</th><th>b_gender</th><th>Delete</th></tr>";
  while($row = $userQuery->fetch_assoc())
  {
    echo "<tr><td>".$row["id"]."</td><td>".$row["b_fname"]."</td><td>".$row["b_lname"]."</td><td>".$row["b_uname"]."</td><td>".$row["b_mbl_no"]."</td><td>".$row["b_email"]."</td><td>".$row["b_pass"]."</td><td>".$row["b_dob"]."</td><td>".$row["b_gender"]."</td><td><a href='admin_buyerlist.php?id=".$row['id']."' > Delete </a></td></tr>";
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