<?php
session_start(); 
include('../model/db.php');
include('../control/updatecheck.php');


if(empty($_SESSION["Email"])) // Destroying All Sessions
{
header("Location:login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
  <head><link rel="stylesheet" type="text/css" href="../css/sellershow.css">
  
<body>
  <center>

<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["Email"];?></h3>
<br/>Update information

<?php
$radio1=$radio2=$radio3="";
$connection = new db();
$conobj=$connection->openCon();

$userQuery=$connection->loginuser($conobj,"registration",$_SESSION["Email"],$_SESSION["Password"]);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "M_fName : <input type='text' name='M_fName' value=".$row["M_fName"]." > <br>";
      echo "Email : <input type='text' name='Email' value=".$row["Email"]." ><br>";
      if(  $row["gender"]=="female" )
      {        $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
     echo "Gender:
     <input type='radio' name='gender' value='female' $radio1>Female
     <input type='radio' name='gender' value='male' $radio2>Male
     <input type='radio' name='gender' value='other' $radio3> Other";
    }
    echo   "<input name='update' type='submit' value='Update'>";
  } 
  else {
    echo "0 results";
  }
  

  echo"</form>";



?>


<br>
<label>Check the updated details ? please type the email</label>
<br>

  <input type="text" id="Email" >
  <button onclick="showmyuser()">Search</button>
  
<p id="mytext"></p>
 
<a href="../control/logout.php">logout</a>
<script src="../js/myscript.js"></script>
</center>
</head>
</body>
</html>