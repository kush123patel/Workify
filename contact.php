<?php include_once('model.php') ?>
<?php

if(isset($_SESSION['eid']) OR isset($_SESSION['id']))
{
  
}
else
{
  echo "<script>
  window.location='loginjobseeker.php';
  </script>";
}
?>
<?php 
  include_once("header.php");
 ?>
<!-- ======================= End Navigation ===================== --> 

<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Feedback</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i> Feedback</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ================ Fill Forms ======================= -->
<section class="padd-top-80 padd-bot-70" style="margin-right: 80px">
  <div class="container">
    <div class="col-md-6 col-sm-6">
      <div class="row" >
		<form class="mrg-bot-40" method="post" action="">
			<div class="col-md-12 col-sm-12" >
			  <label>Name:</label>
			  <input type="text" name="name" class="form-control" required="" placeholder="Name" />
			</div>
			<div class="col-md-12 col-sm-12">
			  <label>Subject:</label>
			  <input type="text" name="subject" class="form-control" required="" placeholder="Subject" />
			</div>
			<div class="col-md-12 col-sm-12">
			  <label>Message:</label>
			  <textarea class="form-control height-120" name="message" required="" placeholder="Message"></textarea>
			</div>
			<div class="col-md-12 col-sm-12">
			  <button class="btn theme-btn" name="submit">Send Feedback</button>
			</div>
		</form>
	  </div>
    </div>
    <div class="col-md-6 col-sm-6"><img src="assets/img/slider_bg.jpg" width="129%" height="130%" style="opacity: 0.7; border-radius: 2%;">
    </div>
  </div>

</section>

<?php
include_once("footer.php");
?>