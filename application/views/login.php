<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | Eigtolabs</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/backoffice/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/backoffice/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url();?>assets/backoffice/css/style.css">
  <!-- endinject -->
  <!-- ganti logo sc icon disini -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/backoffice/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="<?=base_url()?>assets/backoffice/images/logo.svg">
              </div>
              <h4>Hello! Welcome Back...</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="<?=base_url()?>auth/login" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="Username" name="username" required="">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required="">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium" type="submit">
                    SIGN IN
                  </button>
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-gradient-warning btn-lg font-weight-small auth-form-btn" href="<?=base_url()?>">BACK TO HOME</a>
                </div>
                <!-- Register redirect -->
                <!-- <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url()?>assets/backoffice/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?=base_url()?>assets/backoffice/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?=base_url()?>assets/backoffice/js/off-canvas.js"></script>
  <script src="<?=base_url()?>assets/backoffice/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
