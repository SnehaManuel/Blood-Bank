<?php 
session_start(); 
include ('../connect.php');

if (isset($_SESSION['user_name'])) {
	  $uname = $_SESSION['user_name'];
	
		$sql = "SELECT * FROM dr WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

	
            if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname ) 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rhesus- Admin Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet"  href="lightslider/src/css/lightslider.css"/>
<style>
body{
    background: #fff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}

</style> 
    </head>
    <body>
               <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Rhesus Admin Space<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">

    
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar 
            <a href="profile.html" class="get-started-btn scrollto">Profile</a>
-->
 <!--  <a href="" class="get-started-btn scrollto">Get Started</a>-->

    </div>
  </header><!-- End Header -->
 
 
 <div><br><br><br><br></div>
 <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="assets/img/profile.jpg" alt="Image" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?php echo strtoupper ($row['Name']); ?></h4>
									<p class="text-secondary mb-1">Age:<?php echo $row['Age']; ?></p>
									<p class="text-muted font-size-sm"><?php echo strtoupper ($row['Bloodgroup']); ?></p>
									<p class="text-muted font-size-sm"><?php echo $row['Gender']; ?></p>
									<p class="text-muted font-size-sm"><?php echo $row['Phone']; ?></p>
									<p class="text-muted font-size-sm"><?php echo $row['town']; ?></p>
									<p class="text-muted font-size-sm"><?php echo $row['user_name']; ?></p>
                                    <p class="text-muted font-size-sm"><?php echo $row['password']; ?></p>
								<!--	<button class="btn btn-primary">Follow</button>
									<button class="btn btn-outline-primary">Message</button>
									-->
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card"> 
                                <form action="admin5.php" method="post">
						<div class="card-body">
                  
							<div class="row mb-3">
								<div class="col-sm-3">
                                    
									<h6 class="mb-0">Full Name</h6>
								</div>
								
								<div class="col-sm-6 text-secondary">
									<input type="text" class="form-control" name="name" value="<?php echo strtoupper ($row['Name']); ?>">
								</div>
						
							</div>
							
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Age</h6>
								</div>
								
								<div class="col-sm-6 text-secondary">
									<input type="text" class="form-control" name="age" value="<?php echo $row['Age']; ?>">
								</div>
						
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Blood Group</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="bg" value="<?php echo strtoupper ($row['Bloodgroup']); ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Gender</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="gender" value="<?php echo $row['Gender']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="phone" value="<?php echo $row['Phone']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Place</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									 
                               <select class="form-select mt-3" name="place" >
                                  <option value="<?php echo $row['town']; ?>"><?php echo $row['town']; ?></option>
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
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $row['user_name']; ?>
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
								</div>
							<div class="row">
								<div class="col-sm-3"></div>
                                 
								<div class="col-sm-9 text-secondary">
                                    <input  onclick="window.location.href='admin5.php'" type="submit" class="btn btn-primary px-4" value="Save data" name="insert">
                                
									<input  onclick="window.location.href='admin3.php'" type="button" class="btn btn-primary px-4" value="Go back without saving">
								</div>
							</div>
						</div>
                         </form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
          
        
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
	</body>
	</html>
	
	<?php 
	
           } 
                
		}

 

 ?>