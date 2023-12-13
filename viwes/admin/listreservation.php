<?php
session_start();
if (!isset($_SESSION["idadmin"])){
    header("location:index.php");
}
include_once("../../controllers/admincontroller.php");
$controller = new  controllerAdmin();
$res = $controller->listadmin($_SESSION["idadmin"])->fetch();
$listres = $controller->listreservation("LIMIT 3");
$n = $listres->rowCount();
$reservationrequeste = $controller->reservationresquste()->rowCount();
$listcontact = $controller->listcontact("LIMIT 3");
$countcontact = $controller->listcontact("")->rowCount();
$reservation = $controller->listreservation("");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>manage</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">CUSTOM manage:</h6>
                        <a class="collapse-item" href="chamber.php">chamber</a>
                        <a class="collapse-item" href="offer.php">offer</a>
                        <a class="collapse-item" href="client.php">client</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-chart-bar"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">custom reservation:</h6>
                        <a class="collapse-item" href="listreservation.php">Reservation</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            ACCOUNT
            </div>

            
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                <i class="fa fa-user"></i>
                    <span>Profile</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                <i class="fas fa-sign-out-alt" ></i>
                    <span>log out</span></a>
            </li> 
           
            <!-- Nav Item - Charts -->
           

            <!-- Nav Item - Tables -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
        

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?php echo $n ?>+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts reservation
                                </h6>
                                <?php
                              while($l = $listres->fetch()){
                                ?>
                                <a class="dropdown-item d-flex align-items-center" href="./listreservation.php">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                        <i class="fas fa-user-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Reservation de <?php echo $l[0]." ".$l[1]; ?></div>
                                        <span class="font-weight-bold">La chamber numero : <?php echo $l[2] ;?></span><br>
                                        <span class="font-weight-bold">de <?php echo $l[8]; ?> a <?php echo $l[7]; ?></span>
                                    </div>
                                </a>
                          <?php } ?>
                                
                                <a class="dropdown-item text-center small text-gray-500" href="./listreservation.php">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"><?php echo $countcontact ?>+</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <?php 
                                while($l = $listcontact->fetch()){
                                ?>
                                <a class="dropdown-item d-flex align-items-center" href="listcontact.php">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate"><?php echo $l[4] ?></div>
                                        <div class="small text-gray-500"> De : <?php echo $l[1] ?></div>
                                        <div class="small text-gray-500">Email : <?php echo $l[2] ?></div>
                                    </div>
                                </a>
                               <?php } ?>
                                <a class="dropdown-item text-center small text-gray-500" href="listcontact.php">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $res[3]." ".$res[4]?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                             
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-flex">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 p-2">
                        <h1 class="h3 mb-0 text-gray-800">Reservation</h1>      
                    </div>
                    <div class="ml-auto p-2"><a href="toutreservation.php"><button type="button" class="btn btn-success">Tous</button></a></div>
                    </div>

                    <div class="row" >
                    <div class="col-xl-12 col-lg-12 card shadow" style="padding : 20px;margin:5px">
                    <table class="table table-dm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name Client</th>
      <th scope="col">Numero chamber</th>
      <th scope="col">Date Arrival</th>
      <th scope="col">Date Departure</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
       <?php  $i = 0;
       while($l = $reservation->fetch()){
              $nom = $controller->getchamber($l[5])[1];
       ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $l[0]." ".$l[1] ?></td>
      <td><?php echo $l[2] ?></td>
      <td><?php echo $l[8] ?></td>
      <td><?php echo $l[7] ?></td>
      <td><?php echo $l[6] ?></td>

     <?php 
       echo "<td><a href='updatereservation.php?id=$l[9]&val=1' style='text-decoration:none;color : black;'>";
       echo "<button type='button'  style='background-color : blue;margin-right : 5px' >Accept</button></a>";
       echo "<a href='updatereservation.php?id=$l[9]&val=2' style='text-decoration:none;color : black;'><button type='button'  style='background-color : red;' >Refuse</button></a>
       </td>";
     ?>
       
    </tr>
    <?php 
    $i++;}?>
  </tbody>
</table>

                       
        
                    


            </div>
        </div>
    </div>
</div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
</body>

</html>