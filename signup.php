<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
error_reporting(0); 
include("connection/connect.php");

if(isset($_POST['submit'] ))
{
     if(empty($_POST['f_name']) ||  
        empty($_POST['l_name'])|| 
		empty($_POST['email']) ||  	
		empty($_POST['password'])||
		empty($_POST['city'])||
        empty($_POST['date'])||        
		empty($_POST['gender']) ||
		empty($_POST['token']))
		{
			$message = "All fields must be Required!";
		}
	else
	{	
	$check_username= mysqli_query($db, "SELECT first_name FROM users where first_name = '".$_POST['f_name']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM users where email = '".$_POST['email']."' ");
 

	if(mysqli_num_rows($check_username) > 0)  
     {
    	$message = 'username Already exists!';
     }
	if(mysqli_num_rows($check_email) > 0) 
     {
    	$message = 'Email Already exists!';
     }
       
	 
	$mql = "INSERT INTO users(first_name,last_name,email,password,city,date_of_birth,gender,token) VALUES('".$_POST['f_name']."','".$_POST['l_name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['city']."','".$_POST['date']."','".$_POST['gender']."','".$_POST['token']."')";
	mysqli_query($db, $mql);

  
//    $customer_email=$_POST['email'];       
//    $html='Congratualtions your StocxxPro Account has Been Created. '; 
//    $sender_email = "testingpixel9943@gmail.com";
//    $sender_password = "marshall@9943";
//    include('smtp/PHPMailerAutoload.php');
//    $mail=new PHPMailer(true);
//    $mail->isSMTP();
//    $mail->Host="smtp.gmail.com";
//    $mail->Port=587;
//    $mail->SMTPSecure="tls";
//    $mail->SMTPAuth=true;
//    $mail->Username = $sender_email;
//    $mail->Password = $sender_password;
//    $mail->setFrom($sender_email, "StocxxPro");
//    $mail->addAddress($customer_email);
//    $mail->IsHTML(true);
//    $mail->Subject="StocxxPro Account";
//    $mail->Body=$html;
//    $mail->send();   

   $success = '<div class="" style="color:#CDA45E; background-color:white; padding:10px; font-weight: bold;" role="alert">
   Sign up Successfull!!!  <a type="button" style="color:green; background-color:white"  href="login.php">LOGIN HERE</a> </div>';
		
		
		
		
	
    
	}

}






?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iDo Weddings - Sign Up</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
   
    <link href="assets/css/style.css" rel="stylesheet">

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
                    <h2>Sign Up</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Sign Up</li>
                    </ol>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Register</h2>
                <p>Welcome to iDo Weddings</p>
                <?php echo $success;?>
            
            </div>

            <form method="POST"  action="" data-aos="fade-up" data-aos-delay="100">

                <div class="container1">
                    <div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-5">
                                <input type="text" name="f_name" value="rajkamal" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-5">
                                <input type="text" name="l_name" value="gautam" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email ID</label>
                            <div class="col-sm-5">
                                <input type="email" name="email" value="rajkamalgautam2001@gmail.com" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-5">
                                <input type="password" name="password" value="marshall" class="form-control" >

                            </div>
                        </div>
                     
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-5">
                                <input type="text" value="mumbai"  name="city" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Date of Birth</label>
                            <div class="col-sm-5">
                                <input type="date" name="date" class="form-control">
                                <input type="hidden" name="token" value="<?php echo rand(0000000000,99999999); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label"></label>
                            <select class="form-select" name="gender" style="margin-left:180px;">
                                <option selected disabled value="">Choose Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid gender.
                            </div>
                        </div>

<br>

                        <div class="text-center" style="margin-right:250px;">
                     
                        <input type="submit" name="submit" value="Register">
</div>

                    </div>
                </div>
            </form>

        </div>
    </section><!-- End Book A Table Section -->
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
    <script src="showpassword.js"></script>

</body>

</html>