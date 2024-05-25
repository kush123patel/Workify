<?php
$link = mysqli_connect("localhost", "root", "", "test");
if ($id=$_GET["vid"]) { //delete an feedback
	$jid=$_GET["jid"];
	// mysqli_query($link,"delete from p_job where id=$id");
	mysqli_query($link,"delete from applied where applier_id=$id AND job_id=$jid ");
	// $feeed = "DELETE FROM applied WHERE applier_id=$vid AND job_id=$jid;";
    // $aresult = $mysqli->query($feeed);

echo "<script type='text/javascript'>
			            alert('Removed Sucessfully From Applied Jobs');
	window.location='applied_job.php';</script>" ;
}

?>
