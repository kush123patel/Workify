<?php
    $link=new mysqli('localhost','root','','test');            


$id=$_GET["vid"];
$title="";
$c_name="";
$category="";
$decs="";
$experience="";
$logo="";
$j_type="";
$email="";
$phone_no="";
$address="";
$city="";


$res=mysqli_query($link,"select * from p_job where id=$id");
while($row=mysqli_fetch_array($res))
{
  $title=$row["title"];
  $c_name=$row["c_name"];
  $category=$row["category"];
  $decs=$row["decs"];
  $experience=$row["experience"];
  $logo=$row["logo"];
  $j_type=$row["j_type"];
  $email=$row["email"];
  $phone_no=$row["phone_no"];
  $address=$row["address"];
  $city=$row["city"];  
}
?>
<?php 
  include_once("header.php");
?>
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Edit Job</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>Edit Job</p>
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
              <input type="text" class="form-control" name="title" placeholder="Job Title" value="<?php echo $title; ?>"  required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Company Name</label>
              <input type="text" class="form-control" name="c_name" placeholder="Company Name"  value="<?php echo $c_name; ?> "required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Category</label>
              <select class="wide form-control" name="category"  value="<?php echo $category; ?>" required="">
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
              <input type="text" class="form-control" name="desc" placeholder="Description"  value="<?php echo $decs; ?>" required="">
            </div>
            
            
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Experience</label>
              <select class="wide form-control" name="experience"  value="<?php echo $experience; ?>" required="">
              
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
                <input type="file" id="file" accept="image/png, image/jpeg" required="" name="logo" value="<?php echo $logo; ?>" multiple />
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>Job Type</label>
              <select class="wide form-control" name="j_type"  value="<?php echo $j_type; ?>" required="">
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Freelancer">Freelancer</option>
              </select>
            </div>
          
           
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email"  value="<?php echo $email; ?>" required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Phone Number</label>
              <input type="text" class="form-control" name="phone_no" placeholder="Phone Number"  value="<?php echo $phone_no; ?>" required="">
            </div>
           
            <div class="col-md-4 col-sm-6 col-xs-12">
              <label>Address</label>
              <input type="text" class="form-control" name="address" placeholder="Address"  value="<?php echo $email; ?>" required="">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 m-clear">
              <label>City</label>
              <select class="wide form-control" name="city"  value="<?php echo $city; ?>" required="">
                 <option disabled="" data-display="Location">All City</option>
                 <option value="Ahmedabad">Ahmedabad</option>
                 <option value="Himmatnagar">Himmatnagar</option>
          
              </select>
            </div>            
        </div>
        </div>
      </div>
      
      <div class="text-center">
        <button type="submit" class="btn btn-m theme-btn full-width" name="update">Update</button>
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




<!-- 
$id=$_GET["vid"];
$title="";
$c_name="";
$category="";
$decs="";
$experience="";
$logo="";
$j_type="";
$email="";
$phone_no="";
$address="";
$city=""; -->
 <?php 
    // $link=new mysqli('localhost','root','','test');            

if(isset($_POST["update"]))
{
   $tm=md5(time());
  $fnm=$_FILES["logo"]["name"];
  if($fnm=="")
  {
     $sql="UPDATE p_job set title='$_POST[titl]',c_name='$_POST[c_nam]',category='$_POST[category]',decs='$_POST[decs]',experience='$_POST[experience]',logo='$dst1',j_type='$_POST[j_type]',email='$_POST[email]',phone_no='$_POST[phone_no]',address='$_POST[address],city='$_POST[city]'where id=$id";
    $xyz=mysqli_query($link, $sql);
  }
  else
  {
    $dst="./assets/img/".$tm.$fnm;        
    $dst1="assets/img/".$tm.$fnm;
    move_uploaded_file($_FILES["name"]["tmp_name"],$dst);
    // $sql = "UPDATE p_job (regiid,title, c_name, category, decs, experience, logo, j_type, email, phone_no, address, city) VALUES ('$id','$title', '$c_name', '$category', '$desc', '$experience', '$dst1', '$j_type', '$email', '$phone_no', '$address', '$city');"; 
   $sql="UPDATE p_job set title='$_POST[titl]',c_name='$_POST[c_nam]',category='$_POST[category]',decs='$_POST[decs]',experience='$_POST[experience]',logo='$dst1',j_type='$_POST[j_type]',email='$_POST[email]',phone_no='$_POST[phone_no]',address='$_POST[address],city='$_POST[city]'where id=$id";
    $xyz=mysqli_query($link, $sql);

  }

  ?>
  <script type="text/javascript">
   window.location="index.php";
 </script>
  <?php
 
}
 ?>
