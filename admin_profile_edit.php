<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Slam book User Profile Edit</title>
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

                $user_id = $result['user_id'];
                $query = "SELECT * FROM users WHERE user_id = $user_id";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);


                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['contact'];
                    $address = $_POST['address'];
                    $gender = $_POST['gender'];

                    $sql = "UPDATE users SET username = '$name', email = '$email', contact ='$phone',address = '$address', gender = '$gender' WHERE user_id = $user_id;";

                    if (mysqli_query($conn, $sql)) {
                        echo "<script>alert('Profile updated successfully');</script>";
                        echo "<script>window.location.href = 'admin_profile.php?id=$user_id'</script>";
                    } else {
                        echo "Error updating record: ". mysqli_error($conn);
                    }
                }

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
                                                 Admin Profile Edit
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
                                            <form method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                        <div class=""></div>
                                                        <h6 class="text-secondary fw-bold">Name :</h6>
                                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['username'];?>">
                                                </div>
                                                
                                                <div class="col-md-6">
                                                        <h6 class="text-secondary fw-bold">Email :</h6>
                                                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email'];?>">
                                                </div>

                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Contact:</h6>
                                                        <input type="number" class="form-control" name="contact" id="contact" value="<?php echo $row['contact'];?>">
                                                
                                                </div>

                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Address:</h6>
                                                        <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['address'];?>">
                                                
                                                </div>

                                                <div class="col-md-6">
                                                    
                                                        <h6 class="text-secondary fw-bold">Gender:</h6>
                                                        <input type="text" class="form-control" name="gender" id="gender" value="<?php echo $row['gender'];?>">
                                                
                                                </div>

                                                <div class="w-100"></div>

                                                    <div class="col-md-5 mt-4">
                                                   <button type="submit" class="btn btn-primary" name="submit">Make Changes</button>
                                                   </div>
                                                 </div>
                                            </form>
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