<?php
session_start();
include('dbcon.php');
$session_id = $_SESSION['id'];
mysqli_query($conn,"update user_log set logout_Date = NOW() where user_id = '$session_id' ")or die(mysqli_error($conn));
ob_start();
session_destroy();
header('location:index.php'); 

ob_end_flush();
?>