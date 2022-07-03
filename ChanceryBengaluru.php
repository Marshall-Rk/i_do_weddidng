<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
error_reporting(0); 
include("connection/connect.php");

if(isset($_POST['submit'] ))
{
    $hall = $_POST['hall'];  
    $fullname = $_POST['fullname'];  
    $email = $_POST['email'];  
    $phone = $_POST['phone'];  
    $no_of_guests = $_POST['no_of_guests'];      
    $price_per_plate = $_POST['price_per_plate'];  
    $rooms = $_POST['rooms'];  
    $event_type = $_POST['event_type'];      
    $event_time = $_POST['event_time'];  
    $date_of_event = $_POST['date_of_event'];  
    
    $total_bill = $no_of_guests*$price_per_plate;

    $mql = "INSERT INTO banquet_hall_bookings(hall_name,full_name,email,phone,number_of_guests,price_per_plate,total_bill,date_of_event,number_of_rooms,function,function_time) VALUES('".$_POST['hall']."','".$_POST['fullname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['no_of_guests']."','".$_POST['price_per_plate']."','".$total_bill."','".$_POST['date_of_event']."','".$_POST['rooms']."','".$_POST['event_type']."','".$_POST['event_time']."')";
	mysqli_query($db, $mql);

    
    $success = '<div class="" style="color:#CDA45E; background-color:white; padding:10px; font-weight: bold;" role="alert">Booking Done Successfull!!! </div>';



}
    



?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iDo Weddings - The Grand Ballroom</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

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
                            <a class="nav-link scrollto" href="events.html"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="events-engagement.aspx">Engagement</a></li>
                                <li class="dropdown">
                                    <a href="events-wedding.aspx"><span>Wedding</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="events-traditional.aspx">Traditional/Classic Wedding</a></li>
                                        <li><a href="events-destination.aspx">Destination Wedding</a></li>
                                        <li><a href="events-diy.aspx">DIY Wedding</a></li>
                                        <li><a href="events-vintage.aspx">Vintage Wedding</a></li>
                                        <li><a href="events-elopement.aspx">Elopement Wedding</a></li>
                                    </ul>
                                </li>
                                <li><a href="events-haldi.aspx">Haldi Ceremony</a></li>
                                <li><a href="events-sangeet.aspx">Sangeet Ceremony</a></li>
                                <li><a href="events-reception.aspx">Reception</a></li>
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


        </main><!-- End #main -->
        <!-- ======= Banquet Halls Section ======= -->
        <section id="about" class="about">
            <section id="book-a-table" class="book-a-table">
                <div class="container" data-aos="fade-up">

                    <form action="" method="post"  data-aos="fade-up" data-aos-delay="100">

                        <div class="row">
                            <div class="col-lg-6 order-1 order-lg-1" data-aos="zoom-in" data-aos-delay="100">
                                <div class="about-img">
                                    <img src="assets/img/halls/hyattmum.jpg" alt="" />
                                </div>
                                <div>
                         <label class="price" style="margin-top:50px; margin-left:150px">Price per Plate : Rs.3700</label>
                                </div>
                                <br />

                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content">
                                <h3>The Grand Ballroom</h3>
                                <?php echo $success;?>
                                <p class="fst-italic">
                                    Grand Hyatt,
                                </p>
                                <p class="fst-italic">
                                    Grand Hyatt Mumbai Hotel And Residencies, Bandra Kurla Complex Vicinity, Santacruz East, Mumbai - 400055
                                </p>

                                <div class="row">
                                <div class="col-md-12 form-group">
                                        <input type="text" name="hall" class="form-control" value="The Grand Ballroom" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="fullname" class="form-control" value="<?php echo $_SESSION['first_name']?>" readonly>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']?>" readonly>
                                    </div><br><br />
                                    <div class="col-md-6 form-group">
                                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="text" name="no_of_guests" class="form-control" placeholder="Number Of Guests">
                                    </div><br><br />

                                    <div class="col-md-6 form-group">                                  
                                    <input type="text"  class="form-control" value="Price Per Palte:" readonly>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                      
                                        <input type="text" name="price_per_plate" class="form-control" value="3700" readonly>
                                    </div><br><br />


                                    <div class="col-md-6 form-group">
                                        <input type="date" name="date_of_event" class="form-control" >
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="text" name="rooms" class="form-control" placeholder="Number of Rooms">
                                    </div><br><br />
                                    <div class="col-md-6 form-group">
                                        Function Type
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        Function Time
                                    </div><br />
                                    <div class="col-md-6 form-group">
                                        <select id="Select1" name="event_type" class="form-select">
                                            <option value="">Choose Type</option>
                                            <option>Engagement</option>
                                            <option>Wedding</option>
                                            <option>Haldi Ceremony</option>
                                            <option>Sangeet Ceremony</option>
                                            <option>Mehendi</option>
                                            <option>Reception</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <select name="event_time" id="Select2" class="form-select">
                                            <option value="">Choose Time</option>
                                            <option>Evening</option>
                                            <option>Day</option>
                                        </select>
                                    </div>


                                    <br /> <br /><br />
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
<?php
if(!isset($_SESSION["email"]) ){
   echo '<a href="login.php">Login to Book</a>';
  }
else{
echo '<input type="submit" name="submit" value="BOOK">';
}
?>
                                 

                                    </div>


                                   
                                </div>





                            </div>

                        </div>
                    </form>
                </div>
            </section>
        </section>
        <!-- End About Section -->
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