<?php
      session_start();
      if (!isset($_SESSION['logged_in'])) {
        header('Location: index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Slam Book Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/dashboard_vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/dashboard_vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/dashboard_vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/dashboard_vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets/dashboard_vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/dashboard_vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/dashboard_css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/dashboard_images/favicon.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include('connection.php');

  

    $users = $_SESSION['username'];

    $sql = "SELECT * FROM users WHERE username='$users';";

    $query = mysqli_query($conn, $sql);

    $result = mysqli_fetch_array($query);

    if ($result['role_id'] == 1) {



        ?>
        
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo" href="main-dashboard.php"><h1 style="color:#B66DFF;">SlamBook</h1></a>
                <a class="navbar-brand brand-logo-mini" href="main-dashboard.php"><img src="/assets/dashboard_images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
             <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="/assets/images/<?php echo $result['profile'] ?>" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black"><?php echo $result['username']?></p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <div class="nav-profile-img p-3 d-flex justify-content-center">
                        <img src="/assets/images/<?php echo $result['profile'] ?>" class="rounded-circle w-50 img-fluid" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text d-flex flex-column text-center ">
                                <p class="mb-1 text-black"><?php echo $result['username']?></p>
                                <p class="text-muted mb-0"><?php echo $result['email']?></p>
                            </div>


                            <a class="dropdown-item" href="admin_profile.php">
                                <i class="mdi mdi-cached me-2 text-success"></i>View Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">
                                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                    
                    
                    <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                    
                </ul>
                <!-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button> -->
            </div> 
        </nav>
        <!-- partial -->


        <div class="container-fluid page-body-wrapper">
                 <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="main-dashboard.php">
                <span class="menu-title">DashBoard</span>
                <i class="mdi mdi-book-account menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="user_table.php">
                <span class="menu-title">User</span>
                <i class="mdi mdi-account-group menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="admin_guest.php">
                <span class="menu-title">Guest</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="user_guest.php">
                <span class="menu-title"> Users  &  Guest  Mapping</span>
                <i class="mdi mdi-account-group menu-icon"></i>
              </a>
            </li>
            

            
            
            


          </ul>
        </nav>

        <?php

    } elseif ($result['role_id'] == 2) {


        ?>


        <!-- users -->

        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo" href="main-dashboard.php"> <h1 style=" color:#CF83FF">Slam Book</h1> </a>
                <a class="navbar-brand brand-logo-mini" href="main-dashboard.php"><img src="/assets/dashboard_images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="/assets/images/<?php echo $result['profile']?>" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black"><?php echo $result['username']?></p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <div class="nav-profile-img p-3 d-flex justify-content-center">
                        <img src="/assets/images/<?php echo $result['profile'] ?>" class="rounded-circle w-50 img-fluid" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text d-flex flex-column text-center ">
                                <p class="mb-1 text-black"><?php echo $result['username']?></p>
                                <p class="text-muted mb-0"><?php echo $result['email']?></p>
                            </div>


                            <a class="dropdown-item" href="user_profile.php">
                                <i class="mdi mdi-cached me-2 text-success"></i>View Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">
                                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                        </div>

                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                  
                    <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-format-line-spacing"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
                 <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="/main-dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home-account menu-icon"></i>
              </a>
            </li>
            

            <li class="nav-item">
              <a class="nav-link" href="/slambook_form.php">
                <span class="menu-title">Fill SlamBook</span>
                <i class="mdi mdi-book-account menu-icon"></i>
              </a>
            </li>
            

            
            <li class="nav-item">
              <a class="nav-link" href="/user_guest_view.php">
                <span class="menu-title">Show Guest</span>
                <i class="mdi mdi-account-multiple-outline menu-icon"></i>
              </a>
            </li>
            

           

          </ul>
        </nav>
        <!-- partial -->




        <?php

    }

    ?>













    <script src="/assets/dashboard_vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/dashboard_vendors/chart.js/chart.umd.js"></script>
    <script src="/assets/dashboard_vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/dashboard_js/off-canvas.js"></script>
    <script src="/assets/js/dashboard_js/misc.js"></script>
    <script src="/assets/js/dashboard_js/settings.js"></script>
    <script src="/assets/js/dashboard_js/todolist.js"></script>
    <script src="/assets/js/dashboard_js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/assets/js/dashboard_js/dashboard.js"></script>
</body>