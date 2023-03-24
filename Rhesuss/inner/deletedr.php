<?php 
session_start(); 
include "../connect.php";


if (isset($_SESSION['user_name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
   	$uname = validate($_SESSION['user_name']);

    

$sql = "DELETE FROM dr WHERE email='uname'";

if ($conn->query($sql) === TRUE) {
 	header("Location: ../admin1.php?error=Profile deleted");
		        exit();
           
} else {
  echo "Error deleting record: " . $conn->error;
}

?>