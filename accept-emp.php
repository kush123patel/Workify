
<?php
 include('model.php'); 
if(isset($_SESSION['id']))
{ 
  $eid=$_SESSION['id'];
  // echo "$eid";
$mysqli = new mysqli("localhost","root","", "test");
   // $conn=new mysqli('localhost','root','','test');

  $feed = "SELECT * FROM accept WHERE eid = '$eid' ;";
  $logresult = $mysqli->query($feed);

  $fee = "SELECT * FROM accept WHERE eid = '$eid' ;";
  $res = $mysqli->query($fee);
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
<?php  while($row = mysqli_fetch_array($logresult)):
          ?>
          <?php $i++; ?>
              <?php endwhile;?>
  <div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Approved Resumes</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i>Resume Approved</p>
    </div>
  </div>
          <div class="col-md-6 col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center">
                              <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-user-line"></i></div>
                              <div class="text-left ml-3">                                 
                                 <h2 class="mb-0"><span class="counter">
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
                              <h4 class="card-title" style="margin-left: 42%;" >Approved Jobs &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Resume Approved:- <?php echo $i ; ?></h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              
                           </div>
                        </div>

                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="table mb-0 table-borderless "style="text-align: left">
                                 <thead>
                                    <tr>
                                       <th scope="col">Sr.No.</th>
                                       <th scope="col">Job Title</th>
                                       <th scope="col">Company Name</th>
                                       <th scope="col">Job Category</th>
                                       <th scope="col">Email </th>  
                                       <th scope="col">Job Type</th> 
                                       <th scope="col">Mobile No</th>
                                    </tr>
                                 </thead>

                                 <tbody>

                                   <?php   // LOOP TILL END OF DATA 
                while($row = mysqli_fetch_array($res)):
          ?>
                <?php
                    $pid=$row["jid"];
                    $feeed = "SELECT * FROM p_job WHERE id = '$pid' ;";
                    $aresult = $mysqli->query($feeed);
                ?>
                                     <?php   // LOOP TILL END OF DATA 
                while($row = mysqli_fetch_array($aresult)):
          ?>
                                    <tr>
                                       <td><?php echo $f++;?></td>
                                       <td><?php echo $row["title"];?></td>
                                       <td><?php echo $row["c_name"];?></td>
                                       <td><?php echo $row["category"];?></td>
                                       <td><?php echo $row["email"];?></td>
                                       <td><?php echo $row["j_type"];?></td>
                                       <td><?php echo $row["phone_no"];?></td>
                                       <td><form action="job-detail.php" method="post">
                   <a class="btn btn-info" href="approve.php?jid=<?php echo $row["id"];?>&eid=<?php echo $eid;?>&vid=<?php $vid;?>"class="btn-job light-gray-btn">View Details</a></form></td>
                                  <!--      <td><form action="job-detail.php" method="post">
                   <a class="btn btn-success" href="view_job.php?vid=<?php echo $row["id"];?>"class="btn-job light-gray-btn">View Job</a></form></td> -->
                                                                                       
                                    </tr>
                                                  <?php endwhile; ?>
<?php endwhile; ?>
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