<?php
 include('model.php'); 
if(isset($_SESSION['id']))
{	
	$id=$_SESSION['id'];
$mysqli = new mysqli("localhost","root","", "test");
	 // $conn=new mysqli('localhost','root','','test');
	$feed = "SELECT * FROM p_job WHERE regiid= '$id' ;";
 	// $logresult = mysqli_query($conn, $feed);
  $logresult = $mysqli->query($feed);

 	$sql = "SELECT * FROM `p_job` WHERE regiid='$id' ";
 	// $result = $conn->query($sql);
  $result = $mysqli->query($sql);

    $f=1;
	$i=0;

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
      <h2>Manage  Jobs</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i>My Jobs</p>
    </div>
  </div>
          <div class="col-md-6 col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center">
                              <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-user-line"></i></div>
                              <div class="text-left ml-3">                                 
                                 <h2 class="mb-0"><span class="counter"><?php  while($row = mysqli_fetch_array($logresult)):
          ?>
          <?php $i++; ?>
              <?php endwhile;?>
             </span></h2>
                                 <h5 class=""></h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
         <!-- Page Content  -->
                               
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                           	<br>
                              <h4 class="card-title" style="margin-left: 44%;" >Jobs&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Posted Jobs:- <?php echo $i; ?></h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              
                           </div>
                        </div>

                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Sr.No.</th>
                                       <th scope="col">Title</th>
                                       <th scope="col">Company</th>
                                       <th scope="col">Category</th>
                                       <th scope="col">Experience </th>  
                                       <th scope="col">Job Type</th> 
                                       <th scope="col">Email </th>
                                       <th scope="col">Phone No </th>                                                           

                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php   // LOOP TILL END OF DATA 
               while($rows = mysqli_fetch_array($result)):
          ?>
                                    <tr>
                                       <td><?php echo $f++; ?></td>
                                       <td><?php echo $rows['title']; ?></td>
                                       <td><?php echo $rows['c_name']; ?></td>
                                       <td><?php echo $rows['category']; ?></td>
                                       <td><?php echo $rows['experience']; ?></td>
                                       <td><?php echo $rows['j_type']; ?></td>
                                       <td><?php echo $rows['email']; ?></td>
                                       <td><?php echo $rows['phone_no']; ?></td>                                  
                                       <td><form action="job-detail.php" method="post">
                   <a href="view_job.php?vid=<?php echo $rows["id"];?>"class="btn-job light-gray-btn">View Job</a></form></td>
                                       <td><form action="job-detail.php" method="post">
                   <a href="job-edit.php?vid=<?php echo $rows["id"];?>"class="btn-job light-gray-btn">Edit Job</a></form></td>
                                       <td><form action="job-edit.php" method="post">
                   <a href="job-delete.php?vid=<?php echo $rows["id"];?>"class="btn-job light-gray-btn">Delete Job</a></form></td>
                                        						
                                    </tr>

                                    <?php endwhile;?>

                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div style="height: 80vh;">
                 
               </div>
<?php
include_once("footer.php");
?>