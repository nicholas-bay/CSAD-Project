<?php
  include 'config.php';
  session_start();
  $name = $description = $price = $count = $image = '';

  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $conn = new mysqli($host, $user, $password, $db);
    if (isset($_POST['addupdate'])) {
      $name = $_POST['product-name'];
      $description = $_POST['product-description'];
      $price = $_POST['product-price'];
      $count = $_POST['product-count'];
      $image = addslashes(file_get_contents($_FILES["product-image"]["tmp_name"]));
      $sql = "
        INSERT INTO $tableproduct
        VALUES ('$name', '$description', $price, $count, '$image')
        ON DUPLICATE KEY UPDATE
        description = '$description', price = $price, count = $count, image = '$image' 
      ";
      if ($conn->query($sql) == TRUE) echo "Successful";
      else echo $conn->error;
      header('Location: ../client/sellerhome.php');
    }
    else if (isset($_POST['delete'])) {
      $name = $_POST['product-name-delete'];
      $sql = "
        DELETE FROM $tableproduct WHERE name = '$name';
      ";
      if ($conn->query($sql) == TRUE) echo "Successful";
      else echo $conn->error;
      header('Location: ../client/sellerhome.php');
    }
    else if (isset($_POST['search'])) {
      $name = $_POST['product-search'];
      $_SESSION['pointer'] = $name;
      header('Location: ../client/buyerhome.php');
    }
    else if (isset($_POST['addcart'])) {
      $_SESSION['product_count']++;
      header('Location: ../client/buyerhome.php');
    }
    else if (isset($_POST['removecart'])) {
      $_SESSION['product_count']--;
      header('Location: ../client/buyerhome.php');
    }
  }
?>
