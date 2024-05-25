<?php include_once('model.php') ?>
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
        <li class="br-right"><a class="btn-signup red-btn" href="javascript:void(0)" data-toggle="modal" data-target="#signin"><i class="login-icon ti-user"></i>Register</a></li>
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
      <h2>Create an Account</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i> Signup</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== -->
<!-- ====================== Start Signup Form ============= -->
<section class="padd-top-80 padd-bot-80">
  <div class="container">
      <div class="log-box">
        <div > 
<a href="loginjobseeker.php"><button type="button"  style="width: 300px; margin-left: 4%;" class="btn theme-btn btn-m full-width">Login As JobSeeker</button></a>
<a href="loginemployer.php"><button type="button"style="width: 300px; margin-left: 0%;" class="btn theme-btn btn-m full-width">Login As Employer</button><br></br></a>

  </div>
</section>
<!-- ====================== End Signup Form ============= --> 
<!-- signin -->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="myModalLabel1">
      <div class="modal-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
          <li class="nav-item active"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"> <i class="ti-user"></i> Job Seeker</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#candidate" role="tab"> <i class="ti-user"></i> Job Provider</a> </li>
        </ul>
        <!-- Nav tabs --> 
        <!-- Tab panels -->
        <div class="tab-content"> 
          <!-- seeker Panel 1-->
          <div class="tab-pane fade in show active" id="employer" role="tabpanel">
            <form action="" method="POST">
              <div class="form-group">
                <input type="name" class="form-control" placeholder="Name" name="name" required="">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Address" name="email" required="">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required="">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Re-Enter Password" required="">
              </div>
              <div class="form-group">
                <input type="phone" class="form-control" name="phone" placeholder="Phone" required="">
              </div>
        
              
              <div class="form-group text-center">
                <button type="submit" class="btn theme-btn full-width btn-m" name="ssubmit">Register</button>
              </div>
            </form>
      
          </div>
          <!--/.Panel 1--> 
          
          <!-- Candidate Panel 2-->
          <div class="tab-pane fade" id="candidate" role="tabpanel">
            <form action="" method="POST">
              <div class="form-group">
                <input type="name" class="form-control" placeholder="Name" name="xname" required="">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Address" name="xemail" required="">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="xpassword" required="">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Re-Enter Password" required="">
              </div>
              <div class="form-group">
                <input type="phone" class="form-control" placeholder="Phone" name="xphone" required="">
              </div>
             
              <div class="form-group text-center">
                <button type="submit" class="btn theme-btn full-width btn-m" name="esubmit">Register</button>
              </div>
            </form>
      
          </div>
        </div>
        <!-- Tab panels --> 
      </div>
    </div>
  </div>
</div>
<!-- End Signup -->

<!-- ================= footer start ========================= -->
<!-- <?php  
// include_once("footer.php");
  ?> -->
<!-- Signup Code -->

<?php
include_once("footer.php");
?>