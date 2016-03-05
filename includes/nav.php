<?php
if(isset($_GET['p']) == true) {
$page = $_GET['p'];
}else{
  $page = "home";
}
?>
<div id="nav">
  <ul>
    <?php
    if($page == "home") {
      echo "<li><a href='?p=home' class='active'>Home</a></li>";
    }else{
      echo "<li><a href='?p=home'>Home</a></li>";
    }

    if($page == "gallery") {
      echo "<li><a href='?p=gallery' class='active'>Gallery</a></li>";
    }else{
      echo "<li><a href='?p=gallery'>Gallery</a></li>";
    }

    if($page == "contact") {
      echo "<li><a href='?p=contact' class='active'>Contact</a></li>";
    }else{
      echo "<li><a href='?p=contact'>Contact</a></li>";
    }
    ?>
    <li><a href='functions/logout.php'>Logout</a></li>
  </ul>
</div>
