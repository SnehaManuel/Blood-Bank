<?php 
session_start(); 
include "connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM dr WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
                $_SESSION['password'] = $row['password'];
            	$_SESSION['name'] = $row['Name'];
                $_SESSION['age'] = $row['Age'];
                $_SESSION['gender'] = $row['Gender'];
                $_SESSION['place'] = $row['town'];
                $_SESSION['phone'] = $row['Phone'];
                $_SESSION['bg'] = $row['Bloodgroup'];
                 $_SESSION['id'] = $row['id'];
                
            	header("Location: inner/profile.php");
		        exit();
           }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}