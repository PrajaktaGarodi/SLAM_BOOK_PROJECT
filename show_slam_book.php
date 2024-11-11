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
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h1>About Me</h1>
                                                </div>

                                                <div class="card-body">
                                                    <h3>Name : <?php echo $row['full_name']; ?></h3>
                                                    <p><b>Nickname :</b> <?php echo $row['nickname']; ?></p>
                                                    <p><b>Phone No :</b> <?php echo $row['phone_number']; ?></p>
                                                    <p><b>Email :</b> <?php echo $row['email']; ?></p>
                                                    <p><b>Date of Birth : </b><?php $date = date_create($row['date_of_birth']);
                                                    echo date_format($date, "d-m-Y"); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h1><b>Favorite</b></h1>
                                                </div>
                                                <div class="card-body">
                                                    <p><b>Favorite Color :</b> <?php echo $row['favorite_color']; ?></p>
                                                    <p><b>Favorite Song :</b> <?php echo $row['favorite_song']; ?></p>
                                                    <p><b>Favorite Movie :</b> <?php echo $row['favorite_movie']; ?></p>
                                                    <p><b>Favorite Actors :</b> <?php echo $row['favorite_actors']; ?></p>
                                                    <p><b>Favorite Actress :</b> <?php echo $row['favorite_actress']; ?></p>
                                                    <p><b>Favorite Singer :</b> <?php echo $row['favorite_singer']; ?></p>
                                                    <p><b>Favorite Food :</b> <?php echo $row['favorite_food']; ?></p>
                                                </div>
                                            </div>
                                        </div>



                                    </div>




                                </div>







                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <h1>Image</h1>
                                        </div>

                                        <div class="card-body">
                                            <img src="assets/images/<?php echo $row['profilephoto'] ?>" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>






                                <div class="col-md-12 mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h1>Personality And Experiences </h1>
                                        </div>
                                        <div class="card-body">

                                            <p><b>Bad Habit :</b> <?php echo $row['bad_habbit']; ?></p>
                                            <p><b>Personality Word :</b> <?php echo $row['personality_words']; ?></p>
                                            <p><b>Hobbies :</b> <?php echo $row['hobbies']; ?></p>
                                            <p><b>Dream Goal :</b> <?php echo $row['dream_goal']; ?></p>
                                            <p><b>Biggest Fear :</b> <?php echo $row['biggest_fear']; ?></p>
                                            <p><b>Proudest Achievement :</b> <?php echo $row['proudest_achievement']; ?></p>
                                            <p><b>Best Childhood Memory :</b> <?php echo $row['best_childhood_memory']; ?></p>
                                            <p><b>Funniest Incident :</b> <?php echo $row['funniest_incident']; ?></p>
                                            <p><b>Most Embarrassing Moment :</b> <?php echo $row['most_embarrassing_moment']; ?>
                                            </p>
                                            <p><b>Favorite Memory Together :</b> <?php echo $row['favorite_memory_together']; ?>
                                            </p>
                                            <p><b>Advice For Me :</b> <?php echo $row['advice_for_me']; ?></p>
                                            <p><b>Hidden Talent :</b> <?php echo $row['hidden_talent']; ?></p>
                                            <p><b>Essential Item :</b> <?php echo $row['essential_item']; ?></p>
                                            <p><b>Special Message :</b> <?php echo $row['special_message']; ?></p>
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