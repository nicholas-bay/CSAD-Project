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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body class='pt-5 pb-5 gradient-3'>
    <?php include 'header.php'; ?>
    <!-- display products -->
    <section class=' text-light p-5 text-right text-sm-start'>
      <div class=" container">
        <div class="d-flex justify-content-center align-items-center">
          <?php
          $sql = "SELECT * FROM $tableproduct";
          $result = $conn->query($sql);
          if (!empty($result) && $result->num_rows > 0) {
            echo "<div class='col'><div class='row'>";
            for ($count = 1; $row = $result->fetch_assoc(); $count++) {
              if ($count == 1 || ($count - 1) % 4 == 0) echo "<div class='row'>";
              if ($row['name'] == $_SESSION['pointer']) $_SESSION['color'] = '-webkit-animation-name: greywhite; -webkit-animation-duration: 2s;';
              else $_SESSION['color'] = 'background-color: white';
              echo "
                <div class='col-sm-3'>
                  <div class='card' id='productcard' style='width: 18rem; margin: 30px;" . $_SESSION['color'] . "'>
                    <img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' class='img-thumnail' />
                    <div class='card-body'>
                      <h5 class='card-title text-dark'>" . $row['name'] . " ($" . $row['price'] . ")</h5>
                      <h5 class='card-text'>" . $row['description'] . "</h5>
                      <h5 class='card-text'>Remaining stock: " . $row['count'] . " Left</h5>
                      <form method='POST' action='../server/products.php'>
                        <input type='hidden' name='product-name' value='" . $row['name'] . "'></input>
              ";
              if ($_SESSION['username'] != 'User') {
                echo    "<input type='submit' name='add' class='btn btn-warning justify content-center' style='border-radius: 12px;' value='Add'></input>";
                echo    "<input type='submit' name='remove' class='btn btn-warning justify content-center' style='border-radius: 12px;' value='Remove'></input>";
              }
              echo "
                    </form>
                  </div>
                </div>
              </div>
              ";
              if ($count % 4 == 0) echo "</div>";
            }
          }
          $_SESSION['pointer'] = NULL;
          ?>
        </div>
      </div>
    </section>
    <?php include 'configureproduct.php' ?>
    <?php include 'cart.php'; ?>
    <?php include 'account.php'; ?>
    <?php include 'footer.php' ?>
  </body>

  </html>