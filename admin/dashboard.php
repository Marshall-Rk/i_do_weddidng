<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
include("db.php");

if (!isset($_SESSION['email'])) {
        header('Location:login.php');
        exit();
    }
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($con,"delete from restro where ID=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'admin-dashboard.php'</script>";     
} 


error_reporting(0);
session_start();


{
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>iDo_Weddings-Admin-Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
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
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <span><img src=""  class="dark-logo"/><span style="color:#6164ff; font-weight:bold;">iDo_Weddings</span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/web2.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
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
                        <li> <a class="" href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                           
                        </li>
                        <li class="nav-label">Log</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fas fa-briefcase"></i><span class="hide-menu">Bookings</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_bookings.php">All bookings</a></li>                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-users" aria-hidden="true"></i>
</span><span class="hide-menu">users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_users.php">All users</a></li>		
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-comment f-s-20 color-warning"></i><span class="hide-menu">Contact Form</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_contact-form.php">All Comments</a></li>                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-bag f-s-20 "></i><span class="hide-menu">Newsletter Subscribers</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_newsletter_subscriber.php">All Subscribers </a></li>  
                            </ul>
                        </li>
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
                    <h3 class="text-dark ">Dashboard - Welcome <span class="" style="color:#6164ff"> <?php echo $_SESSION['email']; ?> </span></h3></div>
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
                        <div class="card p-10">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i style="color:#6164ff" class="fa fa-briefcase f-s-30 "></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * FROM `banquet_hall_bookings`";
												$result=mysqli_query($con,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Bookings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-10">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i style="color:#6164ff" class="fa fa-users f-s-30 "></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * FROM `users`";
												$result=mysqli_query($con,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-10">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i style="color:#6164ff" class="fa fa-comment f-s-30 "></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * FROM `contact_form`";
												$result=mysqli_query($con,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Contact</p>
                                </div>
                            </div>
                        </div>
                    </div>
					 
                    <div class="col-md-3">
                        <div class="card p-10">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i style="color:#6164ff" class="fa fa-shopping-bag f-s-30 "></i></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="SELECT * FROM `newsletter_subscriber`";
												$result=mysqli_query($con,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">subscriber</p>
                                </div>
                            </div>
                        </div>
                    </div>
               
                   
                   
                    </div>

                    
                    
                    
            
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            
          
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>
<?php
}
?>