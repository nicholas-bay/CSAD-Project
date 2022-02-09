<?php
  include 'config.php';
  session_start();
  $name = '';

  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $conn = new mysqli($host, $user, $password, $db);
    if (isset($_POST['add'])) {
      $name = $_POST['input_name'];
      $image = $_POST['input_image'];
      $count = 0;
      $sql = "
        INSERT INTO $tablecart('username', 'item_name', 'item_image', 'count')
        VALUES (" . $_SESSION['username'] . ", '$name', '$image', '$count')
        ON DUPLICATE KEY UPDATE
        count = $count 
      ";
      if ($conn->query($sql) == TRUE) echo "Successful";
      else echo $conn->error;
      header('Location: ../client/buyerhome.php');
    }
  }
?>