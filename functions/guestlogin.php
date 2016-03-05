<?php
session_start();
$length = 8;
$randomString = substr(str_shuffle("0123456789"), 0, $length);

$_SESSION['myuser'] = "Guest$randomString";

header('location: ../');
?>
