<?php
session_start(); 
include('../model/admin_db.php');
include('../control/admin_updateuser.php');


if(empty($_SESSION["email"])) // Destroying All Sessions
{
header("Location:admin_login.php"); // Redirecting To Home Page
}
?>

<html>
<body background="../uploads/admin/admin_registration_background.jpg">
<head>
<title>Sellhobe.com</title>
<link rel="icon" type="image/x-icon" href="../uploads/admin/buy_sell.ico">
<link rel="stylesheet" type="text/css" href="../css/admin_welcome_style.css">
</head>

<form>
<h2><center>Update Admin Information</center></h2>
<hr size="2" width="100%">
<h4><center>Currently loged in as: <?php echo $_SESSION["email"];?></center></h4>
<hr size="2" width="100%">
<center><button><a href="../view/admin_homepage.php">Back</a></button></center>
</form>

<center>
<?php
$radio1=$radio2=$radio3="";
$connection = new db();
$conobj=$connection->openCon();

$userQuery=$connection->loginuser($conobj,"admin",$_SESSION["email"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) 
{
  echo "<form action='' method='post'>";
  // output data of each row
  while($row = $userQuery->fetch_assoc()) 
  {
    echo "fname : <input type='text' name='fname' value=".$row["fname"]." > <br>";
    echo "lname : <input type='text' name='lname' value=".$row["lname"]." ><br>";
    echo "age : <input type='text' name='age' value=".$row["age"]." ><br>";
    echo "nid : <input type='text' name='nid' value=".$row["nid"]." ><br>";
    echo "address : <input type='text' name='address' value=".$row["address"]." ><br>";
    echo "password : <input type='text' name='password' value=".$row["password"]." ><br>";
    echo "mobile : <input type='text' name='mobile' value=".$row["mobile"]." ><br>";
    echo "email : <input type='text' name='email' value=".$row["email"]." ><br>";
    if($row["gender"]=="female")
    {
      $radio1="checked"; 
    }
    else if($row["gender"]=="male")
    { 
      $radio2="checked";
    }
    else
    {
      $radio3="checked";
    }
    echo "Gender:
    <input type='radio' name='gender' value='female' $radio1>Female
    <input type='radio' name='gender' value='male' $radio2>Male
    <input type='radio' name='gender' value='other' $radio3> Other";
  }
  echo "<br><input name='update' type='submit' value='Update'>";
} 
else 
{
  echo "0 results";
}
?>
</center>
</body>
</html>