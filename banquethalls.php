<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
error_reporting(0); 
include("connection/connect.php");

?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iDo Weddings - Banquet Halls</title>
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
                    <h2>Banquet Halls</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Banquet Halls</li>
                    </ol>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
    <!-- ======= Banquet Halls Section ======= -->
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Banquet Halls</h2>
                <p>Check Some of Our Venue Options</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-starters">Mumbai</li>
                        <li data-filter=".filter-salads">Delhi</li>
                        <li data-filter=".filter-specialty">Bangalore</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="assets/img/menu/grandballroommumbai.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="HyattMum.php">The Grand Ballroom</a><span></span>
                    </div>
                    <div class="menu-ingredients">
                        Grand Hyatt Mumbai Hotel And Residences Bandra Kurla Complex Vicinity, Santacruz East, Mumbai - 400055
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="assets/img/menu/crowneplaza.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="CrowneBengaluru.php">Crowne Plaza</a><span></span>
                    </div>
                    <div class="menu-ingredients">
                        43, Velankani Drive, Electronics City Phase 1, Electronic City, Bengaluru, Karnataka 560100
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="assets/img/menu/pacific.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="PacificMum.php">Pacific Banquets</a><span></span>
                    </div>
                    <div class="menu-ingredients">
                        4th Floor, The Pacific, Shilp Chowk, Sector 13, Kharghar, Navi Mumbai - 410210
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="assets/img/menu/radisson.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="RadissonDelhi.php">Radisson Blu</a><span></span>
                    </div>
                    <div class="menu-ingredients">
                        Plot 4, Dwarka City Centre, Sector 13, Dwarka, New Delhi, Delhi 110075
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="assets/img/menu/chancery.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="ChanceryBengaluru.php">The Chancery Pavilion</a><span></span>
                    </div>
                    <div class="menu-ingredients">
                        135, Residency Rd, Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <img src="assets/img/menu/holidayinn.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="HolidayMum.php">The Holiday Inn</a><span></span>
                    </div>
                    <div class="menu-ingredients">
                        Sakinaka Junction, Andheri - Kurla Rd, Andheri East, Mumbai - 400072
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="assets/img/menu/jwmariott.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="MarriottDelhi.php">JW Marriott</a><span></span>
                    </div>
                    <div class="menu-ingredients">
                        Asset Area 4 - Hospitality District Delhi, Aerocity, New Delhi, Delhi 110037
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <img src="assets/img/menu/leela.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="LeelaDelhi.php">Leela Ambience Convention Hotel</a><span></span>
                    </div>
                    <div class="menu-ingredients">
                        CBD, 1, Maharaja Surajmal Marg, Near Yamuna Sports Complex, Vishwas Nagar Extension, Vishwas Nagar, Shahdara, Delhi, 110032
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <img src="assets/img/menu/tajwestend.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="TajBengaluru.php">The Taj West End</a><span></span>
                    </div>
                    <div class="menu-ingredients">
                        25, Race Course Rd, High Grounds, Bengaluru, Karnataka 560001
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Menu Section -->
    <!-- ======= Footer ======= -->
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