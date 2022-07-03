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
    <title>ido weddings </title>
    <!-- Bootstrap Core CSS -->
    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
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
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                <h3 class="text-warning">Dashboard - Welcome </h3> <?php echo $_SESSION['email']; ?></div>
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
   $sql = "SELECT id FROM banquet_hall_bookings WHERE email='".$_SESSION['email']."'";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("%d Total Bookings \n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?>

</button>

</script>


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


$sql=" SELECT * FROM banquet_hall_bookings WHERE email='".$_SESSION['email']."'  ";

												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
									    					{
															echo '<td colspan="15"><center>No Orders-Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
                                                                          
                                                          ;																                                             
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
															
                                                        
                                                        

																						
                                    
                                                                                      
                                                                 

                                                      
                                                                          

                                                                       
                                                           <td><?php echo date('D, M j, Y h:i:s', strtotime($rows["date"])); ?></td>
                                                         
                        
                                                           
                       

                                              


												 
                                                
                                        
   
   
  
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
            <footer class="footer"> © 2021 All rights reserved. Template designed by <a href="https://GREENCURRY.com">GREENCURRY</a></footer>
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


    <script src="admin/js/lib/datatables/datatables.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="admin/js/lib/datatables/datatables-init.js"></script>
</body>

</html>
<?php
}
?>