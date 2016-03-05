<div id="side-content">
  <form action="functions/shoutbox.php" method="POST">
    <textarea name="shout" placeholder="Ask me Anything"></textarea>
    <input type="submit" value="Send">
  </form>
  <?php
    $sql = "SELECT * FROM shouts ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<div id='shoutcontent'>";
        echo "<hr>";
        if($row['staff'] > 0) {
          echo "<div id='shouthead'><div id='author'><font color='red'>" . $row['author'] . "</font>(Admin)</div><div id='date'>" . date("Y-m-d", $row['unixdate']) . "</div></div>";
        }else{
          echo "<div id='shouthead'><div id='author'><font color='50ACFC'>" . $row['author'] . "</font></div><div id='date'>" . date("Y-m-d", $row['unixdate']) . "</div></div>";
        }
        echo "<div class='clear'></div>";
        echo "<div id='shoutmessage'>" . nl2br($row['content']) . "</div>";
        echo "</div>";
      }
    }
  ?>
</div>
