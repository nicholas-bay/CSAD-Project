<?php
  session_start();
  include '../server/config.php';
  $conn = new mysqli($host, $user, $password, $db);
?>
<!DOCTYPE html>
<html lang="en">

<html>

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" />
  <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
  <link rel="stylesheet" href="styles.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class='pt-5 pb-5 gradient-argon'>
  <?php include 'header.php'; ?>
  <?php include 'displayproduct.php' ?>
  <?php include 'configureproduct.php' ?>
  <?php include 'cart.php'; ?>
  <?php include 'account.php'; ?>
  <?php include 'footer.php' ?>
</body>

</html>