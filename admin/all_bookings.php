<!DOCTYPE html>
<html lang="en">
<?php
include("db.php");
error_reporting(0);
session_start();

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>iDo_weddings-Admin-Dashboard</title>
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

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
         <div class="header">
         <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                      
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src=""  class="dark-logo"/><span style="color:#6164ff; font-weight:bold;">iDo_weddings</span>
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
                    <h3 class="text-dark ">Dashboard - Welcome <span class="text-success"> <?php echo $_SESSION['email']; ?> </span></h3></div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Bookings</h4>
                                <button type="button"  class="btn btn-primary  ">  
                       <?php
   $connection_mysql = mysqli_connect("localhost","root","","ido_weddings");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT * FROM  banquet_hall_bookings";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("Total - %d \n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?>

</button>
                                <div class="table-responsive m-t-40">
                                <table id="example23" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>   
                                        <th>Sr.No</th>
                                        <th>Hall Name</th>
                                        <th>phone</th>
                                        <th>No. of Guest</th>
                                        <th>Price per plate</th>
                                        <th>Total Bill</th>
                                        <th>Date of event</th>
                                        <th>No. of Rooms</th>
                                        <th>Function</th>
                                        <th>Function time</th> 
                                        <th>Date</th>
                                   
                                       
										
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
											
											<?php
												$sql="SELECT * FROM  banquet_hall_bookings";
												$query=mysqli_query($con,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Orders-Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																			<?php
																					echo ' <tr>
                                                                                            <td>'.$rows['id'].'</td>
                                                                                            <td>'.$rows['hall_name'].'</td>
                                                                                            <td>'.$rows['number_of_guests'].'</td>
                                                                                            <td>'.$rows['price_per_plate'].'</td>
                                                                                            <td>'.$rows['total_bill'].'</td>
                                                                                            
                                                                                            <td>'.$rows['date_of_event'].'</td>
																					        
                                                                                                
																  <td>'.$rows['number_of_rooms'].'</td>
                                                                  <td>'.$rows['function'].'</td>
                                                                  <td>'.$rows['function_time'].'</td>
                                                                  <td>'.$rows['booked_at'].'</td>
                                                                  
                                                                  
                                                                  ';


                                                                                    ?>
																								
																						<?php					
                                                                                        
                                                                                      
                                                                                        echo '	<td>'.$rows['booked_at'].'</td>';
																					
                                                                                        ?>
                                                                                      
																								

                                                                                                    
																								<?php
																								echo '';
																					 
																						
																						
																		}	
														}
												
											
											?>
                                             
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>