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


        if(isset($_GET['slambook_id']))
        {

            $slambook_id = $_GET['slambook_id'];
            $query = "SELECT * FROM slambook WHERE id = $slambook_id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

        

        if (isset($_POST['submit'])) {
            // $user_id=$result['user_id'];
            $fullname = $_POST['fullname'];
            $nickname = $_POST['nickname'];
            $dateofbirth = $_POST['dateofbirth'];
            $email = $_POST['email'];
            $phoneno = $_POST['phoneno'];
            $gender = $_POST['gender'];
            // $profilephoto = $_FILES["profile"]["name"];
            $country = $_POST['country'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $favoritecolor = $_POST['favcolor'];
            $favoritesong = $_POST['favsong'];
            $favoritemovies = $_POST['favmovie'];
            $favoriteactress = $_POST['favactress'];
            $favoriteactors = $_POST['favactor'];
            $favoritesinger = $_POST['favsinger'];
            $favoritefood = $_POST['favfood'];
            $badhabbit = $_POST['badhabbit'];
            $personalitywords = $_POST['personalitywords'];
            $hobbies = $_POST['hobbies'];
            $dreamgoal = $_POST['dreamgoal'];
            $biggestfear = $_POST['biggestfear'];
            $proudestachievement = $_POST['achievement'];
            // $profilephoto = $_FILES['profile']['name'];
            $bestchildhoodmemory = $_POST['bestchildhoodmemory'];
            $funniestincident = $_POST['funniestincident'];
            $mostembarrassingmoment = $_POST['mostembarrassingmoment'];
            $favoritememorytogether = $_POST['favoritememorytogether'];
            $adviceforme = $_POST['adviceforme'];
            $hiddentalent = $_POST['hiddentalent'];
            $essentialitem = $_POST['essentialitem'];
            $dreamdestination = $_POST['dreamdestination'];
            $specialmessage = $_POST['specialmessage'];



            $sql="update slambook set full_name='$full_name', nickname='$nickname', email='$email', date_of_birth='$dateofbirth' , phone_number='$phoneno' , favorite_color='$favoritecolor', favorite_song='$favoritesong', favorite_movie='$favoritemovie' , favorite_actors='$favoriteactors', favorite_actress = '$favoriteactress' , favorite_singer = '$favoritesinger', favorite_food='$favoritefood', bad_habbit='$badhabbit', personality_words = '$personality_words ' ;





        }





        ?>




        <div class="main-panel">
            <div class="content-wrapper">
                <form  method="post" id="slambook">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-5"> SLAM BOOK </h4>
                                    <!-- <p class="card-description"> BASIC INFORMATIONS </p> -->
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Full Name</label>
                                            <input type="text" class="form-control" id="fullname"
                                                placeholder="Full Name" name="fullname" required value="<?php echo $row['full_name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Nick Name</label>
                                            <input type="text" class="form-control" id="nickname"
                                                placeholder="Nick Name" name="nickname" required value="<?php echo $row['nickname']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Date Of Birth</label>
                                            <input type="date" class="form-control" id="dateofbirth" placeholder="Name"
                                                name="dateofbirth" required value="<?php $date = date_create($row['date_of_birth']);
                                                    echo date_format($date, "d-m-Y"); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email address</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email"
                                                name="email" required  value="<?php echo $row['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Phone No.</label>
                                            <input type="number" class="form-control" id="phoneno"
                                                placeholder="Phone no" name="phoneno" required  value="<?php echo $row['phone_number']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Gender</label>
                                           <input type="text" class="form-control" name="gender" id="gender" value="<?php  echo $row['gender']?>">
                                          
                                        </div>

                                      

                                        <div class="form-group">
                                            <label for="exampleInputCity1">Country</label>
                                            <input type="text" class="form-control" id="country" placeholder="Country"
                                                name="country" required  value="<?php echo $row['country']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">State</label>
                                            <input type="text" class="form-control" id="state" placeholder="State"
                                                name="state" required value="<?php echo $row['state']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">City</label>
                                            <input type="text" class="form-control" id="city" placeholder="City"
                                                name="city" required value="<?php echo $row['city']; ?>">
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
                                            <input type="text" class="form-control" id="favcolor"
                                                placeholder="Favorite Color" name="favcolor" value="<?php echo $row['favorite_color']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Favorite Song</label>
                                            <input type="text" class="form-control" id="favsong"
                                                placeholder="Favorite Song" name="favsong" value="<?php echo $row['favorite_song']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Movie</label>
                                            <input type="text" class="form-control" id="favmovie"
                                                placeholder="Favorite Movie" name="favmovie" value="<?php echo $row['favorite_movie']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Actors</label>
                                            <input type="text" class="form-control" id="favactor"
                                                placeholder="Favorite Actor" name="favactor" value="<?php echo $row['favorite_actors']; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Actress</label>
                                            <input type="text" class="form-control" id="favactress"
                                                placeholder="Favorite Actress" name="favactress" value="<?php echo $row['favorite_actress']; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Singer</label>
                                            <input type="text" class="form-control" id="favsinger"
                                                placeholder="Favorite Singer" name="favsinger" value="<?php echo $row['favorite_singer']; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Favorite Food</label>
                                            <input type="text" class="form-control" id="favfood"
                                                placeholder="Favorite Food" name="favfood" value="<?php echo $row['favorite_food']; ?>" >
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
                                            <input type="text" class="form-control" id="badhabbit"
                                                placeholder=" Bad Habbit" name="badhabbit" value="<?php echo $row['bad_habbit']; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Personality Words</label>
                                            <input type="text" class="form-control" id="personalitywords"
                                                placeholder="Personality Words" name="personalitywords" value="<?php echo $row['personality_words']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Hobbies</label>
                                            <input type="text" class="form-control" id="hobbies" placeholder="Hobbies"
                                                name="hobbies" value="<?php echo $row['hobbies']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Dream Goal</label>
                                            <input type="text" class="form-control" id="dreamgoal"
                                                placeholder="Dream Goal" name="dreamgoal" value="<?php echo $row['dream_goal']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Biggest Fear</label>
                                            <input type="text" class="form-control" id="biggestfear"
                                                placeholder="Biggest fear" name="biggestfear" value="<?php echo $row['biggest_fear']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Proudest Achievement</label>
                                            <input type="text" class="form-control" id="achievement"
                                                placeholder="Proudest Achievement" name="achievement" value="<?php echo $row['proudest_achievement']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Best Childhood Memory</label>
                                            <input type="text" class="form-control" id="bestchildhoodmemory"
                                                placeholder="Best Childhood Memory" name="bestchildhoodmemory" value="<?php echo $row['best_childhood_memory']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-5"> BASIC INFORMATIONS</h4> -->
                                    <!-- <p class="card-description"> BASIC INFORMATIONS </p> -->
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Funniest Incident </label>
                                            <input type="text" class="form-control" id="funniestincident"
                                                placeholder="Funniest Incident" name="funniestincident" value="<?php echo $row['funniest_incident']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Most Embarrassing Moment</label>
                                            <input type="text" class="form-control" id="mostembarrassingmoment"
                                                placeholder="Most Embarrassing Moment" name="mostembarrassingmoment" value="<?php echo $row['most_embarrassing_moment']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Favorite Memory Together</label>
                                            <input type="text" class="form-control" id="favoritememorytogether"
                                                placeholder="Favorite Memory Together" name="favoritememorytogether" value="<?php echo $row['favorite_memory_together']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Advice For Me</label>
                                            <input type="text" class="form-control" id="adviceforme"
                                                placeholder="Advice For Me" name="adviceforme" value="<?php echo $row['advice_for_me']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Hidden Talent</label>
                                            <input type="text" class="form-control" id="hiddentalent"
                                                placeholder="Hidden Talent" name="hiddentalent" value="<?php echo $row['hidden_talent']; ?>">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputCity1">Essential Item</label>
                                            <input type="text" class="form-control" id="essentialitem"
                                                placeholder="Essential Item" name="essentialitem" value="<?php echo $row['essential_item']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Dream Destination</label>
                                            <input type="text" class="form-control" id="dreamdestination"
                                                placeholder="Dream Destination" name="dreamdestination" value="<?php echo $row['dream_destination']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Special Message</label>
                                            <input type="text" class="form-control" id="specialmessage"
                                                placeholder="Special Message" name="specialmessage" value="<?php echo $row['special_message$']; ?>">
                                        </div>


                                        <button type="submit" name="submit"
                                            class="btn btn-gradient-primary me-2">Edit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        }
    ?>


    <script src="assets/jQuery/jquery-3.7.1.min.js"></script>
    <script src="assets/jQuery/jquery.validate.min.js"></script>
    <script src="assets/jQuery/jquery-ui.min.js"></script>
    <script src="assets/js/slam_book_form_js/script.js"></script>
    <script>
        $(document).ready(function () {
            $("#slambook").validate({
                rules: {
                    fullname: {
                        required: true,
                        minlength: 2
                    },
                    nickname: {
                        required: true,
                    },
                    dateofbirth: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phoneno: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true
                    },
                    gender: {
                        required: true,
                    },
                    profile: {
                        required: true,
                    },
                    country: {
                        required: true,
                    },
                    state: {
                        required: true,
                    },
                    city: {
                        required: true,
                    },
                    favcolor: {
                        required: true,
                    },
                    favsong: {
                        required: true,
                    },
                    favmovie: {
                        required: true,
                    },
                    favactor: {
                        required: true,
                    },
                    favactress: {
                        required: true,
                    },
                    favsinger: {
                        required: true,
                    },
                    favfood: {
                        required: true,
                    },
                    badhabbit: {
                        required: true,
                    },
                    personalitywords: {
                        required: true,
                    },
                    hobbies: {
                        required: true,
                    },
                    dreamgoal: {
                        required: true,
                    },
                    biggestfear: {
                        required: true,
                    },
                    achievement: {
                        required: true,
                    },
                    bestchildhoodmemory: {
                        required: true,
                    },
                    funniestincident: {
                        required: true,
                    },
                    mostembarrassingmoment: {
                        required: true,
                    },
                    favoritememorytogether: {
                        required: true,
                    },
                    adviceforme: {
                        required: true,
                    },
                    hiddentalent: {
                        required: true,
                    },
                    essentialitem: {
                        required: true,
                    },
                    dreamdestination: {
                        required: true,
                    },
                    specialmessage: {
                        required: true,
                    },


                }
            });
        })
    </script>