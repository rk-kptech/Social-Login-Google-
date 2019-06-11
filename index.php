<?php
	require_once "config.php";
  if(!isset($_SESSION['email']))
  {
    header("location: login.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<body>

<div class="container">
  Hello you are loggedin with email : 
  <?php 
  print_r($_SESSION['email']);?>
</div>
</body>
</html>
