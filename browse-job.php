<?php
 include('model.php'); 
if(isset($_SESSION['eid']))
{
    $eid = $_SESSION['eid'];    
            //hostname/username/pass/db_name
   
    $conn=new mysqli('localhost','root','','test');
              
      if(isset($_POST['valueToSearch']) OR isset($_POST['city']) OR isset($_POST['category']))
      {
         $valueToSearch =$_POST['valueToSearch'];
         $city = $_POST['city'];
         $category = $_POST['category'];
         $axyz = "SELECT * FROM p_job WHERE (CONCAT(title, c_name,category,decs,experience,j_type,email ,phone_no ,address,city) LIKE '%".$category."%".$valueToSearch."%".$city."')   ";
        //$xyz = "SELECT * FROM p_job WHERE city LIKE '".$city."'";
          $result =mysqli_query($conn, $axyz);
      }else{
        $xyz = "SELECT * FROM p_job";
        $result =mysqli_query($conn, $xyz);
      }  
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
      <h2>Search Job</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i> Search Job</p>
       
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

    <!-- End Row --> 
    <form action="browse-job.php" method="POST">
        <fieldset class="utf_home_form_one">
          <div class="col-md-4 col-sm-4 padd-0" style="padding-left: 7%; width: 65vh  ;">
            <input type="text" class="form-control br-1" name="valueToSearch" placeholder="Search Keywords..." />
          </div>
          <div class="col-md-3 col-sm-3 padd-0" style="padding-left: 2%">
            <select class="wide form-control br-1" name="city">
              <option  data-display="Location">All City</option>
              <option value="Ahmedabad">Ahmedabad</option>
              <option value="Himmatnagar">Himmatnagar</option>
          
            </select>
          </div>
          <div class="col-md-3 col-sm-3 padd-0" style="padding-left: 2%">
            <select class="wide form-control" name="category">
               <option data-display="Category">Show All</option>
              <option value="Software Developer">Software Developer</option>
              <option value="Java Developer">Java Developer</option>
              <option value="Software Engineer">Software Engineer</option>
              <option value="Web Developer">Web Developer</option>
              <option value="PHP Developer">PHP Developer</option>
              <option value="Python Developer">Python Developer</option>
              <option value="Front end Developer">Front end Developer</option>
              <option value="Associate Developer">Associate Developer</option>
              <option value="Back end Developer">Back end Developer</option>
              <option value="XML Developer">XML Developer</option>
              <option value=".NET Developer">.NET Developer</option>              
              <option value="Marketting Developer">Marketting Developer</option>
            </select>
          </div>
      
          <div class="col-md-2 col-sm-2 padd-0 m-clear" style="padding-left: 5%">
           <button type="submit" class="btn theme-btn cl-white seub-btn" name="search" value="Filter">Search</button>
          </div>
        
        </div>

        </fieldset>
      </form>
  </div>
</section>

      <!-- Start Job List -->
      <div class="col-md-9 col-sm-7" style="padding-left: 20%;">
        <div class="row mrg-bot-20">
          <div class="col-md-4 col-sm-12 col-xs-12 browse_job_tlt">
            <h4 class="job_vacancie"> Jobs &amp; Vacancies</h4>
          </div>
        </div>
       
          <!-- while($rows=$result->fetch_assoc()) -->
          <?php   // LOOP TILL END OF DATA 
               while($row = mysqli_fetch_array($result)):
          ?>
        <!-- Single Verticle job -->
        <div class="job-verticle-list">
          <div class="vertical-job-card">
            <div class="vertical-job-header">
              <div class="vrt-job-cmp-logo"> <a href="#"><img src="<?php echo $row["logo"];?>"  class="img-responsive"   alt="" /></a> </div>
              <h4><a href="job-detail.php"><?php echo $row['c_name']; ?></a></h4>
              <span class="com-tagline"><?php echo $row['category']; ?> </span> <span class="pull-right vacancy-no">No. <span class="v-count"><?php echo $i++; ?></span></span> 
      </div>
            <div class="vertical-job-body">
              <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                  <ul class="can-skils">
                    <li><strong>Job Title: </strong><?php echo $row['title']; ?></li>
                    <li><strong>Job Type: </strong><?php echo $row['j_type']; ?></li>
                    <li><strong>Description: </strong> <div><?php echo $row['decs']; ?> </div> </li>
                    <li><strong>Experience: </strong><?php echo $row['experience']; ?></li>
                    <li><strong>Location: </strong><?php echo $row['city']; ?></li>
                  </ul>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="vrt-job-act"><form action="profile-display.php" method="post" >
                   <a href="profile-display.php?vid=<?php echo $row["id"];?>&regiid=<?php echo $row["regiid"];?>"class="btn-job theme-btn job-apply">Apply</a></form><form action="job-detail.php" method="post" >
                   <a href="job-detail.php?vid=<?php echo $row["id"];?>"class="btn-job light-gray-btn">View Job</a></form> </div><?php //echo $id; ?>
                </div>
              </div>
            </div>            
          </div>
        </div>
        <?php endwhile;?> 
<?php
include_once("footer.php");
?>