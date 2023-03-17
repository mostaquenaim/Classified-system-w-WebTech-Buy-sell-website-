<?php
include ("../model/db.php");
session_start();
if(isset($_POST["confirm"])){
        $bool1=true;
    $img_name = $_FILES['imagee']['name'];
	$img_size = $_FILES['imagee']['size'];
	$tmp_name = $_FILES['imagee']['tmp_name'];
	$error = $_FILES['imagee']['error'];

	if ($error === 0) {
		
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                // echo $new_img_name. "<br>";
				$img_upload_path = '../uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				// $sql = "INSERT INTO images(image_url) 
				//         VALUES('$new_img_name')";
				// mysqli_query($conn, $sql);
				// header("Location: view.php");
			}else {
                $bool1=false;
				echo "You can't upload files of this type<br>";
		        // header("Location: index.php?error=$em");
			}
		
	}else {

		echo "unknown error occurred!<br>";
		$bool1=false;
	}

    if($bool1){
        $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->updatedp($myconn,'buyer_info',$_SESSION['username'],$new_img_name);

    header("Location: Buyer_update2.php");

    }
    else{
        echo "not updated";
    }
    


}