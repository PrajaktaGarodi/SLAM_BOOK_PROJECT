<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Slam Book Dashboard</title>
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
        if ($result['role_id'] == 2) 
        {


            if(isset($_GET['delete_id']))
            {
                $delete_id = $_GET['delete_id'];

                $sql = mysqli_query($conn, "DELETE FROM slambook WHERE id = $delete_id");
                // $slambook = mysqli_query($conn, "DELETE FROM slambook guestid ='$delete_id");
                echo "<script>alert('User deleted');</script>";
                echo "<script>window.location.href = 'guest.php'</script>";


            }

            if (isset($_GET['active_id'])) {
                $rid = intval($_GET['active_id']);

                $check = "SELECT * FROM slambook;";

                $result = mysqli_query($conn, $check);
                $check_row = mysqli_fetch_array($result);

                $status = $check_row['status'];

                if ($status == 'inactive') {


                    $sql = mysqli_query($conn, "UPDATE slambook SET status = 'active' WHERE slambook_id = '$rid'");
                    echo "<script>alert('User Activated');</script>";
                    echo "<script>window.location.href = 'guest.php'</script>";
                }
                if ($status == 'active') {
                    $sql = mysqli_query($conn, "UPDATE slambook SET status = 'inactive' WHERE slambook_id = '$rid'");
                    echo "<script>alert('User Deactivated');</script>";
                    echo "<script>window.location.href = 'guest.php'</script>";
                }
            }

            $user_id = $result['user_id'];
            $sql = "SELECT * FROM slambook WHERE user_id = $user_id";
            $query = mysqli_query($conn, $sql);

            ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="col-lg-12  grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Guest In slambook</h4>
                                    <p class="card-description">
                                    </p>
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <!-- Yaha pr change krna hai -->
                                            <tr>
                                                <th> Profile </th>
                                                <th> Guest Name </th>
                                                <th> Phone No </th>
                                                <th> Created By </th>
                                                <th> Status</th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($row = mysqli_fetch_assoc($query))
                                        
                                            
                                            {
                                                $user_id = $row['user_id'];
                                                // hua run???????
                                                $sql = "SELECT * FROM users WHERE  user_id = $user_id";
                                                
                                                $result = mysqli_query($conn, $sql); 
                                                $user_data = mysqli_fetch_array($result);
                                                
                                                ?>
                                                   

                                                <tr>
                                                    <td class="py-1">
                                                        <img src="assets/images/<?php echo $row['profilephoto'] ?>" alt="image" />
                                                    </td>
                                                    <td> <?php echo $row['full_name'] ?> </td>
                                                    <td> <?php echo $row['phone_number'] ?> </td>
                                                    <td> <?php echo $user_data['username'] ?> </td>
                                                    <td> <?php echo $row['status'] ?> </td>
                                                    <td>
                                                        <a href="show_slam_book.php?slambook_id=<?php echo $row['id'] ?>"><i
                                                                class="fa-solid fa-eye"></i></a>

                                                        <?php
                                                        if ($row['status'] == 'active') {
                                                            ?>

                                                            <a href="guest.php?active_id=<?php echo $row['id'] ?>"><i
                                                                    class="fa-solid fa-slambook-pen text-danger"></i></a>


                                                            <?php


                                                        } else if ($row['status'] == 'inactive') {

                                                            ?>
                                                                <a href="guest.php?active_id=<?php echo $row['id'] ?>"><i
                                                                        class="fa-solid fa-slambook-pen text-success"></i></a>


                                                            <?php

                                                        }

                                                        ?>
                                                        <a href="guest.php?delete_id=<?php echo $row['id'] ?>"><i
                                                                class="fa-solid fa-trash "> </i></a>
                                                    </td>



                                                    <?php


                                            } ?>

                                        </tbody>
                                    </table>
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


    