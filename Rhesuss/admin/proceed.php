<?php 
session_start(); 
include "../connect.php";

if (isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);


	if (empty($uname)) {
		header("Location: login.php?error=Email is required");
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
                 $_SESSION['id'] = $row['id'];
                
            	header("Location: changedet.php");
		        exit();
           }else{
				header("Location: admin.php?error=Incorect User name ");
		        exit();
			}
	
	}
        	}
    	}


