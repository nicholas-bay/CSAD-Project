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
              <input type="text" name="product-price" required />
            </div>
            <div class='row text-center card-body'>
              <label class='form-label'>Count</label>
              <input type="text" name="product-count" required />
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
        </div>
      </div>
    </div>
  </div>
</div>