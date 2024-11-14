<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Slam Book - User and Guest </title>
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





            $sql = "SELECT * FROM users where role_id = 2;";
            $query = mysqli_query($conn, $sql);


            // $user = mysqli_fetch_array($query);
        
            // $user_id = $user['role_id'];
        



            ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="col-lg-12  grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Users and Guest Mapping</h4>
                                    <p class="card-description">
                                    </p>
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> User Profile </th>
                                                <th> User Name </th>
                                                <th> Guest Photo </th>
                                                <th> Guest Name </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($row = mysqli_fetch_assoc($query)) {


                                                $user_id = $row['user_id'];

                                                $slambook = "SELECT * FROM  slambook WHERE user_id = '$user_id'";

                                                $slambook_query = mysqli_query($conn, $slambook);

                                               


                                                while( $slambook_result = mysqli_fetch_assoc($slambook_query))
                                                {

                                                
                                                ?>



                                                <tr>
                                                    <td class="py-1">
                                                        <img src="assets/images/<?php echo $row['profile'] ?>" alt="image" />
                                                    </td>
                                                    <td> <?php echo $row['username'] ?> </td>
                                                    <td class="py-1">
                                                        <img src="assets/images/<?php echo $slambook_result['profilephoto'] ?>"
                                                            alt="image" />
                                                    </td>
                                                    <td> <?php echo $slambook_result['full_name'] ?> </td>

                                                    <td>
                                                        <a href="show_slam_book.php?slambook_id=<?php echo $slambook_result['id'] ?>"><i
                                                                class="fa-solid fa-eye"></i></a>
                                                    </td>

                                                    <?php
                                                }

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