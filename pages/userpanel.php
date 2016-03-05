<?php
if(isset($_SESSION['stafflevel']) == true) {
  $stafflevel = $_SESSION['stafflevel'] . " (<a href='#'>ACP</a>)";
}else{
  $stafflevel = "user";
}
?>
<div id="content">
<table border="1">
  <tr>
    <td>Username</td>
    <td>Email</td>
    <td>Stafflevel</td>
  </tr>
<?php
  $sql = "SELECT * FROM accounts WHERE username = '" . $_SESSION['myuser'] . "'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $_SESSION['myuser'] . "</td>";
      echo "<td>tim-levinsson@hotmail.com</td>";
      echo "<td>$stafflevel</td>";
      echo "</tr>";
    }
  }
?>
</table>
</div>
