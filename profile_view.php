<?php
 include('model.php'); 
if(1==1)
{
    // $eid = $_SESSION['eid']; 
    $viid=$_GET['vid'];
    // $id = $_SESSION['id'];    

    // echo $eid;
            //hostname/username/pass/db_name
   
    $conn=new mysqli('localhost','root','','test');      
     $xyz = "SELECT * FROM profile WHERE id = '$viid' ";
          $rresult =mysqli_query($conn, $xyz);      
         $axyz = "SELECT * FROM profile WHERE id = '$viid' ";
          $result =mysqli_query($conn, $axyz);
            $chk=$result->num_rows; 
       if ($result) {
             $fetch=$result->fetch_object();
				          $id=$fetch->regiid;  	
           }
            
 	//  if($id==$eid)
  // {
  //   // echo "<script>
  //   //               window.location='index.php';  
  //   //               </script>";
  // }else
  // {
  //   echo "<script>
  //                 window.location='profile-settings.php';  
  //                 </script>";
  // }
      
  }else
{
  echo "<script>
  window.location='loginjobseeker.php';
  </script>";
}
?>
<?php 
 include_once("header.php");
 ?>
<?php 
$i=1;
 ?>

<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Seeker Profile</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i>Profile</p>
    </div>
  </div>
</div>
<!-- <div class="vrt-job-act" style="margin-left:80%;"> <a href="profile-display.php" class="btn-job theme-btn job-apply">Apply Now</a>		</div> -->
<!-- ======================= End Page Title ===================== --> 

<!-- ====================== Start Job Detail 2 ================ -->
<?php   // LOOP TILL END OF DATA 
                while($row = mysqli_fetch_array($rresult)):
          ?>
<section class="padd-top-80 padd-bot-60">
  <div class="container"> 
    <!-- row -->
    
    <div class="row" >
      <div class="col-md-12 col-sm-7">
        <div class="detail-wrapper">
          <div class="detail-wrapper-body">
			<div class="row">
				<div class="col-md-4 text-center user_profile_img"> <img src="<?php echo $row["image"];?>" width="50%" height="50%"  alt=""/>
					
				  <div class="text-center">
					<!-- <button type="button" data-toggle="modal" data-target="#signin" class="btn-job theme-btn job-apply">Apply Now</button> -->
				  </div>
				</div>
				<div class="col-md-8 user_job_detail">
          <div class="col-sm-12 mrg-bot-10"> <label>Name:-</label>&nbsp <span class="full-type"><?php echo $row["name"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Gender:-</label>&nbsp <span class="full-type"><?php echo $row["gender"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Date Of Birth:-</label>&nbsp <span class="full-type"><?php echo $row["dob"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Email:-</label>&nbsp <span class="full-type"><?php echo $row["email"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Phone No:-</label>&nbsp <span class="full-type"><?php echo $row["mobile"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Address:-</label>&nbsp <span class="full-type"><?php echo $row["address"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>City:-</label>&nbsp <span class="full-type"><?php echo $row["district"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>State:-</label>&nbsp <span class="full-type"><?php echo $row["state"];?></span></div>
			  
          </div>
        </div>

        </div>
       
		
      </div>
      
      <!-- Sidebar -->
      
            </div>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=+91 <?php echo $row["mobile"];?>&text=Hello%20 <?php echo $row["name"];?> %20%20"><img src="assets/img/wt.jpeg" class='pulse' style="height: 80px; width: 80px; position: fixed;border-radius: 35px; bottom: 0; margin: 0 0 10px 10px; z-index: 9999; float: right;" /></a>
       
          </div>
          
		 <?php 
    endwhile;
    ?>   
    

<?php
include_once("footer.php");
?>