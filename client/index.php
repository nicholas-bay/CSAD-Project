<?php 
  session_start();
  $_SESSION['username'] = 'User';
  $_SESSION['pointer'] = NULL;
  $_SESSION['product_count'] = array();
  $_SESSION['login_valid'] = "";
  $_SESSION['userstate'] = NULL;
  echo '<script>sessionStorage.clear(); count = 0;</script>';
  header('Location: home.php');
?>