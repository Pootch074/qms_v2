<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DSWD - QMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/resources/dswdIcon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="./assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/qsdStyle.css" rel="stylesheet">
  <link href="./assets/css/qsfButtonStyle.css" rel="stylesheet">
  <link href="./assets/css/qsdDigitalClock.css" rel="stylesheet">
  <link href="<?= base_url('assets/css/qsdPriority.css') ?>" rel="stylesheet">

  <style>
    #header {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 8vh;
      color: white;
      background-color: #f9fafc;
    }
  </style>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid h-100">
      <div class="row h-100 align-items-center" style="height: 100vh;"> <!-- Ensure full viewport height -->
        <div class="col-6 border d-flex align-items-center justify-content-center" style="border-radius: 5px; height: 100%;">
          <div class="d-flex w-100" style="background-color:#1b4bb0; height: 100%;">

            <div class="qsdHeader d-flex align-items-center justify-content-center" style="width:60%; height: 100%;">
              <p class="qsdHeaderFont">NUMBER</p>
            </div>

            <div class="qsdHeader d-flex align-items-center justify-content-center" style="width:20%; height: 100%;">
              <p class="qsdHeaderFont">STEP</p>
            </div>

            <div class="qsdHeader d-flex align-items-center justify-content-center" style="margin-right:2vw; width:20%; height: 100%;">
              <p class="qsdHeaderFont">WINDOW</p>
            </div>

          </div>
        </div>

        <div class="col-6 border d-flex align-items-center justify-content-center" style="border-radius: 5px; height: 100%;">
          <div class="d-flex w-100" style="background-color:#1b4bb0; height: 100%;">

            <div class="qsdHeader d-flex align-items-center justify-content-center" style="width:100%; height: 100%;">
              <p class="qsdHeaderFont">CRISIS INTERVENTION SECTION</p>
            </div>


            <nav class="header-nav ms-auto" style="position:absolute; top:3vh; right:2vh;">
              <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="color:#fff;">
                    <span class="d-none d-md-block dropdown-toggle ps-2">
                      <?php
                      $fname = $this->session->userdata('fname');
                      $lname = $this->session->userdata('lname');
                      echo $fname && $lname ? ' ' : ($fname ?: 'Guest');
                      ?>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                      <h6>
                        <?php
                        echo $fname && $lname ? htmlspecialchars($fname . ' ' . $lname) : 'Guest';
                        ?>
                      </h6>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('logout'); ?>">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <!--
        <div class="col-6 border" style="background: #1b4bb0; border-radius:5px;">
          <h2 class="qsdHeaderFont h-100 d-flex align-items-center justify-content-center">CRISIS INTERVENTION SECTION</h2>
          <nav class="header-nav ms-auto" style="position:absolute; top:3vh; right:2vh;">
            <ul class="d-flex align-items-center">
              <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="color:#fff;">
                  <span class="d-none d-md-block dropdown-toggle ps-2">
                  <?php
                  $fname = $this->session->userdata('fname');
                  $lname = $this->session->userdata('lname');
                  echo $fname && $lname ? ' ' : ($fname ?: 'Guest');
                  ?>
                  </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                    <h6>
                      <?php
                      echo $fname && $lname ? htmlspecialchars($fname . ' ' . $lname) : 'Guest';
                      ?>
                    </h6>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('logout'); ?>">
                      <i class="bi bi-box-arrow-right"></i>
                      <span>Sign Out</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
        -->

      </div>
    </div>
  </header>