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
        <!-- listed products -->
        <li class='nav-item' id='navitem'>
          <a class="nav-link">
            <i class="bi bi-card-list"></i> Listed Products
          </a>
        </li>
        <!-- add product -->
        <li class='nav-item' id='navitem'>
          <a href="#addproduct" class="nav-link">
            <i class="bi bi-plus-circle"></i> Add Product
          </a>
        </li>
        <!-- delete product -->
        <li class='nav-item' id='navitem'>
          <a href="#deleteproduct" class="nav-link">
            <i class="bi bi-trash"></i> Delete Product
          </a>
        </li>
        <!-- update product -->
        <li class='nav-item' id='navitem'>
          <a class="nav-link" href="#search">
            <i class="bi bi-box-arrow-in-up-right"></i> Update Product
          </a>
        </li>
        <!-- person -->
        <li class='nav-item' id='navitem'>
          <a href="../client/index.php" class="nav-link">
            <i class="bi bi-person"></i> <?php echo $_SESSION['username']; ?>
          </a>
        </li>
      </ul>
    </div>
  </div>
</navbar>