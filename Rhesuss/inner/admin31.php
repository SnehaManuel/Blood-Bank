<?php
include("../connect.php");
error_reporting(0);

$uname=$_GET[''];
$query= "DELETE FROM dr WHERE user_name='$uname' ";

$data=mysqli_query ($conn,$query);


if($data)
{
    echo "<font color='red'> Record deleted from database!";
}
else{
    echo "<font color='red'> Record Deletion from database failed!";
}

?> 

