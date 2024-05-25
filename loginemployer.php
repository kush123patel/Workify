<?php include_once('model.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type"content="text/html;charset=UTF-8"/>
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<title></title>

<!-- Favicon Icon -->
<!-- <link rel="shortcut icon" href="assets/img/favicon.png" /> -->

<!-- CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link href="assets/plugins/icons/css/icons.css" rel="stylesheet">
<link href="assets/plugins/animate/animate.css" rel="stylesheet">
<link href="assets/plugins/bootstrap/css/bootsnav.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap" rel="stylesheet"> 
</head>
<body class="utf_skin_area">
<div class="page_preloader"></div>
<!-- ======================= Start Navigation ===================== -->
<nav class="navbar navbar-default navbar-mobile navbar-fixed light bootsnav">
  <div class="container">     
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand" href="index.php"> <img src="assets/img/logo.png" class="logo logo-display" alt=""> <img src="#" class="logo logo-scrolled" alt=""> </a> 
  </div>    
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
       
      <ul class="nav navbar-nav navbar-right">
        <li class="br-right"><a class="btn-signup red-btn" href="signup.php" ><i class="login-icon ti-user"></i>Register</a></li>
        <li class="sign-up"><a class="btn-signup red-btn" href="signup.php"><span class="ti-briefcase"></span>Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- ======================= End Navigation ===================== --> 

<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>LOGIN AS EMPLOYER</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i> Signin</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ====================== Start Signup Form ============= -->
<section class="padd-top-80 padd-bot-80">
  <div class="container">
      <div class="log-box clearfix ">
         <div > 
<a href="loginjobseeker.php"><button type="button"  style="width: 220px; margin-left: 15%; " class="btn theme-btn btn-m full-width">Login As JobSeeker</button></a>
<a href="loginemployer.php"><button type="button"style="width: 220px; margin-left: 0%; background-color: #Ffffff;" class="btn theme-btn btn-m full-width">Login As Employer</button><br></br><br></br></a>
</div>
        <form class="log-form " action="" method="POST">
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="xemail" value="<?php if(isset($_COOKIE['xemail'])){ echo $_COOKIE['xemail'];}?>"  required="" placeholder="Email" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password"  class="form-control" value="<?php if(isset($_COOKIE['xpassword'])){ echo $_COOKIE['xpassword'];}?>" name="xpassword" required="" placeholder="********" required="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group text-center mrg-top-15">
                <button type="submit" name="login" class="btn theme-btn btn-m full-width" value="login">Sign Up</button>
              </div>
            </div>
        </form>
      </div>
  </div>

</section><?php
include_once("footer.php");
?>