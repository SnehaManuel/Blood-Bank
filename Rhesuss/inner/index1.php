<?php 
session_start();

if (isset($_SESSION['password']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rhesus- Index</title>
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
  <link href="assets/css/style.css" rel="stylesheet">



</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index1.php">Logout<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">

        <ul>
          
          <li><a class="nav-link scrollto" href="index1.php">Home</a></li>
            <li><a class="nav-link scrollto" href="pro.php">Profile</a></li>
        
          
      </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
            <a href="logout.php" class="get-started-btn scrollto">Logout</a>

     <!--  <a href="#about" class="get-started-btn scrollto">Get Started</a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>RHESUS</h1>
		 
		  
		  <h4 style="color:white;">Donate Blood And Gift A Life</h4>
            <h3 style="color:white;">Hello <?php echo $_SESSION['name']; ?>,</h3>
         
        
		</div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
           <i class='bx bxs-donate-blood'></i>
            <h3><a href="#testimonials">Donor</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class='bx bx-donate-blood'></i>
            <h3><a href="">Receiver</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
           <i class='bx bxs-user-rectangle'></i>
            <h3><a href="">Admin</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class='bx bx-pulse'></i>
            <h3><a href="">corprate Donor</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class='bx bxs-clinic'></i>
            <h3><a href="">Blood Banks</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/myth/1.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/myth/2.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/myth/3.jpg" class="img-fluid" alt=""></div>
           <div class="swiper-slide"><img src="assets/img/myth/4.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/myth/5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/myth/6.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/myth/7.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/myth/8.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/myth/9.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/myth/10.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

      <div class="container" data-aos="fade-up">
          <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="h3">Search for Donors</h3>
                        <br>
                        <form name="myform" action="dd.php" method="post">

                          <div class="col-md-12">
                                <select class="form-select mt-3" name="bgs" required>
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
                               <select class="form-select mt-3" name="town" required>
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

      </div>

                           

      </div>
    </section><!-- End Testimonials Section -->

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Rhesus<span>.</span></h3>
              <p>

                <strong>Phone:</strong>987654321<br>
                <strong>Email:</strong> rhesusyiascm@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
         
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Rhesus</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

       
      </div>
    </div>
  </footer><!-- End Footer -->

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
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>