 <?php
 include('model.php'); 
if(isset($_SESSION['id']))
{
   $conn=new mysqli('localhost','root','','test');      

    $eid = $_SESSION['id'];  

    // echo "$eid";
    $vid=$_GET["vid"];
    // echo "$vid";
    $jid=$_GET["jid"];
    // echo "$jid";

    // echo "$vid";
    			if (isset($_REQUEST['submit'])) {
    				$reas=$_POST['detail'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
    				$sql = "INSERT INTO accept (detail,email,phone,eid,jid,vid) VALUES ('$reas','$email','$phone','$eid','$jid','$vid');";
				    $succ=mysqli_query($conn,$sql);
      				if($succ) {
			            echo "<script>
			            alert('Job Approved');
			            window.location='manageresume.php';  
			            </script>";
						mysqli_query($conn,"delete from applied where applier_id=$vid AND job_id=$jid ");
								        }else{
			         echo "<script>
				          alert('Job Approving Failed');
				          </script>";
			   		}
				}

}else{
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
      <h2>Approve Job</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i>Approve</p>
    </div>
  </div>
</div>
<section class="padd-top-80 padd-bot-70" style="margin-right: 80px">
  <div class="container">
    <div class="col-md-6 col-sm-6">
      <div class="row" >
		<form class="mrg-bot-40" method="post" action="">
			<div class="col-md-12 col-sm-12">
			  <label>Any Detail:</label>
			  <textarea class="form-control height-120" name="detail" required="" placeholder="Enter a Detail"></textarea>
        <label>Email:</label>
        <input class="form-control " type="email" name="email" placeholder="Email to contact" >
        <label>phone:</label>
        <input class="form-control" required="" type="phone" name="phone" placeholder="phone to contact" >
			</div>
			<div class="col-md-12 col-sm-12">
			  <button class="btn theme-btn" name="submit">Submit</button>
			</div>
		</form>
	  </div>
    </div>
    <div class="col-md-6 col-sm-6"><img src="assets/img/slider_bg.jpg" width="129%" height="50%" style="opacity: 0.7; border-radius: 2%;">
    </div>
  </div>

</section>

<!-- storring data from javascript to php -->


<?php
include_once("footer.php");
?>