<style>
  li {
    margin-left: 20px;
    margin-right: 20px;
  }

  #navmenu {
    font-size: 13px;
  }
</style>
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
              <input type="text" class="form-control" style="width: 400px;" name="product-search">
              <input type='submit' class='form-control' style='margin-left: 10px; width: 100px;' name='search' value='Search'>
            </div>
          </form>
        </li>
        <!-- listed products -->
        <li class='nav-item' id='navitem'>
          <a href='buyerhome.php' class="nav-link" data-bs-toggle="offcanvas">
            <i class="bi bi-card-list"></i> Listed Products
          </a>
        </li>
        <!-- cart -->
        <li class='nav-item' id='navitem'>
          <a href="#cart" class="nav-link" data-bs-toggle="offcanvas">
            <i class="bi bi-cart"></i> Cart
          </a>
        </li>
        <!-- person -->
        <li class='nav-item' id='navitem'>
          <a href="buyer-profile-settings.php" class="nav-link">
            <i class="bi bi-person"></i> <?php echo $_SESSION['username']; ?>
          </a>
        </li>
        <!-- settings -->
        <li class='nav-item' id='navitem'>
          <a href="index.php" class="nav-link">
            <i class="bi bi-door-open"></i> Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</navbar>