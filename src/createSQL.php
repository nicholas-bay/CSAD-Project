<?php
  $sqlservername = 'localhost';
  $sqlusername = 'root';
  $sqlpassword = 'root';
  $sqldatabase = 'Shopee';

  $conn = new mysqli($sqlservername, $sqlusername, $sqlpassword);
  $conn->query("CREATE DATABASE IF NOT EXISTS $sqldatabase");
  $conn = new mysqli($sqlservername, $sqlusername, $sqlpassword, $sqldatabase);
  
  // create table (users)
  $sqltable = 'users';
  $sql = "CREATE TABLE IF NOT EXISTS $sqltable (
    username VARCHAR(50) PRIMARY KEY,
    `password` VARCHAR(50) NOT NULL,
    `type` VARCHAR(10) NOT NULL
  )";
  $conn->query($sql);
  // preset users
  $sql = "INSERT INTO $sqltable (username, `password`, `type`)
    VALUES ('adminbuyer', '123', 'buyer'), ('adminseller', '123', 'seller')";
  $conn->query($sql);

  // create table (items)
  $sqltable = 'items';
  $sql = "CREATE TABLE IF NOT EXISTS $sqltable (
    name VARCHAR(50) PRIMARY KEY,
    description TEXT NOT NULL,
    price FLOAT NOT NULL,
    `count` SMALLINT NOT NULL,
    image BLOB
  )";
  $conn->query($sql);
  // preset item
  $sql = "INSERT INTO $sqltable (name, description, price, `count`, image)
    VALUES ('Item Name', 'Item Description', 10.00, 5, NULL)";
  $conn->query($sql);
  
?>