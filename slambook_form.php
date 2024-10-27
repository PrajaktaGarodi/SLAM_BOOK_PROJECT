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
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white mr-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include('Common/side_bar.php');

        ?>

        <div class="main-panel">
            <div class="content-wrapper">
            <form action="slambook_form.php" method="Post" id="slambook"  entype="multipart/form-data">
                <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-5"> SLAM BOOK </h4>
                                    <!-- <p class="card-description"> BASIC INFORMATIONS </p> -->
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Full Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Full Name" name="fullname">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Nick Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Nick Name" name="nickname">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Date Of Birth</label>
                                            <input type="date" class="form-control" id="exampleInputName1"
                                                placeholder="Name" name="dateofbirth">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3"
                                                placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Phone No.</label>
                                            <input type="number" class="form-control" id="exampleInputEmail3"
                                                placeholder="Phone no" name="phoneno">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Gender</label>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="gender"
                                                        value="male" id="gender"> Male</label>
                                            </div>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="gender"
                                                        value="female" id="gender"> Female</label>
                                            </div>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="gender"
                                                        value="other" id="gender"> Other</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Profile Photo</label>
                                            <input type="file" class="form-control" id="exampleInputName1"
                                                placeholder="Profile Photo" name="profile">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputCity1">Country</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="Country" name="conitry">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">State</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="State" name="state">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">City</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="City" name="city">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---basic information close--->


                        <!-----fav form start------>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-5  text-uppercase"> Favorite information</h4> -->
                                    <!-- <p class="card-description"> Basic form layout </p> -->
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Favorite Color</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="Favorite Color" name="favcolor">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Favorite Song</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Favorite Song" name="favsong">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Movie</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Favorite Movie" name="favmovie">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Actors</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Favorite Actor" name="favactor">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Actress</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Favorite Actress" name="favactrees">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Singer</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Favorite Singer" name="favsinger">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Food</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Favorite Food" name="favfood">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-5  text-uppercase"> Favorite information</h4> -->
                                    <!-- <p class="card-description"> Basic form layout </p> -->
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Bad Habbit</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder=" Bad Habbit" name="badhabbit">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Personality Words</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Personality Words" name="personalitywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Hobbies</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Hobbies" name="hobbies">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Dream Goal</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Dream Goal" name="dreamgoal">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Biggest Fear</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Biggest fear" name="biggestfear">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Proudest Achievement</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Proudest Achievement" name=">proudestchaievement<">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Best Childhood Memory</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Best Childhood Memory" name="bestchildhoodmemory">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-5"> BASIC INFORMATIONS</h4> -->
                                    <!-- <p class="card-description"> BASIC INFORMATIONS </p> -->
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Funniest Incident </label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Funniest Incident" name="funniestincident	">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Most Embarrassing Moment</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Most Embarrassing Moment" name="mostembarrassingmoment">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Favorite Memory Together</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Favorite Memory Together" name="favoritememorytogether">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Advice For Me</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3"
                                                placeholder="Advice For Me" name="adviceforme">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Hidden Talent</label>
                                            <input type="text" class="form-control" id="exampleInputEmail3"
                                                placeholder="Hidden Talent" name="hiddentalent">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputCity1">Essential Item</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="Essential Item" name="essentialitem">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Dream Destination</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="Dream Destination" name="dreamdestination">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Special Message</label>
                                            <input type="text" class="form-control" id="exampleInputCity1"
                                                placeholder="Special Message" name="specialmessage">
                                        </div>


                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>