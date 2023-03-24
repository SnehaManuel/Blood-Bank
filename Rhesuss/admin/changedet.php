<?php 
session_start(); 
include ('../connect.php');

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	  $uname = $_SESSION['user_name'];
	$pass =$_SESSION['id'];
		$sql = "SELECT * FROM dr WHERE user_name='$uname' AND id='$pass'";
		$result = mysqli_query($conn, $sql);

	
            if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['id'] === $pass) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
 
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>WELCOME TO THE ADMIN PAGE! </h4>
                    </div>
                    <div class="card-body">

                        <form action="code3.php" method="POST">

         
                            
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $row['Name']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Age</label>
                                <input type="number" name="age" class="form-control" value="<?php echo $row['Age']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Security answer</label>
                                <input type="text" name="sec" class="form-control" value="<?php echo $row['security']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control" value="<?php echo $row['password']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone No.</label>
                                <input type="tel" name="phone" class="form-control" value="<?php echo $row['Phone']; ?>">
                            </div>
                            <div style="width:150%;overflow:hidden;"><div style="width:550px;float:left;"> 
								<select class="form-select mt-3" name="place" >
                                   <option selected disabled value=""><?php echo $row['town'];?></option>
                                      <option value="Kasargod">Kasargod</option>
                                      <option value="Kannur">Kannur</option>
                                      <option value="Wayanad">Wayanad</option>
                                       <option value="Kozhikode">Kozhikode</option>
                                   <option value="Malappuram">Malappuram</option>
                                   <option value="Palakkad">Palakkad</option>
                                   <option value="Thrissur">Thrissur</option>
                                   <option value="Ernakulam">Ernakulam</option>
                                    <option value="idukki">idukki</option>
                                   <option value="Kottayam">kottayam</option>
                                   <option value="alapuzha">alapuzha</option>
                                   <option value="Pattanamthitta">Pattanamthitta</option>
                                   <option value="Kollam">Kollam</option>
                                   <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                   <option value="Mangalore">Mangalore</option>
                                </select>
                            </div>
                            <div class>
                                <div style="width:150%;overflow:hidden;"><div style="width:550px;float:left;"> 
								<select class="form-select mt-3" name="bg" >
                                      <option value="<?php echo $row['Bloodgroup']; ?>"><?php echo $row['Bloodgroup'];?></option>
                                      <option value="A+">A+</option>
                                      <option value="A-">A-</option>
                                      <option value="B+">B+</option>
                                      <option value="B-">B-</option>
                                      <option value="AB+">AB+</option>
                                      <option value="AB-">AB-</option>
                                      <option value="O+">O+</option>
                                      <option value="O-">O-</option>
                               </select>
                               
                                    </div></div><br>
                                    
                            
                                     <div class>
                                <div style="width:150%;overflow:hidden;"><div style="width:550px;float:left;"> 
								<select class="form-select mt-3" name="gender" required>
                                      <option value="<?php echo $row['Gender']; ?>"><?php echo $row['Gender'];?></option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="Transgender">Other</option>
                                    
                               </select>
                            </div>
                             
                              <div style="margin-left:600px;">
                                  <input type="Submit" value="Proceed" class="btn btn-primary px-4">
                                   <input  onclick="window.location.href='back.php'" type="button" class="btn btn-primary px-4" value="Back">
              
                                    </div></div></div></div></form></div></div></div></div>
    </div>
    </body>
</html>

	<?php 
	
           } 
                
		  }
    }
		
 

 ?>