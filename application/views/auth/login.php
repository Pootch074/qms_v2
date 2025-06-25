<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DSWD - QMS</title>
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

  <link href="./assets/css/style.css" rel="stylesheet">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Open Sans", sans-serif;
    }

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
      width: 25%;
      border-radius: 8px;
      padding: 30px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    .loginlogo {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      /* Optional: ensures vertical centering if parent has height */
    }

    .loginlogo img {
      max-width: 100%;
      height: auto;
      display: block;
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
      /**/
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
      color: #1b4bb0;
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

    @keyframes slowFlash {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0.5;
      }
    }

    .alert.alert-danger {
      animation: slowFlash 2s infinite;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <?php if ($this->session->flashdata('status')): ?>
      <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert"
        style="position: absolute; top:55%; width:85%;">
        <?php echo $this->session->flashdata('status'); ?>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    <?php echo validation_errors('<div class="error">', '</div>'); ?>

    <div class="col">
      <a href="https://fo11.dswd.gov.ph/" class="loginlogo">
        <img src="./assets/resources/dswd-bagong-pilipinas.png">
      </a>
    </div>

    <form style="margin-top:50px;" class="row g-1 needs-validation" action="<?php echo base_url('login'); ?>" method="post">


      <div class="input-field">
        <input type="text" name="employee_id" id="employeeID" oninput="formatID(this)" value="<?php echo set_value('employee_id'); ?>" required>
        <label>Employee No.</label>
      </div>

      <div class="input-field">
        <input type="password" name="password" id="password" class="<?php echo form_error('password') ? 'is-invalid' : ''; ?>" required>
        <label>Password</label>
        <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer; position: absolute; right: 10px; top: 10px; color: #fff; display: none;"></i>
        <div class="invalid-feedback">
          Please enter your password!
        </div>
      </div>

      <div class="forget">
        <label>
          <p></p>
        </label>
        <a href="#"></a>
      </div>

      <input type="submit" value="Login" class="btn btn-primary">
      <div class="register">
        <p class="small mb-0">Don't have an account? <a href="<?php echo base_url('register'); ?>">Register</a></p>
      </div>
      <!-- <div class="poweredBy">
        <span>Powered by:</span>
        <img src="assets\resources\dyme-logo.png" alt="">
      </div> -->
    </form>
  </div>
  <script src="./assets/plugins/jquery/jquery.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/chart.js/chart.umd.js"></script>
  <script src="./assets/vendor/echarts/echarts.min.js"></script>
  <script src="./assets/vendor/quill/quill.js"></script>
  <script src="./assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="./assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>
  <script>
    function formatID(input) {
      let value = input.value.replace(/[^0-9]/g, ''); // Remove non-digit characters
      if (value.length > 6) value = value.slice(0, 6); // Limit to 6 digits

      if (value.length > 2) {
        value = value.slice(0, 2) + '-' + value.slice(2);
      }

      input.value = value;
    }
  </script>
  <script>
    function formatID(input) {
      let value = input.value.replace(/[^0-9]/g, ''); // Remove non-digit characters
      if (value.length > 6) value = value.slice(0, 6); // Limit to 6 digits

      if (value.length > 2) {
        value = value.slice(0, 2) + '-' + value.slice(2);
      }

      input.value = value;
    }
  </script>



  <script>
    const password = document.querySelector('#password');
    const togglePassword = document.querySelector('#togglePassword');

    // Show or hide the eye icon based on input value
    password.addEventListener('input', function() {
      togglePassword.style.display = this.value ? 'inline' : 'none';
    });

    // Toggle password visibility when the eye icon is clicked
    togglePassword.addEventListener('click', function() {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('bi-eye');
    });
  </script>
</body>

</html>