<!DOCTYPE html>
<html>
<head>
  <?php
    if(isset($_SESSION['myuser']) == true) {
      echo "<link rel='stylesheet' type='text/css' href='css/main.css'>";
    }else{
      echo "<link rel='stylesheet' type='text/css' href='css/loginstyle.css'>";
    }
  ?>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="author" content="Tim Levinsson">
</head>
<body>
  <header><div id="headtitle">MediaDealers</div></header>
  <div id="wrapper">
