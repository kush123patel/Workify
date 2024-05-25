
<?php
 include('model.php'); 
if(isset($_SESSION['id']))
{ 
  $id=$_SESSION['id'];
$mysqli = new mysqli("localhost","root","", "test");
   // $conn=new mysqli('localhost','root','','test');

  $feed = "SELECT * FROM applied WHERE employer_id = '$id' ;";
  $logresult = $mysqli->query($feed);

  $fee = "SELECT * FROM applied WHERE employer_id = '$id' ;";
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
      <h2>Manage Resume</h2>
      <p><a href="index.php" title="Home">Home</a> <i class="ti-angle-double-right"></i>Applied Resume</p>
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
                              <h4 class="card-title" style="margin-left: 42%;" >Applied Resumes &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Resume Submitted:- <?php echo $i ; ?></h4>
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
                                       <th scope="col">Name</th>
                                       <th scope="col">Email</th>
                                       <th scope="col">Gender</th>
                                       <th scope="col">State </th>  
                                       <th scope="col">Address</th> 
                                       <th scope="col">Mobile No</th>
                                    </tr>
                                 </thead>

                                 <tbody>
<?php
                    
                    
                ?>
                                   <?php   // LOOP TILL END OF DATA 
                while($row = mysqli_fetch_array($res)):
          ?>

                <?php
                    $pid=$row["applier_id"];
                    $feeed = "SELECT * FROM applied WHERE applier_id = '$pid' AND employer_id = '$id' ;";
                    $aresult = $mysqli->query($feeed);
                       // LOOP TILL END OF DATA 
                while($row = mysqli_fetch_array($aresult)):
                  $jid=$row["job_id"];
                endwhile; 
                    $feeed = "SELECT * FROM profile WHERE regiid = '$pid' ;";
                    $aresult = $mysqli->query($feeed);
                ?>
                                     <?php   // LOOP TILL END OF DATA 
                while($row = mysqli_fetch_array($aresult)):
          ?>
              
                                    <tr>
                                       <td><?php echo $f++;?></td>
                                       <td><?php echo $row["name"];?></td>
                                       <td><?php echo $row["email"];?></td>
                                       <td><?php echo $row["gender"];?></td>
                                       <td><?php echo $row["district"];?></td>
                                       <td><?php echo $row["address"];?></td>
                                       <td><?php echo $row["mobile"];?></td>
                                       <td><form action="job-detail.php" method="post">
                   <a class="btn btn-info" href="profile_view.php?vid=<?php echo $row["id"];?>"class="btn-job light-gray-btn">View</a></form></td>
                                       <td><form action="job-detail.php" method="post">
                   <a class="btn btn-success" href="accept.php?vid=<?php echo $row["regiid"];?>&jid=<?php echo $jid; ?>"class="btn-job light-gray-btn">Accept</a></form></td>
                                       <td><form action="job-edit.php" method="post">
                   <a class="btn btn-danger" href="reject.php?vid=<?php echo $row["regiid"];?>&jid=<?php echo $jid; ?>"class="btn-job light-gray-btn">Reject</a></form></td>

                                                    
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