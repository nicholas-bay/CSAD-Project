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
          <a href='buyerhome.php' class="nav-link">
            <i class="bi bi-card-list"></i> Listed Products
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