<?php
  include 'config.php';
  session_start();
  $name = $description = $price = $count = '';

  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $conn = new mysqli($host, $user, $password, $db);
    if (isset($_POST['addupdate'])) {
      $name = $_POST['product-name'];
      $description = $_POST['product-description'];
      $price = $_POST['product-price'];
      $count = $_POST['product-count'];
      $sql = "
      INSERT INTO $tableproduct
      VALUES ('$name', '$description', $price, $count, NULL)
      ON DUPLICATE KEY UPDATE
      description = '$description', price = $price, count = $count, image = NULL 
      ";
      $conn->query($sql);
    }
    else if (isset($_POST['delete'])) {
      $name = $_POST['product-name-delete'];
      $sql = " DELETE FROM $tableproduct WHERE name = $name; ";
      $conn->query($sql);
    }
    header('Location: ../client/sellerhome.php');
  }
?>
