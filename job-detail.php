<?php 
 include_once("header.php");
 ?>
 <?php 
$mysqli = new mysqli("localhost","root","", "test");

if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}    
if ($id=$_GET["vid"]) { 
 $xyz = "SELECT * FROM p_job WHERE id=$id ";
  $result = $mysqli->query($xyz);
}
?>


<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Job Detail</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i> Job Detail</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ====================== Start Job Detail 2 ================ -->
<?php   // LOOP TILL END OF DATA 
                while($row = mysqli_fetch_array($result)):
          ?>
<section class="padd-top-80 padd-bot-60">
  <div class="container"> 
    <!-- row -->
    
    <div class="row">
      <div class="col-md-8 col-sm-7">
        <div class="detail-wrapper">
          <div class="detail-wrapper-body">
			<div class="row">
				<div class="col-md-4 text-center user_profile_img"> <img src="<?php echo $row["logo"];?>" class="width-100"  alt=""/>
				  <h4 class="meg-0"><?php echo $row["category"];?></h4>
				  <span><?php echo $row["address"];?></span> 
				  <div class="text-center">
					<button type="button" data-toggle="modal" data-target="#signin" class="btn-job theme-btn job-apply">Apply Now</button>
				  </div>
				</div>
				<div class="col-md-8 user_job_detail">
          <div class="col-sm-12 mrg-bot-10"> <label>Title:-</label>&nbsp <span class="full-type"><?php echo $row["title"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Company Name:-</label>&nbsp <span class="full-type"><?php echo $row["c_name"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Contact No:-</label>&nbsp <span class="full-type"><?php echo $row["phone_no"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Job Type:-</label>&nbsp <span class="full-type"><?php echo $row["j_type"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Email:-</label>&nbsp <span class="full-type"><?php echo $row["email"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Phone No:-</label>&nbsp <span class="full-type"><?php echo $row["phone_no"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Address:-</label>&nbsp <span class="full-type"><?php echo $row["address"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>City:-</label>&nbsp <span class="full-type"><?php echo $row["city"];?></span></div>
					</div>
          </div>
        </div>
        </div>
       
		
      </div>
      
      <!-- Sidebar -->
      <div class="col-md-4 col-sm-5">                         
          <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Job Description</h4>
          </div>
          <div class="detail-wrapper-body" style="text-align: justify;">
            <?php echo $row["decs"];?>
          </div>
        </div>           
              </div>
            </div>
          </div>
       
		 <?php 
    endwhile;
    ?>   

<?php
include_once("footer.php");
?>