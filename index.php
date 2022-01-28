<!DOCTYPE html>
<html lang="en">

<html>

<head>
  <title>Sign Up / Login</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="ICON" href="/assets/favicon.ico" type="image/ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <script src=assets/template.js></script>
</head>

<body class='pt-5 pb-5'>
  <?php include("src/createSQL.php") ?>
  <?php include("Templates/guest-header.html") ?>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-7">
          <div class="card shadow-2-strong card-registration bg-warning" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <div class="container-fluid">
                <form method="post" action='src/users.php'>
                  <div class="row pt-2">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                      <label class="form-label">Username:</label>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                      <input type="text" class="form-control" name="username">
                    </div>
                  </div>
                  <div class="row pt-2">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                      <label class="form-label">Password:</label>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                      <input type="text" class="form-control" name="password">
                    </div>
                  </div>
                  <div class="row pt-2">
                    <div class="col d-flex justify-content-end align-items-center">
                      <button type="submit" class="btn btn-dark" name='signupbuyer' style='border-radius: 10px;'>Sign Up as Buyer</button>
                      <button type="submit" class="btn btn-dark" name='signupseller' style='border-radius: 10px;'>Sign Up as Seller</button>
                      <button type="submit" class="btn btn-dark" name='login' style='border-radius: 10px;'>Login</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include("Templates/footer.html") ?>
</body>

</html>