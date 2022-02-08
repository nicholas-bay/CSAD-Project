<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<html>

<head>
  <title>Buyer Home Page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="ICON" href="/assets/favicon.ico" type="image/ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>

<body class='pt-5 pb-5'>
  <?php
  include 'header-buyer.php';
  include '../server/config.php';
  $item = array();
  $_SESSION['item'] = $item;
  $conn = new mysqli($host, $user, $password, $db);
  ?>
  <!-- cart sidebar -->
  <div class="offcanvas offcanvas-start" id="cart">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title">Cart</h1>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <?php
      $read_cart_sql = "SELECT * FROM $tablecart";
      $cart_result = $conn->query($read_cart_sql);
      if (!empty($cart_result) && $cart_result->num_rows > 0) {
        for ($count = 1; $row = $cart_result->fetch_assoc(); $count++) {
          echo "
              <div class='col-sm-3'>
                <img src='data:image/jpeg;base64," . base64_encode($row["item_image"]) . "' class='img-thumnail' />
                <h5 class='card-title text-dark'>" . $row['item_name'] . "</h5>
              </div>
            ";
        }
      }
      ?>
    </div>
  </div>
  <!-- settings sidebar -->
  <div class="offcanvas offcanvas-end" id="settings">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title">Account Settings</h1>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
    </div>
  </div>
  <!-- display products -->
  <section class='bg-dark text-light p-5 text-right text-sm-start'>
    <div class="container">
      <div class="d-flex justify-content-center align-items-center">
        <?php
        $sql = "SELECT * FROM $tableproduct";
        $Insert_sql = "INSERT INTO $tablecart('username', 'item_name', 'item_image') VALUES (" . $_SESSION['username'] . ", 'Test2', NULL)";
        $result = $conn->query($sql);
        if (!empty($result) && $result->num_rows > 0) {
          echo "<div class='col'><div class='row'>";
          for ($count = 1; $row = $result->fetch_assoc(); $count++) {
            if ($count == 1 || ($count - 1) % 4 == 0) echo "<div class='row'>";
            if ($row['name'] == $_SESSION['pointer']) $_SESSION['color'] = 'red';
            else $_SESSION['color'] = 'white';
            echo "
              <div class='col-sm-3'>
                <div class='card' id='productcard' style='width: 18rem; margin: 30px;" . $_SESSION['color'] . "'>
                  <img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' class='img-thumnail' />
                  <div class='card-body'>
                    <h5 class='card-title text-dark'>" . $row['name'] . " ($" . $row['price'] . ")</h5>
                    <h5 class='card-text'>" . $row['description'] . "</h5>
                    <h5 class='card-text'>Remaining stock: " . $row['count'] . " Left</h5>
                    <input type='button' class='btn btn-warning' style='border-radius: 12px;' value='+' onclick=" . array_push($item, $row['name']) . "></input>
                    <input type='button' class='btn btn-warning' style='border-radius: 12px;' value='-'></input>
                    " . $_SESSION['product_count'] . " in cart
                  </div>
                </div>
              </div>
            ";
            if ($count % 4 == 0) echo "</div>";
            $_SESSION['item'] = $item;
          }
        }
        ?>
      </div>
    </div>
    <?php print_r($_SESSION['item']); ?>
  </section>
  <?php include 'footer.php' ?>
</body>

</html>