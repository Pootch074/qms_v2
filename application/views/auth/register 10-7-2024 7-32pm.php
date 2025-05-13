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



    .register {
      width: 400px;
      background-color: #ffffff;
      box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
      margin: 100px auto;
    }

    .register h1 {
      text-align: center;
      color: #5b6574;
      font-size: 24px;
      padding: 20px 0 20px 0;
      border-bottom: 1px solid #dee0e4;
    }

    .register form {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding-top: 20px;
    }

    .register form label {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 50px;
      height: 50px;
      background-color: #3274d6;
      color: #ffffff;
    }

    .register form input[type="password"],
    .register form input[type="text"],
    .register form input[type="email"] {
      width: 310px;
      height: 50px;
      border: 1px solid #dee0e4;
      margin-bottom: 20px;
      padding: 0 15px;
    }

    .register form input[type="submit"] {
      width: 100%;
      padding: 15px;
      margin-top: 20px;
      background-color: #3274d6;
      border: 0;
      cursor: pointer;
      font-weight: bold;
      color: #ffffff;
      transition: background-color 0.2s;
    }

    .register form input[type="submit"]:hover {
      background-color: #2868c7;
      transition: background-color 0.2s;
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
      <!--
  <div class="register">
    <h1>Register</h1>
    <?php if ($this->session->flashdata('status')): ?>
        <p class="flashdata"><?php echo $this->session->flashdata('status'); ?></p>
    <?php endif; ?>
    <?php echo validation_errors('<div class="error">', '</div>'); ?>
    <form action="<?php echo base_url('register'); ?>" method="post" autocomplete="off">
    
      <label for="fname">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" name="f_name" placeholder="First Name" id="fname" value="<?php echo set_value('f_name'); ?>" required>
      <label for="lname">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" name="l_name" placeholder="Last Name" id="lname" value="<?php echo set_value('l_name'); ?>" required>

      <label for="password">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required>

      <label for="cpassword">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" required>
      <input type="submit" value="Register">
    </form>
</div>  
  -->

      <div class="register">
        <h1>Register</h1>
        <?php if ($this->session->flashdata('status')): ?>
          <p class="flashdata"><?php echo $this->session->flashdata('status'); ?></p>
        <?php endif; ?>
        <?php echo validation_errors('<div class="error">', '</div>'); ?>
        <form action="<?php echo base_url('register'); ?>" method="post" autocomplete="off">

          <label for="fname">
            <i class="fas fa-user"></i>
          </label>
          <input type="text" name="f_name" placeholder="First Name" id="fname" value="<?php echo set_value('f_name'); ?>" required>

          <label for="lname">
            <i class="fas fa-user"></i>
          </label>
          <input type="text" name="l_name" placeholder="Last Name" id="lname" value="<?php echo set_value('l_name'); ?>" required>

          <label for="email">
            <i class="fas fa-user"></i>
          </label>
          <input type="email" name="e_mail" placeholder="Email" id="email" value="<?php echo set_value('e_mail'); ?>" required>

          <label for="password">
            <i class="fas fa-lock"></i>
          </label>
          <input type="password" name="password" placeholder="Password" id="password" required>

          <label for="cpassword">
            <i class="fas fa-lock"></i>
          </label>
          <input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" required>
          <input type="submit" value="Register">
        </form>
      </div>

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