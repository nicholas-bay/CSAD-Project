<?php 
  session_start();
  $_SESSION['username'] = 'User';
  $_SESSION['pointer'] = NULL;
  $_SESSION['product_count'] = 0;
  $_SESSION['login_valid'] = "";
  echo '<script>sessionStorage.clear(); count = 0;</script>';
  header('Location: home.php');
?>