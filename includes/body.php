<?php
if(isset($_GET['p']) == false) {
  include('pages/home.php');
}else{
  $page = $_GET['p'];

  switch($page) {
    case"home":
    include('pages/home.php');
    break;

    case"gallery":
    include('pages/gallery.php');
    break;

    case"contact":
    include('pages/contact.php');
    break;

    case"userpanel":
    include('pages/userpanel.php');
    break;
  }
}

?>
