<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<html>

<head>
  <title>Sign Up / Login</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="styles.css" />
</head>

<body class='pt-5 pb-5'>
  <?php  
    if ($_SESSION['username'] == 'User'){
      include 'header-guest.php';
    } else if ($_SESSION['username'] == 'admin') {
      include 'header-seller.php';
    } else {
      include 'header-buyer.php';
    }
  ?>
  <section class="vh-100" style="background-color: #E0E0E0;">
    <div class="container py-3 h-100">
      <div class="row d-flex justify-content-center align-items-center p-5">
        <iframe width="350px" height="275px" style="center" src="../assets/Baking Mayhem-Full Version.mp4"></iframe>
      </div>
      <div class="row d-flex justify-content-center align-items-center p-5">
        <div class="col col-lg-8 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="../assets/animegirl.jpeg" alt="Avatar" class="img-fluid my-5" style="width: 130px;" />
                <h4>About Us</h4>
                <h5>DCPE/FT/2B/01</h5>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h5>Information</h5>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Leader</h6>
                      <p class="text-muted">Nicholas Bay</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Company Motto</h6>
                      <p class="text-muted">With SP, It's So Possible.</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <h6>Purpose of Website</h6>
                    <p class="text-muted">To offer consumers a smooth shopping experience and 
                      give them transparency in their payments.</p>
                  </div>
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Location</h6>
                      <p class="text-muted">500 Dover Road, Singapore</p>
                    </div>
                    <div class="col-6 mb-3">
                      <img src="../assets/SP_Location.jpg" alt="Map" class="img-fluid my-0" style="width: 230px;" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>
</body>

</html>