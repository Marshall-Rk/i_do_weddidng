<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

if(!isset($_SESSION["email"]) ){
  header("location: login.php");
  exit;
}
	
else
{
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
   
    <title>STOCXXPRO– Stock Marketplace</title>
    <!-- Bootstrap Core CSS -->
    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
           
        </div>
 
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="" href="userdashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                           
                        </li>
                        <li class="nav-label">Log</li>


                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-archive f-s-20 "></i></span><span class="hide-menu">Bookings</span></a>
                            <ul aria-expanded="false" class="collapse">                          
                             
                                <li><a href="users_bookings.php">All Bookings</a></li>
                                
                            </ul>
                        </li>

                        <li> <a class="has-arrow  " href="index.php" aria-expanded="false">  <span><i class="fa fa-lock f-s-20 "></i></span><span class="hide-menu">go back</span></a>
                           
                        </li>
                       
                     

                        <!-- <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope-open f-s-20 color-warning"></i><span class="hide-menu">Invoice</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="down_invoice.php">Download Invoice</a></li>                          
                            </ul>
                        </li> -->

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper" >
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-dark ">Dashboard - Welcome  <span style="color:#1FAD16"> <?php echo $_SESSION['email']; ?> </span></h3></div>
               <!-- <?php
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?> -->
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                     <div class="row">
                   
                     <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-archive f-s-40 color-success" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php
   $connection_mysql = mysqli_connect("localhost","root","","ido_weddings");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT id FROM banquet_hall_bookings WHERE email='".$_SESSION['email']."'";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("%d \n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?></h2>
                                    <p class="m-b-0">All Bookings</p>
                                </div>
                            </div>
                        </div>
                    </div>
			
                   
                    

                    


                 
                  
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2021 All rights reserved. </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="admin/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="admin/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="admin/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="admin/js/custom.min.js"></script>

</body>

</html>
<?php
}
?>