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
if ($id=$_GET["jid"]) { 
 $xyz = "SELECT * FROM p_job WHERE id=$id ";
  $result = $mysqli->query($xyz);
}
?>


<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Approved Job Detail</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i>Details</p>
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
                 <?php 
    endwhile;
    ?>   
<?php
$jid=$_GET["jid"];
// echo $jid;
// $vid=$_GET["eid"];
$eid=$_GET["eid"];
// echo "$eid";
$xyaz = "SELECT * FROM accept WHERE jid=$jid AND vid='$eid' ";
  $reesult = $mysqli->query($xyaz);
  ?>

               <div class="col-md-4 col-sm-5">                         
          <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Approvel Description </h4>
          </div>
          <?php   // LOOP TILL END OF DATA 
                while($rows = mysqli_fetch_array($reesult)):
          ?>
          <div class="detail-wrapper-body" style="text-align: justify;">
            <?php echo $rows["detail"];?>
               
          </div>
        </div>  

        
              </div>
              <div class="col-md-8 user_job_detail " style="">
          <div class="col-sm-12 mrg-bot-10"> <label>New Email:-</label>&nbsp <span class="full-type"><?php echo $rows["email"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>New Phone Number :-</label>&nbsp<span class="full-type"><?php echo $rows["phone"];?></span></div>
          </div>
            <a target="_blank"  href="https://api.whatsapp.com/send?phone=+91 <?php echo $rows["phone"];?>&text=Hello%20 <?php echo $rows["phone"];?>%20%20 You Have already approved my job application in official platform WORKIFY. %20%20"><img src="assets/img/wt.jpeg" class='pulse' style="height: 80px; width: 80px; position: fixed;border-radius: 35px; bottom: 0; margin: 0 0 10px 10px; z-index: 9999; float: right;" /></a>
            </div>
            <?php 
    endwhile;
    ?>   
</div>
</section>
          </div>

       
<?php
include_once("footer.php");
?>