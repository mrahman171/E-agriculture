<?php
  session_start();
  session_destroy();
  unset($_SESSION['uname']);
  //$_SESSION['message'] = "You are now logged out";
  header("location: home.php");
?>
