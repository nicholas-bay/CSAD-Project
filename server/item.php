<?php
include 'config.php';
session_start();
$name = $description = $price = $count = '';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $conn = new mysqli($host, $user, $password, $db);
  $name = $_POST['product-name'];
  $description = $_POST['product-description'];
  $price = $_POST['product-price'];
  $count = $_POST['product-count'];
  $sql = 
    "INSERT INTO $tableproduct
    VALUES ('$name', '$description', '$price', `$count`, 'NULL')";
  $conn->query($sql);
  header('Location: ../client/sellerhome.php');
}
