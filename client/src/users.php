<?php
  session_start();
  $username = $password = '';
  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $sqlservername = 'localhost';
    $sqlusername = 'root';
    $sqlpassword = '';
    $sqldatabase = 'Shopee';
    $sqltable = 'users';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli($sqlservername, $sqlusername, $sqlpassword, $sqldatabase);

    if (isset($_POST['login'])) {
      $sql = "SELECT username, `password`, `type` FROM $sqltable";
      $dataset = $conn->query($sql);
      if ($dataset->num_rows > 0) {
        while ($row = $dataset->fetch_assoc()) {
          if ($row['username'] === $username && $row['password'] === $password) {
            $_SESSION['username'] = $username;
            if ($row['type'] === 'buyer') 
              header('Location: ../buyer-homepage.php');
            else
              header('Location: ../seller-homepage.php');
          }
        }
      }
    }
    
    else if (isset($_POST['signupbuyer'])) {
      $sql = "INSERT INTO $sqltable (username, `password`, `type`)
        VALUES ('$username', '$password', 'buyer')";
      $conn->query($sql);
      $_SESSION['username'] = $username;
      header('Location: ../buyer-homepage.php');
    }
    
    else if (isset($_POST['signupseller'])) {
      $sql = "INSERT INTO $sqltable (username, `password`, `type`)
        VALUES ('$username', '$password', 'seller')";
      $conn->query($sql);
      $_SESSION['username'] = $username;
      header('Location: ../seller-homepage.php');
    }
  }
