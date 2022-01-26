<?php
  $username = $password = '';
  // check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // preset variables
    $sqlservername = 'localhost';
    $sqlusername = 'root';
    $sqlpassword = 'root';
    $sqldatabase = 'usersDB';
    $sqltable = 'users';
    $username = $_POST['username'];
    $password = $_POST['password'];

    // create connection
    $conn = new mysqli($sqlservername, $sqlusername, $sqlpassword, $sqldatabase);

    // check if button pressed is login
    if (isset($_POST['login'])) {
      
    }
    
    // check if button pressed is sign up as buyer
    else if (isset($_POST['signupbuyer'])) {
      $sql = "INSERT INTO $sqltable (username, `password`, `type`) VALUES ('$username', '$password', 'buyer')";
      
      // 1. without checking
      $conn->query($sql);

      // // 2. check if inserted properly
      // if ($conn->query($sql) === TRUE)
      //     echo "Insertion sucessful";
      // else
      //   echo "Insertion UNSUCCESSFUL: " . $conn->error;

      header('Location: ../index-buyer.html');
    }
    
    // check if button pressed is sign up as seller
    else if (isset($_POST['signupseller'])) {
      $sql = "INSERT INTO $sqltable (username, `password`, `type`) VALUES ('$username', '$password', 'seller')";

      // 1. without checking
      $conn->query($sql);

      // // 2. check if inserted properly
      // if ($conn->query($sql) === TRUE)
      //     echo "Insertion sucessful";
      // else
      //   echo "Insertion UNSUCCESSFUL: " . $conn->error;

      header('Location: ../index-seller.html');
    }
  }
