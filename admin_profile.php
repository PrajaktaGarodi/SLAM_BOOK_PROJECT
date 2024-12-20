<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Slam book Admin Profile</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/dashboard_vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/dashboard_vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/dashboard_vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/dashboard_vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/dashboard_vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/dashboard_vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/dashboard_css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/dashboard_images/favicon.png" />
    <style>
        .error {
            color: red;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <?php
        include('Common/side_bar.php');
        if ($result['role_id'] == 1) {

                $user_id= $result['user_id'];
                $query = "SELECT * FROM users WHERE user_id = $user_id";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);



            

            ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container">
                        <h1>Admin Profile</h1>
                        <div class="col-md-12 mt-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title text-center fw-">
                                                Profile
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <img src="assets/images/<?php echo $row['profile'] ?>"
                                                class="img-fluid rounded-circle" alt="image" />
                                            <h2 class="text-center mt-2"><?php echo $row['username'] ?></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title text-center">
                                            Admin Details
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                        <h6 class="text-secondary fw-bold">Name :</h6>
                                                        <p><?php echo $row['username']; ?></p>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Email :</h6>
                                                        <p><?php echo $row['email'];?></p>
                                                
                                                </div>

                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Contact:</h6>
                                                        <p><?php echo $row['contact'];?></p>
                                                
                                                </div>

                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Adderss:</h6>
                                                        <p><?php echo $row['address'];?></p>
                                                
                                                </div>

                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Gender:</h6>
                                                        <p><?php echo $row['gender'];?></p>
                                                
                                                </div>

                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Account Created on:</h6>
                                                        <p><?php echo $row['created_at'];?></p>
                                                
                                                </div>

                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Account Update On:</h6>
                                                        <p><?php echo $row['updated_at'];?></p>
                                                
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Status :</h6>
                                                        
                                                            <?php 
                                                                if ($row['status'] =='active') 
                                                                {
                                                                    echo '<p class="text-success"> Active </p>';
                                                                } 
                                                                else 
                                                                {
                                                                    echo '<p class="text-danger"> Inactive </p>';
                                                                }

                                                        
                                                            ?>
                                                        
                                                
                                                </div>
                                             <div class="col-ms-4">
                                                <a href="admin_profile_edit.php" class="btn btn-primary "> Edit Admin</a>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>