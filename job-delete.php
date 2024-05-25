<?php
$link = mysqli_connect("localhost", "root", "", "test");
if ($id=$_GET["vid"]) { //delete an feedback
	mysqli_query($link,"delete from p_job where id=$id");

echo "<script type='text/javascript'>
			            alert('Job Removed Sucessfully');
	window.location='managejob.php';</script>" ;
}

?>