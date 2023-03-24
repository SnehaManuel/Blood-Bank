<?php 
session_start(); 
include "connect.php";

if (isset($_POST['uname'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	

	if (empty($uname)) {
		header("Location:admin1.php?error=Email is required");
	    exit();
	}else{
		$sql = "SELECT * FROM dr WHERE user_name='$uname'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['password'] = $row['password'];
            	$_SESSION['name'] = $row['Name'];
                $_SESSION['age'] = $row['Age'];
                $_SESSION['gender'] = $row['Gender'];
                $_SESSION['place'] = $row['town'];
                $_SESSION['phone'] = $row['Phone'];
                $_SESSION['bg'] = $row['Bloodgroup'];
                 
                
            	header("Location: inner/admin3.php");
		        exit();
           }else{
				header("Location: admin1.php?error=Incorect User name");
		        exit();
			}
		}
	}
	
}else{
	header("Location: admin1.php");
	exit();
}