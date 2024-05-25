<?php
 include('model.php'); 
if(isset($_SESSION['eid']))
{
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
   
<!-- ======================= End Navigation ===================== --> 

<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Profile</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i> Profile</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ================ Profile Settings ======================= -->
<div style="width:80%; margin-left:10%; margin-top: 3%; margin-bottom: 2%;">
  <form class="c-form" action="" method="POST" enctype="multipart/form-data">
      <div class="box">
        <div class="box-body">
          <div class="row">
           <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Full Name</label>
              <input type="text" class="form-control" placeholder="Full Name" name="name" required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Gender</label>
           <select class="wide form-control" name="gender" required="">
             <option disabled="" data-display="Gender">Show All</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Date of Birth</label>
              <input type="Date" class="form-control" name="dob" placeholder="Date of Birth" required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Address</label>
              <input type="text" class="form-control" name="address" placeholder="Address" required="">
            </div>
          
          <div class="col-md-4 col-sm-6 col-xs-12">
              <label>State</label>
              <input type="text" class="form-control" name="state" placeholder="State" required="">
            </div>
          
          <div class="col-md-4 col-sm-6 col-xs-12">
              <label>District</label>
           <select class="wide form-control" name="district" required="">
             <option data-display="District" disabled="">Show All</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Sabarkantha">Sabarkantha</option>
              </select>
            </div>
           <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
             <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Mobile No</label>
              <input type="phone" class="form-control" name="mobile" placeholder="Mobile No" required="">
            </div> 
          <div class="col-md-6 col-sm-6 col-xs-12" style="width:33%">
        <label>Profile Image</label>
        <div class="custom-file-upload">
        <input type="file" required="" id="file" accept="image/png, image/jpeg" name="image" multiple />
        </div>
      </div>
     <div class="col-md-6 col-sm-6 col-xs-12"style="width:33%">
        <label>Add Resume</label>
        <div class="custom-file-upload">
        <input type="file" required="" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" id="file" name="resume" multiple />
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12"style="width:33%">
        <label>Add Reference</label>
        <div class="custom-file-upload">
        <input type="file" id="file" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="reference" multiple />

        </div> </div>            
        </div>
        </div>
      </div>
      
      <div class="text-center">
        <button type="submit" class="btn btn-m theme-btn full-width" name="submit">Submit</button>
      </div>
          </div>
        </div>
      </div>
    </div>  

<?php
include_once("footer.php");
?>