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
      background-size: cover; /* Makes the background cover the header */
      background-position: center; /* Centers the image */
      background-repeat: no-repeat; /* Prevents the image from repeating */
      height: 8vh; /* Adjust as needed */
      color: white; /* To make the text stand out */
      background-color:#f9fafc; 
    }
    .footer{
      height: 8vh;
      background-image: url('./assets/resources/header2.png');
      background-size: cover; /* Makes the background cover the header */
      background-position: center; /* Centers the image */
      background-repeat: no-repeat; /* Prevents the image from repeating */
      height: 8vh; /* Adjust as needed */
      color: white; /* To make the text stand out */
      background-color:#f9fafc;
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

    
    <nav class="header-nav ms-auto" style="background-color:;">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">


          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('');?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="./assets/logo/dswdLogo.png" class="img-fluid" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action="<?php echo base_url('register')?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control">
                                <small><?php echo form_error('first_name');?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                                <small><?php echo form_error('last_name');?></small>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">User ID</label>
                                <input type="text" name="user_id" class="form-control">
                                <small><?php echo form_error('user_id');?></small>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                                <small><?php echo form_error('password');?></small>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control">
                                <small><?php echo form_error('cpassword');?></small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary px-5">Register Now</button>
                        </div>
                    </div>


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
  