<?php 

include ("include/dbcon.php");


if(isset($_POST['submit'])){
    $emailaddress = $_POST["emailaddress"];
    $password = $_POST["password"];
    $data = mysqli_query($sql_con,"select * from teacher where emailaddress='$emailaddress' and password='$password'");
    $datarow = mysqli_num_rows($data);
    if ($datarow > 0) {
      $row = mysqli_fetch_array($data);
      $status = $row['status'];
      if($status == "Active"){
          $id = $row['id'];
          session_start();
          $_SESSION['id'] = $id;
          header("location: view_staff.php");
      }else{
          echo "<script>alert('Your account has not been activated. Please contact School Admin!')</script>";
          echo"<script>window.location='index.php';</script>";
      }
      }
        else{
          echo "<script>alert('Wrong information please try again!')</script>";
          echo"<script>window.location='index.php';</script>";
        }
      }

    ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:47 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>SchoolTech - Login</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="assets/img/login.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1 style="margin-left: 80px;">SchoolTech</h1>
<h3 class="account-subtitle">Welcome to the Staff Panel</h3>

<form method="post">
<div class="form-group">
<label>Email Address <span class="login-danger">*</span></label>
<input class="form-control" name="emailaddress" type="email" required>
<span class="profile-views"><i class="fas fa-user-circle"></i></span>
</div>
<div class="form-group">
<label>Password <span class="login-danger">*</span></label>
<input class="form-control pass-input" name="password" type="password" required>
<span class="profile-views feather-eye toggle-password"></span>
</div>
<div class="forgotpass">
<div class="remember-me">
<label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
<input type="checkbox" name="radio">
<span class="checkmark"></span>
</label>
</div>
<a href="forgot-password.html">Forgot Password?</a>
</div>
<div class="form-group">
<button class="btn btn-primary btn-block" name="submit" type="submit">Login</button>
</div>
</form>

<!-- <div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div> -->

<!-- <div class="social-login">
<a href="#"><i class="fab fa-google-plus-g"></i></a>
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-linkedin-in"></i></a>
</div> -->

</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 19:53:47 GMT -->
</html>