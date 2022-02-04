<?php
session_start();
$name = $description = $price = $count = '';
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $sqlservername = 'localhost';
  $sqlusername = 'root';
  $sqlpassword = '';
  $sqldatabase = 'shopee';
  $sqltable = 'users';
  $name = $_POST['product-name'];
  $description = $_POST['product-description'];
  $price = $_POST['product-price'];
  $count = $_POST['product-count'];

  $conn = new mysqli($sqlservername, $sqlusername, $sqlpassword, $sqldatabase);

  $sql = 
    "INSERT INTO users
    VALUES (name, description, price, `count`)";
  $conn->query($sql);
}
