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
        <!-- cart -->
        <li class='nav-item' id='navitem'>
          <a href="../client/buyerhome.php" class="nav-link" data-bs-toggle="offcanvas">
            <i class="bi bi-card-list"></i> Listed Products
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