<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<html>

<head>
  <title>Seller Home Page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="ICON" href="/assets/favicon.ico" type="image/ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src=assets/template.js></script>
</head>

<body class='pt-5 pb-5'>
  <?php include("Templates/user-header.html") ?>
  <!-- add product -->
  <section class='bg-dark text-light p-5 text-right text-sm-start'>
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-right text-sm-center">
          <form>
            <div class="row">
              <div class="col">
                <label class="form-label">Image:</label><br>
                <img id="product-image-preview" style="width: 200px; height: 200px;" />
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <input id="product-image" type="file" onchange="PreviewImage();" />
                <script type="text/javascript">
                  function PreviewImage() {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("product-image").files[0]);
                    oFReader.onload = function(oFREvent) {
                      document.getElementById("product-image-preview").src = oFREvent.target.result;
                    };
                  };
                </script>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col d-flex justify-content-center align-items-center">
                <label class="form-label">Product Name:</label>
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <input type="text" class="form-control" name="product-name">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col d-flex justify-content-center align-items-center">
                <label class="form-label">Product Description:</label>
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <textarea class="form-control" id="product-description" rows='3'></textarea>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col d-flex justify-content-center align-items-center">
                <label class="form-label">Product Price:</label>
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <input type="number" class="form-control" id="product-price">
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-center align-items-center">
                <label class="form-label">Product Count:</label>
              </div>
              <div class="col d-flex justify-content-center align-items-center">
                <input type="number" class="form-control" id="product-count">
              </div>
            </div>
            <hr>
          </form>
        </div>
        <div class="col-sm-5 d-flex justify-content-center align-items-center">
          <h1>
            <span class="text-warning text-right">Add Items</span>
            <input type
          </h1>
        </div>
      </div>
    </div>
  </section>
  <section>
    New Section
    <hr>
  </section>
  <?php include("Templates/footer.html") ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>