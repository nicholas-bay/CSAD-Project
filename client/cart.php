<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="cart">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Cart</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <?php
      $sql = "SELECT * FROM $tableproduct";
      $result = $conn->query($sql);
      if (!empty($result) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          // echo "
          //   <div class='container'>
          // ";
          // echo "
          //   <script>
          //     for (const property in product) {
          //       console.log('${property}: ${product[property]}');
          //     }
          //   </script>
          // ";
        }
      }
    ?>
  </div>
</div>