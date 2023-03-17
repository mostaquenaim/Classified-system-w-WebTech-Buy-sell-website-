

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


 <!-- <table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>size</th>
        <th>color</th>
        <th>price</th>
    </tr>
    <?php
    while($data = mysqli_fetch_assoc($conn))
    ?>
    <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['name']?></td>
        <td><?php echo $data['size']?></td>
        <td><?php echo $data['color']?></td>
        <td><?php echo $data['price']?></td>
    </tr>

</table> -->


<?php  
       error_reporting(0);
       $servername = "localhost";
       $username = "root";
       $password = "";
       $database = "finalproject";

       $conn = new mysqli($servername, $username, $password, $database);

       if ($conn->connect_error) 
       {
          die("Connection failed: " . $conn->connect_error);
       }

    $sqlrt = "SELECT * FROM product";
    $result = $conn->query($sqlrt);

       if ($result->num_rows == 0) 
       {
         echo "No Records Found!";
       } 

    else {
        echo "<table border='2'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>name</th>";
        echo "<th>size</th>";
        echo "<th>Color</th>";
        echo "<th>Price</th>";
        // echo "<th>Username</th>";
        echo "<th>Operations</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($data = mysqli_fetch_assoc($result)) 
        {
        echo "<tr>";
        echo "<td>". $data[id] ."</td>";
        echo "<td>". $data[name] ."</td>";
        echo "<td>". $data[size] ."</td>";
        echo "<td>". $data[color] ."</td>";
        echo "<td>". $data[price] ."</td>";
        // echo "<td>". $data[Username] ."</td>";
        echo "<td>" . "<a href='p_update_view.php?id=" . $data[id] . "'>Update</a>"."</td>";
        echo "</tr>";
        }
// <a href='ProductDelete.php?id=" . $data[id] . "'>Delete</a>
        echo "</tbody>";
        echo "</table>";
    }
?><br>
<a href="../view/seller_profile.php"><button>Go Back</button></a>
    
</body>
</html>