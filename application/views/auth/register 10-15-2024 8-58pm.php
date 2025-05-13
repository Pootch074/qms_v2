<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/logo/dswdIcon.png" rel="icon">
  <link href="./ui/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./ui/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./ui/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./ui/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./ui/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="./ui/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="./ui/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./ui/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="./ui/assets/css/style.css" rel="stylesheet"><!-- Template Main CSS File -->
  <link href="./ui/assets/css/qsfButtonStyle.css" rel="stylesheet"><!-- qsf buttons CSS File -->
  <link href="./ui/assets/css/qsfDigitalClock.css" rel="stylesheet"><!-- header digital clock CSS JS File -->

  <style>
    #header {
      background-image: url('./assets/resources/header2.png');
      background-size: cover;
      /* Makes the background cover the header */
      background-position: center;
      /* Centers the image */
      background-repeat: no-repeat;
      /* Prevents the image from repeating */
      height: 8vh;
      /* Adjust as needed */
      color: white;
      /* To make the text stand out */
      background-color: #f9fafc;
    }

    .footer {
      height: 8vh;
      background-image: url('./assets/resources/header2.png');
      background-size: cover;
      /* Makes the background cover the header */
      background-position: center;
      /* Centers the image */
      background-repeat: no-repeat;
      /* Prevents the image from repeating */
      height: 8vh;
      /* Adjust as needed */
      color: white;
      /* To make the text stand out */
      background-color: #f9fafc;
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center" style="background-color:;">
      <a href="index.html" class="logo d-flex align-items-center" style="background-color:;">
        <img src="./assets/logo/dswdLogo.png" alt="">
      </a>
      <!--<i class="bi bi-list toggle-sidebar-btn"></i>-->
    </div>
  </header><!-- End Header -->
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <!--
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="./ui/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div> End Logo -->

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <?php if ($this->session->flashdata('status')): ?>
                    <p class="flashdata"><?php echo $this->session->flashdata('status'); ?></p>
                  <?php endif; ?>
                  <?php echo validation_errors('<div class="error">', '</div>'); ?>

                  <form class="row g-3 needs-validation" action="<?php echo base_url('register') ?>" method="post" autocomplete="off">
                    <div class="col-12">
                      <label for="fname" class="form-label">First Name</label>
                      <input type="text" name="f_name" id="fname" value="<?php echo set_value('f_name'); ?>" class="form-control" required>
                      <div class="invalid-feedback">Please, enter your first name!</div>
                    </div>


                    <div class="col-12">
                      <label for="lname" class="form-label">Last Name</label>
                      <input type="text" name="l_name" id="lname" value="<?php echo set_value('l_name'); ?>" class="form-control" required>
                      <div class="invalid-feedback">Please, enter your last name!</div>
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="e_mail" id="email" value="<?php echo set_value('e_mail'); ?>" class="form-control" required>
                      <div class="invalid-feedback">Please enter your user id!</div>
                    </div>



                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" id="password" class="form-control" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>


                    <div class="col-12">
                      <label for="cpassword" class="form-label">Confirm Password</label>
                      <input type="password" name="cpassword" id="cpassword" class="form-control" required>
                      <div class="invalid-feedback">Please confirm your password!</div>
                    </div>


                    <div class="col-12">
                      <input class="btn btn-primary w-100" type="submit" value="Register"></input>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?= base_url('login'); ?>">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
  <footer id="footer" class="footer">
    <div class="credits d-flex mx-5 align-items-center h-100" style="background-color:;">
      <h5>"Pusong Dabawenyo, Serbisyong May Malasakit At Totoo." © Copyright <a href="https://fo11.dswd.gov.ph/" style="color:#0096FF;">DSWD</a>. All Rights Reserved</h5>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./ui/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="./ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./ui/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="./ui/assets/vendor/echarts/echarts.min.js"></script>
  <script src="./ui/assets/vendor/quill/quill.js"></script>
  <script src="./ui/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="./ui/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="./ui/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./ui/assets/js/main.js"></script>

</body>

</html>