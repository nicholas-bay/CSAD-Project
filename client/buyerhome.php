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
  <style>
    .card {
      transition: transform .2s;
    }

    .card:hover {
      transform: scale(1.25);
    }
  </style>
</head>

<body class='pt-5 pb-5'>
  <?php include 'header-buyer.php' ?>
  <?php $cart = array(); ?>
  <!-- Offcanvas Sidebar -->
  <div class="offcanvas offcanvas-start" id="cart">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title">Cart</h1>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <?php
      foreach ($cart as $item) {
        echo $item . "\n";
      }
      ?>
    </div>
  </div>
  <!-- search and cart -->
  <section class='bg-warning text-dark p-5 text-right text-sm-start justify-item-center'>
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class='col-sm-10'>
          <form method="POST" action="../server/products.php">
            <div class="col d-flex justify-content-center align-items-center">
              <input type="text" class="form-control" name="product-search">
              <input type='submit' class='form-control' style='margin-left: 15px; width: 120px;' name='search' value='Search'>
            </div>
          </form>
        </div>
        <div class='col-2 align-content-end'>
          <a href="#cart" class="btn btn-dark" data-bs-toggle="offcanvas">
            <i class="bi bi-cart"></i> Cart
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- display products -->
  <section class='bg-dark text-light p-5 text-right text-sm-start'>
    <div class="container">
      <div class="d-flex justify-content-center align-items-center">
        <?php
        include '../server/config.php';
        $conn = new mysqli($host, $user, $password, $db);
        $sql = "SELECT * FROM $tableproduct";
        $result = $conn->query($sql);
        if (!empty($result) && $result->num_rows > 0) {
          echo "<div class='col'><div class='row'>";
          for ($count = 1; $row = $result->fetch_assoc(); $count++) {
            if ($count == 1 || ($count - 1) % 4 == 0) echo "<div class='row'>";
            if ($row['name'] == $_SESSION['pointer']) $_SESSION['color'] = 'red';
            else $_SESSION['color'] = 'white';
            echo "
              <div class='col-sm-3'>
                <div class='card' style='width: 18rem; margin: 30px; background-color: " . $_SESSION['color'] . "'>
                  <img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' class='img-thumnail' />
                  <div class='card-body'>
                    <h5 class='card-title text-dark'>" . $row['name'] . " ($" . $row['price'] . ")</h5>
                    <h5 class='card-text'>" . $row['description'] . "</h5>
                    <h5 class='card-text'>Remaining stock: " . $row['count'] . " Left</h5>
                    <input type='button' href='buyerhome.php?addcart=true' class='btn btn-warning' style='border-radius: 12px;' value='+'></input>
                    <input type='button' href='buyerhome.php?removecart=true' class='btn btn-warning' style='border-radius: 12px;' value='-'></input>
                    " . $_SESSION['product_count'] . " in cart
                  </div>
                </div>
              </div>
            ";
            if ($count % 4 == 0) echo "</div>";
          }
        }
        ?>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>
</body>

</html>