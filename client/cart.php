<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="cart">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Cart</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <div class='card'>
      <div class='card-body' id='checkproduct'>
        <div class="row">
          <div class="col">
            <img src='../assets/hongwei.jpg' class='img-thumnail' style='width: 75px; height: 75px;' />
          </div>
          <div class="col">
            <h4 class='card-title' id='displayname'></h4>
          </div>
          <div class="col text-end">
            <h6 class='card-text' id='displayprice'></h6>
            <h6 class='card-text' id='displaycount'></h6>
          </div>
        </div>
      </div>
    </div>
    <script>
      function loaddata() {
        $json = JSON.stringify(product)
        console.log($json)
        for (key in product) {
          if (product[key] != 0) {
            document.getElementById('displayname').innerHTML = key;
            document.getElementById('displaycount').innerHTML = product[key];
          }
        }
      }
    </script>
    <?php
    ?>
  </div>
</div>