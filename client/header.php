<navbar class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container">
    <!-- toggle navmenu when small screen -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu">
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class="collapse navbar-collapse" id='navmenu'>
      <ul class="navbar-nav mx-auto my-auto">
        <!-- search -->
        <li class='nav-item' id='navitem'>
          <form method="POST" action="../server/products.php">
            <div class="col d-flex justify-content-center align-items-center">
              <input type="text" class="form-control" style="width: 400px;" name="product-search" placeholder="Search">
              <input type='submit' class='form-control' style='margin-left: 10px; width: 100px;' name='search'>
            </div>
          </form>
        </li>
        <?php
          if ($_SESSION['username'] != 'User') {
            $conn = new mysqli($host, $user, $password, $db);
            $sql = "SELECT * FROM $tableuser where username = '" . $_SESSION['username'] . "'";
            $result = $conn->query($sql);
            if (!empty($result) && $result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                if ($row['type'] == 'buyer')
                  echo "
                    <li class='nav-item' id='navitem'>
                      <a href='#cart' class='nav-link' data-bs-toggle='offcanvas' onclick=loaddata()>
                        <i class='bi bi-cart'></i> Cart
                      </a>
                    </li>
                  ";
                else if ($row['type'] == 'seller')
                  echo "
                    <li class='nav-item' id='navitem'>
                      <a href='#configure' class='nav-link' data-bs-toggle='offcanvas'>
                        <i class='bi bi-plus'></i> Add Product
                      </a>
                    </li>
                  ";
              }
            }
          }
        ?>
        <!-- account -->
        <li class='nav-item' id='navitem'>
          <a href="#account" class="nav-link" data-bs-toggle="offcanvas">
            <i class="bi bi-person"></i> <?php echo $_SESSION['username']; ?>
          </a>
        </li>
      </ul>
    </div>
  </div>
</navbar>