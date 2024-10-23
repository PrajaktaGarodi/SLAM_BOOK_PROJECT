<?php
include("Common/connection.php");

if (isset($_POST['submit'])) {
  $usersname = $_POST['username'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $confirmpassword = $_POST['confirmpassword'];
  $gender = $_POST['gender'];
  $filename =$_FILES['profile']["name"];
  $tempname = $_FILES["profile"]["tmp_name"];

  if($_POST['password']!== $confirmpassword)
  {
    echo "<script> alert('Passsword don't match');
    window.locations.href='register.php'</script>";
  }
  else
  {
    $check ="SELECT * FROM users WHERE username='$usersname';";
    $result = mysqli_query($conn,$check);

    if(mysqli_num_rows($result)>0)
    {
      echo "<script>alert('User Already Registered')
      window.location.href= 'register.php';</script>";
    }
    else
    {
      $folder = "assets/images/" .basename($filename);

      $sql = "INSERT INTO users (username , email, password , contact, address, gender , role_id , profile)
      VALUES('$usersname' , '$email', '$password' , '$contact', '$address', '$gender' , 2 , '$filename');";

      $insert = mysqli_query($conn , $sql);

      if($insert) 
      {
        if(move_uploaded_file($tempname,$folder))
        {
          echo "<script>alert('User Registerted Successfully');
          window.location.href='index.php';</script>";
        }
        else
        {
          echo "<script>alert('Failed to Upload images');
          </script>";
        }
      }
      else
      {
        echo "<script>alert('Error occurred while registering user');
      window.location.href='register.php';;</script>";
      }
    }

  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/user_register/style.css"> <!-- Link to external CSS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script> <!-- Link to external JS -->
</head>

<body>
  <div class="container mt-5 mb-5">
    <div class="card">
      <div class="card-header text-center">
        <h2>User Registration Form</h2>
      </div>
      <div class="card-body">
        <form id="register" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact number">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" rows="2"
              placeholder="Enter your address"></textarea>
          </div>
          <div class="form-group">
            <label>Gender</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male" value="male">
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="female" value="female">
              <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="other" value="other">
              <label class="form-check-label" for="other">Other</label>
            </div>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" name="confirmpassword" id="confirmPassword"
              placeholder="Confirm password">
          </div>
          <div class="form-group">
            <label for="profilePhoto">Profile Photo</label>
            <input type="file" name="profile" class="form-control-file" id="profilePhoto">
          </div>
          <button type="submit" name="submit" style="background-color:darkblue;  color:whitesmoke  ;     font-family: 'Times New Roman', Times, serif;
          " class="btn  btn-block">REGISTER</button>
        </form>
      </div>
    </div>
  </div>

  <!-- <script src="assets/jQuery/jquery-3.7.1.js"></script> -->
  <script src="assets/jQuery/jquery-3.7.1.min.js"></script>
  <script src="assets/jQuery/jquery.validate.min.js"></script>
  <script src="assets/jQuery/jquery-ui.min.js"></script>
  <script src="assets/js/user_registeration/script.js"></script>


</body>

</html>