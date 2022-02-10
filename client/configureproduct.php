<div class="offcanvas offcanvas-start gradient-4" id="configure">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Product</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <div class='container'>
      <div class='row d-flex justify-content-center align-items-center p-3'>
        <div class='card gradient-2' style='border-radius: .5rem;'>
          <form method="POST" action="../server/products.php" enctype="multipart/form-data">
            <div class='row text-center card-body'>
              <label class='form-label'>Name</label>
              <input type="text" name="product-name" required />
            </div>
            <div class='row text-center card-body'>
              <label class='form-label'>Description</label>
              <textarea name="product-description" rows='3' required></textarea>
            </div>
            <div class='row text-center card-body'>
              <label class='form-label'>Price</label>
              <input type="number" name="product-price" required />
            </div>
            <div class='row text-center card-body'>
              <label class='form-label'>Count</label>
              <input type="number" name="product-count" required />
            </div>
            <div class='row text-center card-body justify-content-center'>
              <label class='form-label'>Image</label>
              <input type="file" class='form-control' onchange="previewFile()" name="product-image" accept="image/*" required><br>
              <img id="product-image-preview" style="width: 200px; height: 200px;" />
              <script>
                function previewFile() {
                  const preview = document.querySelector('img');
                  const file = document.querySelector('input[type=file]').files[0];
                  const reader = new FileReader();
                  reader.addEventListener("load", () => {
                    preview.src = reader.result;
                  }, false);
                  if (file) reader.readAsDataURL(file);
                }
              </script>
            </div>
            <input type='submit' class='btn btn-warning' style='border-radius: 12px;' name='addupdate' value="Add / Update">
          </form>
          <form method="POST" action="../server/products.php" enctype="multipart/form-data">
            <input type='submit' class='btn btn-warning' style='border-radius: 12px;' name='delete' value="Delete">
          </form>
        </div>
      </div>
      <div class='row d-flex justify-content-center align-items-center p-3'>
        <div class='card gradient-2' style='border-radius: .5rem;'>
        <div class='row card-body'>
          <h2>Feedback</h2>
        </div>
        <?php
          $sql = "SELECT * FROM $tablefeedback";
          $result = $conn->query($sql);
          if (!empty($result) && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "
                <div class='row card-body'>
                  <h4 class='card-title text-start'>  " . $row['name'] . "</h4>
                  <div class='card-text text-end'>  " . $row['feedback'] . "</div>
                </div>
              ";
            }
          }
        ?>
        </div>
      </div>
    </div>
  </div>
</div>