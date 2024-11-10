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

            .card {
                background: transparent !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <?php
        include('Common/side_bar.php');
        if ($result['role_id'] == 2) {

            if (isset($_GET['slambook_id'])) {
                $slambook_id = $_GET['slambook_id'];
                $query = "SELECT * FROM slambook WHERE id = $slambook_id";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);


                ?>

                <div class="main-panel">
                    <div class="content-wrapper"
                        style="background-image:url('assets/images/bg1.jpg'); background-repeat:no-repeat; width:100%; background-size: cover; background-position:center;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-header">
                                            <h1>About Me</h1>
                                        </div>

                                        <div class="card-body">
                                            <h3>Name: <?php echo $row['full_name']; ?></h3>
                                            <p>Nickname: <?php echo $row['nickname']; ?></p>
                                            <p>Phone No.: <?php echo $row['phone_number']; ?></p>
                                            <p>Email: <?php echo $row['email']; ?></p>
                                            <p>Date of Birth : <?php $date = date_create($row['date_of_birth']);
                                            echo date_format($date, "d-m-Y"); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <h1>Image</h1>
                                        </div>

                                        <div class="card-body">
                                            <img src="assets/images/ <?php echo $row['profilephoto']; ?>" alt="User Image"
                                                class="img-fluid" style="width:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>