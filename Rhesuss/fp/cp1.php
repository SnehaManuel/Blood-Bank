<?php 
session_start(); 
include "connect.php";

if (isset($_POST['uname']) && isset($_POST['npassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['npassword']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM dr WHERE user_name='$uname'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
                $query = "UPDATE dr
        	          SET password='$pass'
        	          WHERE user_name='$uname'";
                $query_run= mysqli_query($conn,$query);
            	header("Location: ../login.php?error=password changed");
		        exit();
           }else{
				header("Location: login.php?error=Incorect User name");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name ");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}