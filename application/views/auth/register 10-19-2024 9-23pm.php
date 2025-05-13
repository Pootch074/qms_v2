<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DSWD - QMS</title>
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
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");


    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      width: 100%;
      padding: 0 10px;
    }

    body::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background-image: url('./assets/resources/dswd.png');
      background-position: center;
      background-size: cover;
    }

    .wrapper {
      width: 800px;
      border-radius: 8px;
      padding: 30px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    form {
      display: flex;
      flex-direction: column;
    }

    h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #fff;
    }

    .input-field {
      position: relative;
      border-bottom: 2px solid #ccc;
      margin: 15px 0;
    }

    .input-field label {
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      color: #fff;
      font-size: 16px;
      pointer-events: none;
      transition: 0.15s ease;
    }

    .input-field input {
      width: 100%;
      height: 40px;
      background: transparent;
      border: none;
      outline: none;
      font-size: 16px;
      color: #fff;
    }

    .input-field input:focus~label,
    .input-field input:valid~label {
      font-size: 0.8rem;
      top: 10px;
      transform: translateY(-120%);
    }

    .forget {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 25px 0 35px 0;
      color: #fff;
    }

    #remember {
      accent-color: #fff;
    }

    .forget label {
      display: flex;
      align-items: center;
    }

    .forget label p {
      margin-left: 8px;
    }

    .wrapper a {
      color: #efefef;
      text-decoration: none;
    }

    .wrapper a:hover {
      text-decoration: underline;
    }

    input.btn {
      background: #1b4bb0;
      color: #fff;
      font-weight: 600;
      border: none;
      padding: 12px 20px;
      cursor: pointer;
      border-radius: 3px;
      font-size: 16px;
      border: 2px solid transparent;
      transition: 0.3s ease;
    }

    input.btn:hover {
      color: #fff;
      border-color: #fff;
      background: rgba(255, 255, 255, 0.15);
    }

    .register {
      text-align: center;
      margin-top: 30px;
      color: #fff;
    }
  </style>
</head>

<body>


  <div class="wrapper">

    <?php if ($this->session->flashdata('status')): ?>
      <div class="alert alert-info">
        <?php echo $this->session->flashdata('status'); ?>
      </div>
    <?php endif; ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

    <form class="row g-3 needs-validation" action="<?php echo base_url('register') ?>" method="post" autocomplete="off">

      <div class="col">
        <a href="" class="logo d-flex align-items-center justify-content-center w-100">
          <img src="./assets\logo\dswdLogo.png" alt="" style="width:100%;">
        </a>
      </div>

      <div class="col-md-6">
        <div class="input-field">
          <input type="text" name="emp_id" id="empID" value="<?php echo set_value('emp_id'); ?>" class=" <?php echo form_error('emp_id') ? 'is-invalid' : ''; ?>" required>
          <label for="empID" class="form-label">Employee No.</label>
          <div class="invalid-feedback">
            Please enter your employee ID!
          </div>
        </div>
      </div>

      <div class="col-md-6"></div>

      <div class="col-md-6">
        <div class="input-field">
          <input type="text" name="f_name" id="fname" value="<?php echo set_value('f_name'); ?>" class=" <?php echo form_error('f_name') ? 'is-invalid' : ''; ?>" required>
          <label for="fname" class="form-label">First Name</label>
          <div class="invalid-feedback">
            Please enter your first name!
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field">
          <input type="text" name="l_name" id="lname" value="<?php echo set_value('l_name'); ?>" class=" <?php echo form_error('l_name') ? 'is-invalid' : ''; ?>" required>
          <label for="lname" class="form-label">Last Name</label>
          <div class="invalid-feedback">
            Please enter your last name!
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field">
          <input type="password" name="password" id="password" class=" <?php echo form_error('password') ? 'is-invalid' : ''; ?>" required>
          <label for="password" class="form-label">Password</label>
          <div class="invalid-feedback">
            Please enter your password!
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field">
          <input type="password" name="cpassword" id="cpassword" class=" <?php echo form_error('cpassword') ? 'is-invalid' : ''; ?>" required>
          <label for="cpassword" class="form-label">Confirm Password</label>
          <div class="invalid-feedback">
            Please confirm your password!
          </div>
        </div>
      </div>










      <div class="forget">
        <label for="remember">
          <p></p>
        </label>
        <a href="#"></a>
      </div>

      <input type="submit" value="Register" class="btn btn-primary">

      <div class="register">
        <p class="small mb-0">Already have an account? <a href="<?= base_url('login'); ?>">Log in</a></p>

      </div>
    </form>
  </div>
  <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
  <script src="./ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>