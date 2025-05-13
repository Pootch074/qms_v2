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
    <link href="./qndResources/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./qndResources/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./qndResources/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./qndResources/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./qndResources/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="./qndResources/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="./qndResources/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="./qndResources/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <link href="./qndResources/assets/css/style.css" rel="stylesheet"><!-- Template Main CSS File -->
    <link href="./qndResources/assets/css/qndButtonStyle.css" rel="stylesheet"><!-- qsf buttons CSS File -->
    <link href="./qndResources/assets/css/qndDigitalClock.css" rel="stylesheet"><!-- header digital clock CSS JS File -->

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
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
        <div class="d-flex align-items-center mx-3" style="background-color:;">
            <a href="index.html" class="logo d-flex align-items-center" style="background-color:;">
                <img src="./assets/logo/dswdLogo.png" alt="">
            </a>
            <!--<i class="bi bi-list toggle-sidebar-btn"></i>-->
        </div>

        <div class="d-flex w-75 justify-content-end" style="background-color:;">
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
        <nav class="header-nav ms-auto" style="background-color:;">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="color:#fff;">
                        <img src="./qndResources/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">

                            <?php
                            $fname = $this->session->userdata('fname');
                            $lname = $this->session->userdata('lname');
                            if ($fname && $lname) {
                                echo htmlspecialchars($fname . ' ' . $lname, ENT_QUOTES, 'UTF-8');
                            } elseif ($fname) {
                                echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8');
                            } else {
                                echo 'Guest'; // Default if fname is not set
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
    <script src="<?= base_url('qndResources/') ?>assets/js/digitalClock.js"></script>