<?php
 include('model.php'); 
session_destroy(); //destroy the session
header("location:signup.php"); //to redirect back to "index.php" after logging out
exit();
?>