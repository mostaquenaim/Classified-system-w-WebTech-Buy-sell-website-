<?php
    include("../model/db.php");
    // session_start();

    if(isset($_POST["submit"])){

    $name = $_POST["name"];            
    $size = $_POST["size"];            
    $color = $_POST["color"];            
    $price = $_POST["price"];    
    
            $mydb= new db_seller();
            $myconn = $mydb->openCon();
            $mydb->listing($name,$size,$color,$price,"product",$myconn);



		$nameeerr = $sizeerr = $colorerr = $priceerr = "";


        // if (empty($_POST["type"])) {
        // $typeerr = "Product Type Required!";
        // echo $typeerr;
        // }

		// else if (empty($_POST["color"])) {
		// $colorerr = "Product Color Required!";
		// echo $colorerr;
		// }

	    // else if(empty($_POST["size"])){
	    // $sizeerr = "Product Size Required!";
	    // echo $sizeerr;
		// }

	    // else if(empty($_POST["price"])){
	    // $priceerr = "Product Price Required!";
	    // echo $priceerr;
		// }
        // else{
        //     $mydb= new db();
        //     $myconn = $mydb->openCon();
        //     $mydb->listing($name,$size,$color,$price,"product",$myconn);

        // }

    }
           


        ?>