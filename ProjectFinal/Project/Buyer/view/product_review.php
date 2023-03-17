<?php

session_start();
include('../model/db.php');


if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

if(isset($_GET['id'])){
    $id=$_GET['id'];


    if(isset($_POST["submit"])){

        $review=$_POST['review'];
    
    
    
        $urdb= new db();
        $myconn = $urdb->openCon();
    
        $urdb->postreview($myconn,'buyer_review',$_SESSION['username'],$review,$id);
    
    
    
        header("review_poseted.php");

    }





?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    </head>
    <form action="" method="post">
    <body>

    <?php


    $urdb= new db();
    $myconn = $urdb->openCon();

    $result=$urdb->showbuy($myconn,'buyer_buy',$id,$_SESSION['username']);
    $result2=$urdb->showallreview($myconn,'buyer_review',$id);

    while($row = $result2->fetch_assoc())
    {

        echo "<b><i>".$row['b_uname']."</b></i>  :  ".$row['Review']."<br><br>";
        
        if($row['b_uname']==$_SESSION['username']){ 

            echo "<a href='review_delete.php?id=".$row['id']."'>   Delete </a>";
                

            }
        
    }




    
        if($result->num_rows > 0){ ?>

        <h3>Write review here</h3>
        <br>
        <textarea name="review" id="" cols="30" rows="10"></textarea>
        <br><br><button type="submit" name="submit" >Send </button>
        </form>
            
    <?php
        }
    
        echo"<br><br><a href='check_profile.php'>Home</a>";

    }


    ?>

        
    </body>
</html>