<div id="loginform">
  <form action="functions/login.php" method="POST" autocomplete="off">
    <label for="user">Username</label>
    <input type="text" id="user" name="user">
    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass" readonly
     onfocus="$(this).removeAttr('readonly');"/>
    <input type="submit" id="normlogin" value="Log In" onclick='this.form.action="functions/login.php";'>
    <input type="submit" id="guestlogin" value="Login as Guest" onclick='this.form.action="functions/guestlogin.php";'>
  </form>
</div>
<footer>
  <div id="links">
    <a href="#"><img src="http://80.217.71.149/logos-social-media/facebook.png"></a>
    <a href="#"><img src="http://80.217.71.149/logos-social-media/twitter.png"></a>
    <a href="#"><img src="http://80.217.71.149/logos-social-media/google+.png"></a>
    <a href="#"><img src="http://80.217.71.149/logos-social-media/linkedin.png"></a>
    <a href="#"><img src="http://80.217.71.149/logos-social-media/youtube.png"></a>
  </div>
</footer>
