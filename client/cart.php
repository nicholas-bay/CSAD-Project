<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="cart">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Cart</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <?php
      foreach (array_count_values($_SESSION['product_count']) as $key => $value) {
        $sql = "SELECT * FROM $tableproduct WHERE name = '" . $key . "'";
        $result = $conn->query($sql);
        if (!empty($result) && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "
              <div class='card'>
                <div class='card-body' id='checkproduct'>
                  <div class='row'>
                    <div class='col'>
                      <img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' style='width: 75px; height: 75px;' class='img-thumnail' />
                    </div>
                    <div class='col'>
                      <h4 class='card-title'>" . $row['name'] . "</h4>
                    </div>
                    <div class='col text-end'>
                      <h6 class='card-text'>" . $row['price'] . "</h6>
                      <h6 class='card-text'>" . $value . "</h6>
                    </div>
                  </div>
                </div>
              </div>
            ";
          }
        }
      }
    ?>
  </div>
</div>