<?php
$link = mysqli_connect("localhost", "root", "", "test");
 include('model.php'); 
$eid=$_SESSION['eid'];
$vid=$_GET["vid"] ;
if ($id=$_GET["vid"] && $empid=$_GET["empid"]) { //delete an feedback
	mysqli_query($link,"INSERT INTO applied (applier_id,job_id,employer_id) VALUES ($eid,$vid,$empid)");

echo "<script type='text/javascript'>
			            alert('Applied Sucessfully');
	window.location='browse-job.php';</script>" ;
}

?>