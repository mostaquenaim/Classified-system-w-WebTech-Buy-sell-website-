<?php
session_start(); 
include('../model/admin_db.php');

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->deleteRow($myconn,'reports',$id);

     header("Location: admin_reportlist.php");
}
?>
<html>
<body background="../uploads/admin/admin_registration_background.jpg">
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>
<form>
<h2><center>Report List</center></h2>
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
$userQuery=$connection->ShowAll($conobj,"reports");

if ($userQuery->num_rows > 0) 
{
  echo "<table><tr><th>Serial</th><th>Report Content</th><th>Shop/Seller Name</th><th>Delete</th></tr>";
  while($row = $userQuery->fetch_assoc())
  {
    echo "<tr><td>".$row["id"]."</td><td>".$row["report"]."</td><td>".$row["shop_name"]."</td><td><a href='admin_reportlist.php?id=".$row['id']."' > Delete </a></td></tr>";
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