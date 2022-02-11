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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
</head>

<body class='pt-5 pb-5 gradient-aboutus'>
  <navbar class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <a class="navbar-brand px-4" href="home.php"><i class='bi bi-handbag'></i> Shopee</a>
  </navbar>
  <div class="container py-5 h-100 vh-100">
    <?php
    $names = array('Nicholas Bay', 'Chung Hong Wei', 'Ephraim Yee', 'Eugene Quek');
    $image = array('nicholas', 'hongwei', 'ephraim', 'eugene');
    $email = array('nicholas.20@ichat.sp.edu.sg', 'hongweic09.20@ichat.sp.edu.sg', 'ephraimyee.20@ichat.sp.edu.sg', 'eugeneq.20@ichat.sp.edu.sg');
    $admNo = array('P2002257', 'P2002372', 'P2032315', 'P2002228');
    for ($i = 0, $j = 0; $i < 4; $i++, $j++) {
      if ($j == 0 || $j == 2) echo "<div class='row d-flex justify-content-center align-items-center p-3'>";
      echo "
          <div class='col col-lg-6 mb-4 mb-lg-0'>
            <div class='card mb-3' style='border-radius: .5rem;'>
              <div class='row g-0'>
                <div class='col-md-4 gradient-darkocean text-center' style='border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;'>
                  <img src='../assets/$image[$i].jpg' alt='Avatar' class='img-fluid my-5' style='width: 100px;' />
                  <h5>$names[$i]</h5>
                  <p>Diploma of Computer Engineering</p>
                  <i class='far fa-edit mb-5'></i>
                </div>
                <div class='col-md-8 text-white color-dimblack'>
                  <div class='card-body p-4'>
                    <h5>Information</h5>
                    <hr class='mt-0 mb-4'>
                    <div class='row pt-1'>
                      <div class='col-6 mb-3'>
                        <h6>Email</h6>
                        <p class='text-muted'>$email[$i]</p>
                      </div>
                      <div class='col-6 mb-3'>
                        <h6>Admission Number</h6>
                        <p class='text-muted'>$admNo[$i]</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
      if ($j == 1 || $j == 3) echo "</div>";
    }
    ?>
  <div class="container py-3 h-100 vh-100">
    <div class="row d-flex justify-content-center align-items-center p-5">
      <iframe width="480px" height="300px" src="../assets/video.mp4"></iframe>
    </div>
    <div class="row d-flex justify-content-center align-items-center p-5">
      <div class="col col-lg-8 mb-4 mb-lg-0">
        <div class="card mb-3" style='border-radius: .5rem;'>
          <div class="row g-0">
            <div class="col-md-4 gradient-darkocean text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="../assets/splogo.png" alt="Avatar" class="img-fluid my-5" style="width: 200px; height: 200px;" />
              <h4>About Us</h4>
              <h5>DCPE/FT/2B/01</h5>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h5>Information</h5>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <h6>Company Motto</h6>
                  <p class="text-muted">With SP, It's So Possible.</p>
                </div>
                <div class="row pt-1">
                  <h6>Purpose of Website</h6>
                  <p class="text-muted">To offer consumers a smooth shopping experience and
                    give them transparency in their payments.</p>
                </div>
                <div class="row pt-1">
                  <h6>Contact Us</h6>
                  <p class="text-muted">6775 1133<br>
                  <a href="mailto:contactus@sp.edu.sg">contactus@sp.edu.sg</a></p>
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
  <?php include 'footer.php' ?>
</body>

</html>