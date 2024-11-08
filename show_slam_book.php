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
        if ($result['role_id'] == 1) 
        {


            if(isset($_GET['delete_id']))
            {
                $delete_id = $_GET['delete_id'];

                $sql = mysqli_query($conn, "DELETE FROM users WHERE user_id = '$delete_id'");
                echo "<script>alert('User deleted');</script>";
                echo "<script>window.location.href = 'user_table.php'</script>";


            }

            if (isset($_GET['active_id'])) {
                $rid = intval($_GET['active_id']);

                $check = "SELECT * FROM users WHERE user_id = $rid;";

                $result = mysqli_query($conn, $check);
                $check_row = mysqli_fetch_array($result);

                $status = $check_row['status'];

                if ($status == 'inactive') {


                    $sql = mysqli_query($conn, "UPDATE users SET status = 'active' WHERE user_id = '$rid'");
                    echo "<script>alert('User Activated');</script>";
                    echo "<script>window.location.href = 'user_table.php'</script>";
                }
                if ($status == 'active') {
                    $sql = mysqli_query($conn, "UPDATE users SET status = 'inactive' WHERE user_id = '$rid'");
                    echo "<script>alert('User Deactivated');</script>";
                    echo "<script>window.location.href = 'user_table.php'</script>";
                }
            }


            $sql = "SELECT * FROM users where role_id = 2;";
            $query = mysqli_query($conn, $sql);

            ?>

            <div class="main-panel" >
                <div class="content-wrapper"   style="background-image:url('assets/images/bg1.jpg'); background-repeat:no-repeat; width:100%; background-size: cover;" >
                    <div class="container">
                       <h1>welcome</h1>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>


    