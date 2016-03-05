<?php
session_start();
include('../config/dbconfig.php');

function shaenc($username, $password) {
  $username = strtoupper($username);
  $password = strtoupper($password);
  return sha1($username.':'.$password);
}

$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = shaenc($user, $_POST['pass']);

$sql = "SELECT * FROM accounts WHERE username = '$user' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  $_SESSION['myuser'] = $user;
  while($row = mysqli_fetch_assoc($result)) {
    if($row['stafflevel'] >= 1) {
      switch($row['stafflevel']) {
        case"1":
        $_SESSION['stafflevel'] = "Admin";
        break;

        case"2":
        $_SESSION['stafflevel'] = "Owner";
        break;
      }
    }
  }
  header('location: ../');
}else{
  echo "Error:<br>" . mysqli_error($conn);
}
?>
