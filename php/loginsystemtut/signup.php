<?php
  require "header.php";
?>

  <main>
  <a class="navbar-brand">Signup</a>
    <form action="includes/signup.inc.php" method="post">
      <center><input type="text" name="uid" placeholder="Username"></center>
      <center><input type="text" name="mail" placeholder="Email"></center>
      <center><input type="password" name="pwd" placeholder="Password"></center>
      <center><input type="password" name="pwd-repeat" placeholder="Repeat password"></center>
      <center><button type="submit" name="signup-submit">Signup</button></center>
    </form>
  </main>

<?php
require "footer.php";
?>
