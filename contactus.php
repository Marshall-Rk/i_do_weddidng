<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
error_reporting(0); 
include("connection/connect.php");

if(isset($_POST['submit'] ))
{
    $name = $_POST['name'];  
    $email = $_POST['email'];  
    $subject = $_POST['subject'];  
    $message = $_POST['message'];  

    $mql = "INSERT INTO contact_form(name,email,subject,message) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')";
	mysqli_query($db, $mql);

    $success = '<div class="" style="color:#CDA45E; background-color:white; padding:10px; font-weight: bold;" role="alert">Message sent Successfull!!! </div>';
}


?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iDo Weddings - Contact Us</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Restaurantly - v3.1.0
    * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+91 76669 03729</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span>Calling Hours : Mon - Sat: 11:00 AM - 11:00 PM</span></i>
            </div>

            <div class="languages d-none d-md-flex align-items-center">
                <ul>
                    <!--<li>En</li>-->
                    <!--<li><a href="#">De</a></li>-->
                </ul>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.php">iDo Weddings</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="about.html">About</a></li>
                    <li><a class="nav-link scrollto" href="banquethalls.php">Banquet Halls</a></li>
                    <li><a class="nav-link scrollto" href="caterers.html">Caterers</a></li>
                    <li><a class="nav-link scrollto" href="packages.html">Packages</a></li>
                    <li><a class="nav-link scrollto" href="makeup.html">Makeup</a></li>
                    <li><a class="nav-link scrollto" href="gallery.html">Gallery</a></li>
                    <li class="dropdown">
                        <a class="nav-link scrollto" href="#"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="events-engagement.html">Engagement</a></li>
                            <li class="dropdown">
                                <a href="events-wedding.html"><span>Wedding</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="events-traditional.html">Traditional/Classic Wedding</a></li>
                                    <li><a href="events-destination.html">Destination Wedding</a></li>
                                    <li><a href="events-diy.html">DIY Wedding</a></li>
                                    <li><a href="events-vintage.html">Vintage Wedding</a></li>
                                    <li><a href="events-elopement.html">Elopement Wedding</a></li>
                                </ul>
                            </li>
                            <li><a href="events-haldi.html">Haldi Ceremony</a></li>
                            <li><a href="events-sangeet.html">Sangeet Ceremony</a></li>
                            <li><a href="events-reception.html">Reception</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="contactus.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <?php
						if(empty($_SESSION["email"])) 
							{
					echo '<a href="login.php" style="font-size:10px;" class="book-a-table-btn scrollto d-none d-lg-flex">Get Started</a>';
                              
							}
						else
							{
                                    
               echo  '<a href="" class="book-a-table-btn scrollto d-none d-lg-flex">'.$_SESSION["first_name"].'</a>';
                                    
               echo  '<a href="logout.php" class="book-a-table-btn scrollto d-none d-lg-flex">Logout</a>';   
							}

						?>

        </div>
    </header><!-- End Header -->
    <main id="main">
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact Us</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ol>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
                <?php echo  $success?>
            </div>
        </div>

      

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>8C/12, Nityanand Baugh CHS Ltd, R.C. Marg, Mahul Road, Chembur, Mumbai-400074</p>
                        </div>

                        <div class="open-hours">
                            <i class="bi bi-clock"></i>
                            <h4>Calling Hours:</h4>
                            <p>
                                Monday-Saturday:<br>
                                11:00 AM - 11:00 PM
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>bhambhani123456@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+91 76669 03729</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                        </div>
                       
                        <div class="text-center"><input type="submit" name="submit" value="Contact"></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
    <!-- ======= Footer ======= -->


    <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15085.955196918254!2d72.88582662826873!3d19.042234893715182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8ab1575fc05%3A0xbdae7c91630ed818!2sNityanand%20Baug%20Co-operative%20Housing%20Society%2C%20Laxmi%20Colony%2C%20Tolaram%20Colony%2C%20Chembur%2C%20Mumbai%2C%20Maharashtra%20400074!5e0!3m2!1sen!2sin!4v1641573203416!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
        </div>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>iDo Weddings</h3>
                            <p>
                                8C/12, Nityanand Baugh CHS Ltd, R.C. Marg,<br>
                                Mahul Road, Chembur, Mumbai-400074 <br><br>
                                <strong>Phone:</strong> +91 76669 03729<br>
                                <strong>Email:</strong> bhambhani123456@gmail.com<br>
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
                        <h4>Vendor Sources</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Caterers</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Band and Musician</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Banquet Halls</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Beautician</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Photoshoots</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Sign up for our email brief for hand-picked articles, news, and more.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iDo Weddings</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
                Designed by <a href="https://www.instagram.com/punit_kalro/">Jaidev & Punit</a>
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
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>