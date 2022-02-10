<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="cart">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Cart</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <?php
      $total = 0;
      foreach (array_count_values($_SESSION['product_count']) as $key => $value) {
        $sql = "SELECT * FROM $tableproduct WHERE name = '" . $key . "'";
        $result = $conn->query($sql);
        if (!empty($result) && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $total += $row['price']*$value;
            echo "
              <div class='card'>
                <div class='card-body'>
                  <div class='row'>
                    <div class='col'>
                      <h4 class='card-title'>" . $row['name'] . "</h4>
                      <img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' style='width: 100px; height: 100px;' class='img-thumnail' />
                    </div>
                    <div class='col text-end'>
                      <h6 class='card-text'>Cost: $" . $row['price'] . "</h6>
                      <h6 class='card-text'>No. of items: " . $value . "</h6>
                    </div>
                  </div>
                </div>
              </div>
            ";
          }
        }
      }
      echo "</div>
        <div class='row pt-4'>
          <div class='col-8'>
          <h3>Total cost: $$total</h3>
          </div>
          <div class='col-8'>
            <input type='submit' name='order' class='btn btn-warning justify content-center' style='border-radius: 12px;' value='Place Order'></input>
          </div>
      ";
    ?>
  </div>
</div>