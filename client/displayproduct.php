<section class='p-5 text-right text-sm-start text-light'>
  <div class="container">
    <div class="d-flex justify-content-center align-items-center">
      <?php
      $sql = "SELECT * FROM $tableuser where username = '" . $_SESSION['username'] . "'";
      $result = $conn->query($sql);
      if (!empty($result) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($row['type'] == 'buyer') $_SESSION['userstate'] = 'buyer';
          else $_SESSION['userstate'] = NULL;
        }
      }
      $sql = "SELECT * FROM $tableproduct";
      $result = $conn->query($sql);
      if (!empty($result) && $result->num_rows > 0) {
        echo "<div class='col'><div class='row'>";
        for ($count = 1; $row = $result->fetch_assoc(); $count++) {
          if ($count == 1 || ($count - 1) % 4 == 0) echo "<div class='row'>";
          if ($row['name'] == $_SESSION['pointer']) $_SESSION['color'] = '-webkit-animation-name: greywhite; -webkit-animation-duration: 2s;';
          else $_SESSION['color'] = 'background-color: black';
          echo "
            <div class='col-sm-3'>
              <div class='card border-4 border-dark home-card bg-dark' style='" . $_SESSION['color'] . "'>
                <img class='img-thumnail' src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' id='".$row['name']."'>
                <div class='card-body'>
                  <h5 class='card-title'>" . $row['name'] . " ($" . $row['price'] . ")</h5>
                  <h5 class='card-text'>" . $row['description'] . "</h5>
                  <h5 class='card-text'>Remaining stock: " . $row['count'] . " Left</h5>
                  <form method='POST' action='../server/products.php'>
                    <input type='hidden' name='product-name' value='" . $row['name'] . "'>
                    <textarea placeholder='Feedback' name='feedback-details'></textarea>
          ";
          if ($_SESSION['userstate'] == 'buyer' && $row['count'] > 0)
            echo "  <input type='submit' name='add' class='btn btn-cus justify content-center' value='Add to Cart'>";
          echo "
                  <input type='submit' name='feedback' class='btn btn-cus justify content-center' value='FeedBack'>
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