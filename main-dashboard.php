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
</head>

<body>
  <div class="container-scroller">

    <?php
    include('Common/side_bar.php');
    if ($result['role_id'] == 1) {

      $user = "select * from users where role_id=2";
      $user_result = mysqli_query($conn, $user);

      $slambook = "select * from slambook";
      $slambook_result = mysqli_query($conn, $slambook);






      ?>



      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/dashboard_images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Users <i class="mdi mdi-account-outline mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5"> <?php echo mysqli_num_rows($user_result) ?></h2>
                  <!-- <h6 class="card-text">Increased by 60%</h6> -->
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/dashboard_images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">SlamBooks <i class="mdi mdi-book-account mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo mysqli_num_rows($slambook_result) ?></h2>
                  <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <div class="card-title text-center">
                    New Users
                  </div>
                </div>
                <div class="card-body">
                  <div class=table-responsive>
                    <table class="table table-striped">
                      <thead class=thead-light>
                        <tr>
                          <th>User</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $currentdate = date('Y-m-d');
                        $sql = "SELECT * FROM  users WHERE DATE(created_at)  = '$currentdate';";

                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result)) {
                          while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                              <td><?php echo $row['username'] ?></td>
                              <td><?php echo $row['email'] ?></td>
                              <td><?php echo $row['contact'] ?></td>
                              <td><?php echo $row['address'] ?></td>
                              <td> <a href="user_view.php?user_id=<?php echo $row['user_id'] ?>"><i
                                    class="fa-solid fa-eye"></i></a></td>
                            </tr>


                            <?php
                          }
                        } else {
                          echo "<td colspan=5 class='text-center'>No records found</td>";
                        }
                        ?>
                      </tbody>

                    </table>

                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <div class="card-title text-center">
                    New Slambook
                  </div>
                </div>
                <div class="card-body">
                  <div class=table-responsive>
                    <table class="table table-striped">
                      <thead class=thead-light>
                        <tr>
                          <th>User</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $currentdate = date('Y-m-d');
                        $sql = "SELECT * FROM  slambook WHERE DATE(created_at)  = '$currentdate';";

                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result)) {
                          while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                              <td><?php echo $row['full_name'] ?></td>
                              <td><?php echo $row['email'] ?></td>
                              <td><?php echo $row['phone_number'] ?></td>
                              <td><?php echo $row['status'] ?></td>
                              <td> <a href="user_view.php?user_id=<?php echo $row['user_id'] ?>"><i
                                    class="fa-solid fa-eye"></i></a></td>
                            </tr>


                            <?php
                          }
                        } else {
                          echo "<td colspan=5 class='text-center'>No records found</td>";
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a
                href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      <?php
    } elseif ($result['role_id'] == 2) {



      ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>

          <!-- <h2>Welcome User</h2> -->

          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>
                      Your SlamBooks
                    </h4>
                    <a href="slambook_form.php" class="btn btn-primary"> Create New Slam Book</a>
                  </div>
                  <div class="card-body">
                    <table class="table table-responsive  table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Date Of Birth</th>
                          <th>Created On</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php

                        $user_id = $result['user_id'];
                        $sql = "SELECT * FROM  slambook WHERE user_id = $user_id;";
                        $result = mysqli_query($conn, $sql);

                      // Delete code here
                      // if (isset($_GET['delete_id'])) {
                      //   $delete_id = $_GET['delete_id'];
                      //   $sql = "DELETE FROM slambook WHERE id = $delete_id";
                      //   mysqli_query($conn, $sql);
                      //   header("Location: main-dashboard.php");
                      // }

                      

                        if (mysqli_num_rows($result)) {
                          while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                              <td>
                                <?php echo $row['full_name'] ?>
                              </td>
                              <td>
                                <?php echo $row['email'] ?>
                              </td>
                             

                              <td>
                                <?php echo $row['phone_number'] ?>
                              </td>
                              <td>
                              <?php
                              $date = $row['date_of_birth'];
                              echo date('d-m-Y', strtotime($date));
                              ?>
                              </td>
                              <td>
                                <?php echo $row['created_at'] ?>
                              </td>

                              <td>
                                <a href="slambook_view.php?user_id=<?php echo $row['id'] ?>"><i class="fa-solid fa-eye"></i></a>

                                <a href="slam_book_edit.php?slambook_id<?php echo $row['id'] ?>"><i
                                    class="fa-regular fa-pen-to-square"></i></a>

                                <a href="main-dashboard?delete_id=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash ">
                                  </i></a>
                              </td>



                            </tr>
                            <?php
                          }

                        }
                         else 
                        {
                          echo "<td colspan=6 class='text-center'>No records found</td>";
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a
                href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <?php
    }

    ?>
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

</body>

</html>