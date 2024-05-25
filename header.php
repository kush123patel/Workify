
 <!DOCTYPE html>
<html class="" lang="zxx">

<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WORKIFY</title>

<!-- Favicon Icon -->
<!-- <link rel="shortcut icon" href="assets/img/favicon-32x32.png" /> -->


<!-- CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-select.min.css">
<link href="assets/plugins/icons/css/icons.css" rel="stylesheet">
<link href="assets/plugins/animate/animate.css" rel="stylesheet">
<link href="assets/plugins/bootstrap/css/bootsnav.css" rel="stylesheet">
<link rel="stylesheet" href="assets/plugins/nice-select/css/nice-select.css">
<link href="assets/plugins/aos-master/aos.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap" rel="stylesheet"> 
</head>
<body class="utf_skin_area">

<div class="page_preloader"></div>
<!-- ======================= Start Navigation ===================== -->
<nav class="navbar navbar-default navbar-mobile navbar-fixed white no-background bootsnav">
  <div class="container">    
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand"  href="index.php"> <img src="assets/img/Workify.png" class="logo logo-display" style="height: 43px;" alt=""> <img src="assets/img/Workify.png" class="logo logo-scrolled" alt=""> </a> 
  </div>
    
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="dropdown "> <a href="index.php">Home</a> </li>
        <li class="dropdown"> <a href="browse-job.php">Search Job</a>
          
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile</a>
          <ul class="dropdown-menu animated fadeOutUp">
            <li><a href="profile.php">User Profile</a></li>
            <li><a href="profile-settings.php">Add Profile</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resume Status</a>
          <ul class="dropdown-menu animated fadeOutUp">
            <li><a href="applied_job.php">Job Applied</a></li>
            <li><a href="seek_accept.php">Resume Approved</a></li>
            <li><a href="seek_reject.php">Resume Rejected</a></li>
          </ul>
        <li class="dropdown"> <a href="contact.php">Feedback</a> </li>

           <?php
              // if(isset($_SESSION['id']))
              // {
              ?>
        <li> <a href="logout.php">Logout</a> </li>
        <?php   
              //}
              ?>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employer</a>
          <ul class="dropdown-menu animated fadeOutUp">
            <li><a href="employer_profile.php" >Profile</a></li>
            <li><a href="add-job.php" >Post Job</a></li>
          

            <li><a href="manageresume.php" >Manage Resume</a></li>
            <li><a href="managejob.php" >Manage Jobs</a></li>
            <li><a href="accept-emp.php" >Accepted Resumes</a></li>    
        <li > <a href="contact.php">Feedback</a> </li>
        <li> <a href="logout.php">Logout</a> </li>
        
            

           </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="sign-up"><a class="btn-signup red-btn" href="signup.php" ><i class="login-icon ti-user"></i>Login</a></li>
        <li class="sign-up"><a class="btn-signup red-btn" href="signup.php"><span class="ti-briefcase"></span>Register</a></li>

      
      </ul>
    </div>
  </div>
</nav>