<?php
    $conn= mysqli_connect("localhost", "root", "", "slambook");
    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }
    else{
        // echo "<script>alert('Connection Successful')</script>";
    }
?>