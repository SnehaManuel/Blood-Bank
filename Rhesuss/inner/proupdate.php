<?php 
session_start(); 
include "../connect.php";


if (isset($_SESSION['password']) && isset($_SESSION['user_name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
   	$uname = validate($_SESSION['user_name']);
    $age =validate($_POST['age']);
	$town = validate($_POST['place']);
    $phone = validate($_POST['phone']);
	$gender = validate($_POST['gender']);
    $bg = validate($_POST['bg']);
	$name = validate($_POST['name']);
	
		$sql = "SELECT * FROM dr WHERE user_name='$uname'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
                $query = "UPDATE dr
        	          SET Name='$name',Age='$age',town='$town',Bloodgroup='$bg',Phone='$phone',Gender='$gender'
        	          WHERE user_name='$uname'";
                $query_run= mysqli_query($conn,$query);
            	header("Location: profile.php?error=Profile Updated");
		        exit();
           
	}
            
    }
    }