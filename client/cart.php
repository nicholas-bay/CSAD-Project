<div class="offcanvas offcanvas-start gradient-lawrencium" data-bs-scroll="true" tabindex="-1" id="cart">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title text-white">Cart</h1>
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
          $total += $row['price'] * $value;
          echo "
              <div class='card'>
                <div class='card-body'>
                  <div class='row'>
                    <div class='col'>
                      <h4 class='card-title'>" . $row['name'] . "</h4>
                      <img class='img-thumnail img-cart' src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' />
                    </div>
                    <div class='col text-end'>
                      <h6 class='card-text'>Cost: $" . $row['price'] . "</h6>
                      <h6 class='card-text'>No. of items: " . $value . "</h6>
                      <form method='POST' action='../server/products.php'>
                        <input type='hidden' name='product-name' value='" . $row['name'] . "'>
                        <input type='submit' name='add' class='btn btn-cus justify content-center'' value='+'>
                        <input type='submit' name='remove' class='btn btn-cus justify content-center' value='-'>
                      </form> 
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
  <?php
    if (!empty($_SESSION['product_count']))
    echo "
      <div class='row pt-4'>
          <div class='col-8'>
            <h3 class='text-white'>Total cost: $$total</h3>
          </div>
          <div class='col-8 '>
          <form method='POST' action='../server/products.php'>
            <input type='submit' name='order' class='btn justify content-center btn-cus' value='Place Order'>
            <input type='submit' name='clearorder' class='btn justify content-center btn-cus' value='Clear Order'>
          </form>
        </div>
      </div>
    ";
    else if (!empty($_SESSION['invoice']))
    echo "
        <div class='row pt-4'>
            <h3 class='text-white'>Check folder for invoice</h3>
        </div>
      </div>
    ";
  ?>
</div>