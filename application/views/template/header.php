<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DSWD - QMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="./assets/resources/dswdIcon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="./assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="./assets/css/style.css" rel="stylesheet"><!-- Template Main CSS File -->
  <link href="./assets/css/qsfButtonStyle.css" rel="stylesheet"><!-- qsf buttons CSS File -->
  <link href="./assets/css/qsfDigitalClock.css" rel="stylesheet"><!-- header digital clock CSS JS File -->
  <link href="./assets/css/qndDatatable.css" rel="stylesheet"><!-- header digital clock CSS JS File -->

  <style>
    #header {
      background-image: url('./assets/resources/header2.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 8vh;
      color: white;
      background-color: #f9fafc;
    }

    .main {
      margin-top: 8vh;
    }

    #footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
    }

    .status-waiting {
      background-color: #73c0de;
      padding: 3px 8px;
      border-radius: 15px;
    }

    .status-serving {
      background-color: #91cc75;
      padding: 3px 8px;
      border-radius: 15px;
    }

    .status-pending {
      background-color: #fac858;
      padding: 3px 8px;
      border-radius: 15px;
    }

    .queueCat {
      color: #fff;
      font-weight: bolder;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center mx-3">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="./assets/resources/dswd-color.png" alt="">
      </a>
      <!--<i class="bi bi-list toggle-sidebar-btn"></i>-->
    </div>

    <div class="d-flex w-75 justify-content-end">
      <div class="clock">
        <!-- Hours -->
        <div class="hours">
          <div class="first">
            <div class="number">0</div>
          </div>
          <div class="second">
            <div class="number">0</div>
          </div>
        </div>
        <!-- Separator -->
        <div class="tick">:</div>
        <!-- Minutes -->
        <div class="minutes">
          <div class="first">
            <div class="number">0</div>
          </div>
          <div class="second">
            <div class="number">0</div>
          </div>
        </div>
        <!-- Separator -->
        <div class="tick">:</div>
        <!-- Seconds -->
        <div class="seconds">
          <div class="first">
            <div class="number">0</div>
          </div>
          <div class="second infinite">
            <div class="number">0</div>
          </div>
        </div>
        <!-- AM/PM Indicator -->
        <div class="am-pm">AM</div>
      </div>

    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="color:#fff;">
            <img src="./assets/resources/user.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">

              <?php
              $fname = $this->session->userdata('fname');
              $lname = $this->session->userdata('lname');
              if ($fname && $lname) {
                echo htmlspecialchars($fname . ' ' . $lname, ENT_QUOTES, 'UTF-8');
              } elseif ($fname) {
                echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8');
              } else {
                echo 'Guest';
              }
              ?>

            </span>
          </a>


          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>
                <?php
                if ($fname && $lname) {
                  echo htmlspecialchars($fname . '  ' . $lname . ' ');
                } else {
                  echo 'Guest'; // Default if fname is not set
                }
                ?>


              </h6>
              <span>
                <?php
                if ($fname && $lname) {
                  echo ($position);
                } else {
                  echo 'Guest'; // Default if fname is not set
                }
                ?>
              </span>
            </li>
            <!--
            <li>
              <hr class="dropdown-divider">
            </li>
              
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            -->

            <li>
              <hr class="dropdown-divider">
            </li>



            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('logout'); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>