<?php
session_start();
ob_start();
	include('dbcon.php');
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id'])) {
header("location:index.php?id=error");
}
$session_id = $_SESSION['user_id'];

$user_query = mysqli_query($conn,"select * from users where user_id = '$session_id'")or die(mysqli_error($conn));
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['username'];
ob_end_flush();
?>