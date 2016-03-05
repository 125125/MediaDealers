<?php
session_start();
include('config/dbconfig.php');
include('includes/head.php');
if(isset($_SESSION['myuser']) == true) {
  include('includes/nav.php');
  include('includes/body.php');
  include('includes/sidecontent.php');
}else{
  include('includes/login.php');
}
include('includes/foot.php');
?>
