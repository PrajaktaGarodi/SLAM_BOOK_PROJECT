<?php

include("common/connection.php");

if (isset($_POST['submit'])) { // Correct $_POST case sensitivity
    $email = $_POST['email']; // Correct $_POST case sensitivity
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT); // Correct $_POST case sensitivity
    $confirm_password = $_POST['confirm_password'];

    // Fix SQL query typo
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $users = mysqli_fetch_array($result);

        if ($confirm_password == $_POST['new_password']) {
            $sql = "UPDATE users SET password='$new_password' WHERE email='$email'";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Password Changed Successfully')</script>";
                echo "<script>window.location.href = 'index.php'</script>";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Passwords do not match')</script>";
        }



    } else {
        echo "<script>alert('User Not Found...')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forget Password</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="assets/css/login_css/style.css" />
</head>

<body class="img js-fullheight" style="background-image: url(assets/images/bg.jpg)">
    <section class="ftco-section">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="col-md-6 pt-5 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="pt-5 text-center pb-5"> Forget Password....!</h3>
                        <form action="forget_password.php" method="post" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="email" required />
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="new_password" class="form-control"
                                    placeholder=" New Password" required />
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <input id="password-field" type="password" name="confirm_password" class="form-control"
                                    placeholder="Confirm Password" required />
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>





                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3" name="submit">
                                    Change Password
                                </button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <!-- <label class="checkbox-wrap checkbox-primary">Remember Me
                                      <input type="checkbox" checked>
                                      <span class="checkmark"></span>
                                    </label> -->

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/login_js/jquery.min.js"></script>
    <script src="assets/js/login_js/popper.js"></script>
    <script src="assets/js/login_js/bootstrap.min.js"></script>
    <script src="assets/js/login_js/main.js"></script>
</body>

</html>