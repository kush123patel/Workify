<?php
 include('model.php'); 
if(isset($_SESSION['id']))
{	
  $id=$_SESSION['id'];
  echo $id;
$mysqli = new mysqli("localhost","root","", "test");
   // $conn=new mysqli('localhost','root','','test');
  //$feed = "SELECT * FROM applied WHERE employer_id = $id ;";
  $feed = "SELECT * FROM applied WHERE employer_id = '23' ;";

  // $logresult = mysqli_query($conn, $feed);
  $logresult = $mysqli->query($feed);
  $i=0;

       echo '<table>';
                                   echo "<tr>"; 
                                      echo '<th>Sr.No.</th>';
                                      echo '<th>Name</th>';
                                      echo '<th>Gender</th>';
                                      echo '<th>District</th>';
                                      echo '<th>State</th>';
                                      echo '<th>Email</th>';
                                      echo '<th>Mobile</th>';                                                
                                   echo "</tr>";
                          // LOOP TILL END OF DATA 
               while($row = mysqli_fetch_array($logresult)){
                $applier_id=$row["applier_id"];
                $sql = "SELECT * FROM `profile` WHERE regiid='$applier_id' ";
                $result = $mysqli->query($sql);
                $i++;
                 $f=1;                                              // LOOP TILL END OF DATA 
               while($rows = mysqli_fetch_array($result))
                {
                               

                                   echo "<tr>"; 
                                      echo '<td>'.  $f++ .'</td>';
                                      echo '<td>'.  $rows['name'] .'</td>';
                                      echo '<td>'.  $rows['gender'] .'</td>';
                                      echo '<td>'.  $rows['district'] .'</td>';
                                      echo '<td>'.  $rows['state'] .'</td>';
                                      echo '<td>'.  $rows['email'] .'</td>';
                                      echo '<td>'.  $rows['mobile'] .'</td>';                                                
                                   echo "</tr>";
                                   echo '</table>';
               }
               }
   

}else
{
  echo "<script>
  window.location='loginemployer.php';
  </script>";
}
?>
