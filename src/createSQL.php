<?php
  // preset variables
  $sqlservername = 'localhost';
  $sqlusername = 'root';
  $sqlpassword = 'root';
  $sqldatabase = 'usersDB';
  $sqltable = 'users';

  // create connection
  $conn = new mysqli($sqlservername, $sqlusername, $sqlpassword);
  
  // create database
  $conn->query("CREATE DATABASE IF NOT EXISTS $sqldatabase");
  
  // recreate connection with database
  $conn = new mysqli($sqlservername, $sqlusername, $sqlpassword, $sqldatabase);

  // create table
  $sql = "CREATE TABLE IF NOT EXISTS $sqltable (
    username VARCHAR(50) PRIMARY KEY,
    `password` VARCHAR(50) NOT NULL,
    `type` VARCHAR(10) NOT NULL
  )";

  // 1. without checking
  $conn->query($sql);

  // // 2. to check if table created properly
  // if ($conn->query($sql) === TRUE)
  //   echo "Table sucessful";
  // else
  //   echo "Table UNSUCCESSFUL: " . $conn->error;

  // set admin users
  $sql = "INSERT INTO $sqltable (username, `password`, `type`)
    VALUES ('adminbuyer', '123', 'buyer'), ('adminseller', '123', 'seller')";
  
?>