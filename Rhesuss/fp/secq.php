<?php 
session_start(); 
include "connect.php";

if (isset($_POST['uname']) && isset($_POST['security'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['security']);

	if (empty($uname)) {
		header("Location: forgot.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: forgot.php?error=security answer is required");
	    exit();
	}else{
		$sql = "SELECT * FROM dr WHERE user_name='$uname' AND security='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['security'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	
            	header("Location: cp.php");
		        exit();
           }else{
				header("Location: forgot.php?error=Incorect User name or security answer");
		        exit();
			}
		}else{
			header("Location: forgot.php?error=Incorect User name or security answer");
	        exit();
		}
	}
	
}else{
	header("Location: forgot.php");
	exit();
}