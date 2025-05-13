<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DSWD - QMS</title>
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

    #main {
      height: 92vh;
    }

    .footer {
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
    <div class="d-flex align-items-center mx-3" style="background-color:;">
      <a href="index.html" class="logo d-flex align-items-center" style="background-color:;">
        <img src="./assets/logo/dswdLogo.png" alt="">
      </a>
      <!--<i class="bi bi-list toggle-sidebar-btn"></i>-->
    </div>
  </header><!-- End Header -->
  <main id="main">
    <div class="container" style="background-color:;">

      <section style="background-color:;" class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-1">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <link href="./assets/logo/dswdIcon.png" rel="icon">
            <div class="d-flex justify-content-center py-1 w-100">
              <a href="index.html" class="logo d-flex align-items-center justify-content-center w-100">
                <!--<img src="./assets/logo/dswdIcon.png" alt="" style="width:10%;">
                  <span class="d-none d-lg-block">Queueing Management System</span>
                  -->
              </a>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="text-center">Create your account</h5>
                </div>

                <?php if ($this->session->flashdata('status')): ?>
                  <div class="alert alert-info">
                    <?php echo $this->session->flashdata('status'); ?>
                  </div>
                <?php endif; ?>

                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                <form class="row g-3 needs-validation" action="<?php echo base_url('register') ?>" method="post" autocomplete="off">
                  <div class="col-md-6">
                    <label for="empID" class="form-label">Employee ID</label>
                    <input type="text" name="emp_id" id="empID" value="<?php echo set_value('emp_id'); ?>" class="form-control <?php echo form_error('emp_id') ? 'is-invalid' : ''; ?>" required>
                    <div class="invalid-feedback">
                      Please enter your employee ID!
                    </div>
                  </div>

                  <div class="col-md-6"></div>

                  <div class="col-md-6">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="f_name" id="fname" value="<?php echo set_value('f_name'); ?>" class="form-control <?php echo form_error('f_name') ? 'is-invalid' : ''; ?>" required>
                    <div class="invalid-feedback">
                      Please enter your first name!
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="l_name" id="lname" value="<?php echo set_value('l_name'); ?>" class="form-control <?php echo form_error('l_name') ? 'is-invalid' : ''; ?>" required>
                    <div class="invalid-feedback">
                      Please enter your last name!
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : ''; ?>" required>
                    <div class="invalid-feedback">
                      Please enter your password!
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" class="form-control <?php echo form_error('cpassword') ? 'is-invalid' : ''; ?>" required>
                    <div class="invalid-feedback">
                      Please confirm your password!
                    </div>
                  </div>

                  <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary w-25" value="Register">
                  </div>

                  <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="<?= base_url('login'); ?>">Log in</a></p>
                  </div>
                </form>
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

  <script src="./ui/assets/js/main.js"></script>
  <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>

</body>

</html>