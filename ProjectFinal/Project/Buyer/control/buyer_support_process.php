<?php
include('../model/db.php');
if(isset($_POST["submit"])){

    $problem=$_POST['support'];


    $urdb= new db();
    $myconn = $urdb->openCon();

    $urdb->addproblem($myconn,'buyer_problem',$problem,$_SESSION['username']);

    header("Location: buyer_support2.php");
}
?>