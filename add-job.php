<?php
 include('model.php'); 
if(isset($_SESSION['id']))
{
  }else
{
  echo "<script>
  window.location='loginemployer.php';
  </script>";
}

?>
<?php 
  include_once("header.php");
?>
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Add Job</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Post Job</p>
    </div>
  </div>
</div>

<!-- ======================= Create Job ===================== -->
<section class="create-job padd-top-80 padd-bot-80">
  <div class="container" data-aos="fade-up">
    <form class="c-form" action="" method="POST" enctype="multipart/form-data">
      <div class="box">
        <div class="box-header">
          <h4>Job Information</h4>
        </div>
        <div class="box-body">
          <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Job Title</label>
              <input type="text" class="form-control" name="title" placeholder="Job Title" required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Company Name</label>
              <input type="text" class="form-control" name="c_name" placeholder="Company Name" required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Category</label>
              <select class="wide form-control" name="category" required="">
               <option disabled="" data-display="Category">Show All</option>
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
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Description</label>
              <input type="text" class="form-control" name="desc" placeholder="Description" required="">
            </div>
            
            
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Experience</label>
              <select class="wide form-control" name="experience" required="">
              
                <option Value="Undefine">Undefine</option>
                <option Value="6 months">6 months</option>
                <option value="1 Year">1 Year</option>
                <option value="2 Year">2 Year</option>
                <option value="3 Year">3 Year</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Company Logo</label>
              <div class="custom-file-upload">
                <input type="file" id="file" accept="image/png, image/jpeg" required="" name="logo" multiple />
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Job Type</label>
              <select class="wide form-control" name="j_type" required="">
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Freelancer">Freelancer</option>
              </select>
            </div>
          
           
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Phone Number</label>
              <input type="text" class="form-control" name="phone_no" placeholder="Phone Number" required="">
            </div>
           
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Address</label>
              <input type="text" class="form-control" name="address" placeholder="Address" required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>City</label>
              <select class="wide form-control" name="city" required="">
                 <option disabled="" data-display="Location">All City</option>
                 <option value="Ahmedabad">Ahmedabad</option>
                 <option value="Himmatnagar">Himmatnagar</option>
          
              </select>
            </div>            
        </div>
        </div>
      </div>
      
      <div class="text-center">
        <button type="submit" class="btn btn-m theme-btn full-width" name="submit" value="submit">Submit</button>
      </div>
          </div>
        </div>
      </div>
<!--    <?php  
// echo '<script type="text/javascript">';
// echo ' alert("Job Add Sucessfully")';  //not showing an alert box.
// echo '</script>';
?>
   --> 
     
<!-- ====================== End Create Job ================ --> 

<?php
include_once("footer.php");
?>