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
      header('Location: ../client/home.php');
    }

    else if (isset($_POST['delete'])) {
      $name = $_POST['product-name'];
      $sql = "
        DELETE FROM $tableproduct WHERE name = '$name';
      ";
      if ($conn->query($sql) == TRUE) echo "Successful";
      else echo $conn->error;
      header('Location: ../client/home.php');
    }
    else if (isset($_POST['search'])) {
      $name = $_POST['product-search'];
      $_SESSION['pointer'] = $name;
      header('Location: ../client/home.php');
    }
    else if (isset($_POST['add'])) {
      array_push($_SESSION['product_count'], $_POST['product-name']);
      print_r($_SESSION['product_count']);
      header('Location: ../client/home.php');
    }
    else if (isset($_POST['remove'])) {
      print_r($_SESSION['product_count']);
      foreach ($_SESSION['product_count'] as $key => $value) {
        if ($value == $_POST['product-name']) {
          unset($_SESSION['product_count'][$key]);
          break;
        }
      }
      print_r($_SESSION['product_count']);
      header('Location: ../client/home.php');
    }
    else if (isset($_POST['feedback'])) {
    $name = $_POST['product-name'];
    $feedback = $_POST['feedback-details'];
    $sql = "
        INSERT INTO $tablefeedback
        VALUES ('$name', '$feedback')
      ";
    if ($conn->query($sql) == TRUE) echo "Successful";
    else echo $conn->error;
    header('Location: ../client/home.php');
    }
    else if (isset($_POST['order'])) {
      foreach (array_count_values($_SESSION['product_count']) as $key => $value) {
        $sql = "
          SELECT count FROM $tableproduct WHERE name = '$key';
        ";
        $result = $conn->query($sql);
        if (!empty($result) && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $sql = "
              UPDATE $tableproduct SET count = " . $row['count'] - $value . " WHERE name = '$key'
            ";
            if ($conn->query($sql) == TRUE) echo "Successful";
            else echo $conn->error;
          }
        }
      }
      // header('Location: ../client/home.php');
    }
    else if (isset($_POST['clearorder'])) {
      $_SESSION['product_count'] = array();
      header('Location: ../client/home.php');
    }
  }
?>
