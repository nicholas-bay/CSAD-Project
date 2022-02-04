<?php
  include 'config.php';
  session_start();
  $username = $pwd = '';
  
  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $conn = new mysqli($host, $user, $password, $db);
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    if (isset($_POST['login'])) {
      $sql = "SELECT * FROM $tableuser";
      $dataset = $conn->query($sql);
      if ($dataset->num_rows > 0) {
        while ($row = $dataset->fetch_assoc()) {
          if ($row['username'] === $username && $row['password'] === $pwd) {
            $_SESSION['username'] = $username;
            if ($row['type'] === 'buyer')
              header('Location: ../client/buyerhome.php');
            else
              header('Location: ../client/sellerhome.php');
          }
        }
      }
    }
    else if (isset($_POST['signupbuyer'])) {
      $sql = 
        "INSERT INTO $tableuser
        VALUES ('$username', '$pwd', 'buyer')";
      $conn->query($sql);
      $_SESSION['username'] = $username;
      header('Location: ../client/buyerhome.php');
    }
  }
