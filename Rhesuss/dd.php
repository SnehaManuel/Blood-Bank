<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rhesus -Donor reg</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css" rel="stylesheet">
<style>
    table{
        border-collapse: :collapse;
        width:100%;
        color:white;
        font-family: monospace;
        font-size: 25px;
        text-align: :left;
        border-color: white;
    }
    
    
    </style>


</head>

<body>

 <!-- ======= Header ======= -->
   <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Rhesus<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">

        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="dr.php">Sign up</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
            <li><a class="nav-link scrollto" href="rr.php">Request Blood</a></li>
        
          
   
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar 
            <a href="profile.html" class="get-started-btn scrollto">Profile</a>
-->
 <!--  <a href="" class="get-started-btn scrollto">Get Started</a>-->

    </div>
  </header><!-- End Header -->
    
    
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
      <section id="bread" class="d-flex align-items-center justify-content-center">
      <div class="container">

      <div class="container" data-aos="fade-up">
          
          
          
          
          <table border=1 >
            
            <?php
            $conn=mysqli_connect("localhost","root","","rhe");
                if($conn->connect_error){
                    die("Connection failed:".$conn->connect_error);
                    
                }
            if (isset($_POST['bgs1']) && isset($_POST['town1'])) {
                
                $bg=$_POST['bgs1'];
                $to=$_POST['town1'];
            
                $sql="SELECT Name,user_name,Phone,Bloodgroup,town FROM `dr` WHERE Bloodgroup='$bg' AND town='$to'";
                $result = mysqli_query($conn, $sql);
                if($result-> num_rows >0)
                {
                     echo "<tr><th>Details</th></tr><tr><th>Name</th><th>Email</th><th>Phone number</th><th>Blood group</th><th>City</th></tr>";
                    while ($row=$result->fetch_assoc()){
                       
                        echo "<tr><td>".$row["Name"]."</td><td>".$row["user_name"]."</td><td>".$row["Phone"]."</td><td>".$row["Bloodgroup"]."</td><td>".$row["town"]."</td></tr>";
                    
                    }
                    echo "</table>";
                
                }else{
                    echo" <br><tr><td>0 results</td></tr/>";
                
                }
                }else
                    {
                
                          $bg=$_POST['bgs'];
                $to=$_POST['town'];
            
                $sql="SELECT Name,user_name,Phone,Bloodgroup,town FROM `dr` WHERE Bloodgroup='$bg' AND town='$to'";
                $result = mysqli_query($conn, $sql);
                if($result-> num_rows >0)
                {
                     echo "<tr><th>Details</th></tr><tr><th>Name</th><th>Email</th><th>Phone number</th><th>Blood group</th><th>City</th></tr>";
                    while ($row=$result->fetch_assoc()){
                       
                        echo "<tr><td>".$row["Name"]."</td><td>".$row["user_name"]."</td><td>".$row["Phone"]."</td><td>".$row["Bloodgroup"]."</td><td>".$row["town"]."</td></tr>";
                    
                    }
                    echo "</table>";
                
                }else{
                    echo"<tr><td> 0 results</td></tr></table>";
                
                };
                    }
                $conn->close();
            ?>
        
                
 <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <br>
                        <h3 class="h3">New search</h3>
                        
                        <form name="myform" action="" method="post">

                          <div class="col-md-12">
                                <select class="form-select mt-3" name="bgs1" required>
                                      <option selected disabled value="">Blood group</option>
                                      <option value="A+">A+</option>
                                      <option value="A-">A-</option>
                                      <option value="B+">B+</option>
                                      <option value="B-">B-</option>
                                      <option value="AB+">AB+</option>
                                      <option value="AB-">AB-</option>
                                      <option value="O+">O+</option>
                                      <option value="O-">O-</option>
                               </select>
                               
                           </div>
                            <br>
 
                            <div class="col-md-12">
                               <select class="form-select mt-3" name="town1" required>
                                      <option selected disabled value="">Place</option>
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

                                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary" name="insert">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
         
          </table>
          

      </div>




      </div>
    </section><!-- End Breadcrumbs -->

  

  </main><!-- End #main -->

  
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
  <script src="assets/js/main.js"></script>

</body>

</html>


