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
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class='pt-5 pb-5'>
  <?php include 'header.php' ?>
  <!-- Offcanvas Sidebar -->
  <div class="offcanvas offcanvas-start" id="listedproduct">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title">Products</h1>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <?php
      include '../server/config.php';
      $conn = new mysqli($host, $user, $password, $db);
      $sql = "SELECT * FROM $tableproduct";
      $result = $conn->query($sql);
      if (!empty($result) && $result->num_rows > 0) {
        $count = 1;
        while ($row = $result->fetch_assoc()) {
          echo "<p>Product $count<br>Name: " . $row['name'] .
            "<br>Description: " . $row['description'] .
            "<br>Price: $" . $row['price'] .
            "<br>Count: " . $row['count'] . "<br><br></p>";
          $count++;
        }
      }
      ?>
    </div>
  </div>
  <!-- configure product -->
  <section class='bg-dark text-light p-5 text-right text-sm-start' id='configureproduct'>
    <div class="container">
      <div class="row">
        <div class="col-sm-7 d-flex justify-content-center align-items-center">
          <form id="item" method="POST" action="../server/products.php">
            <div class="row">
              <div class="col">
                <label class="form-label">Image:</label><br>
                <img id="product-image-preview" style="width: 200px; height: 200px;" />
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <input type="file" onchange="previewFile()"><br>
                <script>
                  function previewFile() {
                    const preview = document.querySelector('img');
                    const file = document.querySelector('input[type=file]').files[0];
                    const reader = new FileReader();
                    reader.addEventListener("load", () => {
                      preview.src = reader.result;
                    }, false);
                    if (file) reader.readAsDataURL(file);
                  }
                </script>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col d-flex justify-content-center align-items-center">
                <label class="form-label">Product Name:</label>
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <input type="text" class="form-control" name="product-name">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col d-flex justify-content-center align-items-center">
                <label class="form-label">Product Description:</label>
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <textarea class="form-control" name="product-description" rows='3'></textarea>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col d-flex justify-content-center align-items-center">
                <label class="form-label">Product Price:</label>
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <input type="number" class="form-control" name="product-price">
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-center align-items-center">
                <label class="form-label">Product Count:</label>
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <input type="number" class="form-control" name="product-count">
              </div>
            </div>
            <hr>
          </form>
        </div>
        <div class="col-sm-2 d-flex justify-content-center align-items-center">
          <div class='col '>
            <div class='row'>
              <input type='submit' class='form-control' form='item' name='addupdate' value="Add / Update Product">
            </div>
            <hr>
            <div class='row'>
              <form method="POST" action="../server/products.php">
                <input type='text' class='form-control' name='product-name-delete' , placeholder="Product Name">
                <input type='submit' class='form-control' name='delete' value="Delete Product">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>
</body>

</html>