<?php
session_start();
include('../config/dbconfig.php');
$shout = mysqli_real_escape_string($conn, $_POST['shout']);
$author = $_SESSION['myuser'];
if(isset($_SESSION['stafflevel']) == true) {
  $staff = $_SESSION['stafflevel'];
}else{
  $staff = 0;
}
$date = time();

$sql = "INSERT INTO shouts (content, author, staff, unixdate)
VALUES ('$shout', '$author', $staff, $date)";

if(mysqli_query($conn, $sql)) {
  header('location: ' . $_SERVER['HTTP_REFERER']);
}else{
  echo "Error<br>" . mysqli_error($conn);
}
?>
