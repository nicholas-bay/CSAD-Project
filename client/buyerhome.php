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
  <style>
  .card {
    transition: transform .2s; /* Animation */
  }

  .card:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  }
  </style>
</head>

<body class='pt-5 pb-5'>
  <?php include 'header-buyer.php' ?>
  <!-- CardView to Display Products -->
  <section class='bg-dark text-light p-5 text-right text-sm-start'>
    <div class="container">
      <div class="row">
        <div class="d-flex justify-content-center align-items-center">
          <?php
          include '../server/config.php';
          $conn = new mysqli($host, $user, $password, $db);
          $sql = "SELECT * FROM $tableproduct";
          $result = $conn->query($sql);
          if (!empty($result) && $result->num_rows > 0) {
            $count = 1;
            echo "<div class=\"col\"><div class=\"row\">";
            while ($row = $result->fetch_assoc()) {
              echo "<div class=\"card\" style=\"width: 18rem; margin: 30px;\">" .
              "<img class=\"card-img-top\" src=\"...\" alt=\"Card image cap\">" .
              "<div class=\"card-body\">" .
              "<h5 class=\"card-title text-dark\">" . $row['name'] . " ($" . $row['price'] . ")</h5>" .
              "<h5 class=\"card-text\">" . $row['description'] . "</h5>" .
              "<h5 class=\"card-text\">Remaining stock: " . $row['count'] . "</h5>" .
              "<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>" .
              "</div></div>";
              
              if($count % 3 == 0) {
                echo "</div><div class=\"row\">";
              }
              $count++;
            }
            echo "</div>";
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>
</body>

</html>