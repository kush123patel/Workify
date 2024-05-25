<?php
 include('model.php'); 
if(isset($_SESSION['id']))
{
    $eid = $_SESSION['id'];  
    $conn=new mysqli('localhost','root','','test');  

         $axy= "SELECT * FROM regiemp WHERE id = $eid ";
          $rresult =mysqli_query($conn, $axy);          
      
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
      <h2>Employer Profile</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i>Profile</p>
    </div>
  </div>
</div>

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
          <div class="text-center">
          <!-- <button type="button" data-toggle="modal" data-target="#signin" class="btn-job theme-btn job-apply">Apply Now</button> -->
          </div>
        </div>
        <div class="col-md-8 user_job_detail" style="font-size: 20px;">
          <div class="col-sm-12 mrg-bot-10" > <label>Name:-</label>&nbsp <span class="full-type"><?php echo $row["name"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Email:-</label>&nbsp <span class="full-type"><?php echo $row["email"];?></span></div>
          <div class="col-sm-12 mrg-bot-10"> <label>Phone No:-</label>&nbsp <span class="full-type"><?php echo $row["phone"];?></span></div>
         
          </div>
        </div>

        </div>
       
    
      </div>
      
      <!-- Sidebar -->
      
            </div>
          </div>
       
     <?php 
    endwhile;
    ?>   

<?php
include_once("footer.php");
?>