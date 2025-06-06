<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DSWD - QMS</title>
  <link href="./assets/resources/dswdIcon.png" rel="icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <style>
    body {
      margin: 0;
      font-family: "Open Sans", sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 0 10px;
      background: url('./assets/resources/dswd.png') center/cover no-repeat;
    }

    .wrapper {
      width: 35%;
      border-radius: 8px;
      padding: 30px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(8px);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /*
    form {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    */

    .col-left,
    .col-right {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .input-field {
      position: relative;
      border-bottom: 2px solid #ccc;
      margin: 15px 0;
    }

    .input-field,
    .invisible {
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

    .input-field input,
    .input-field select {
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

    input.btn {
      background: #1b4bb0;
      color: #fff;
      font-weight: 600;
      border: none;
      padding: 12px 20px;
      border-radius: 3px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    input.btn:hover {
      background: rgba(255, 255, 255, 0.15);
      color: #fff;
    }

    .register {
      text-align: center;
      color: #fff;
    }

    .register a {
      color: #efefef;
      text-decoration: none;
    }

    .register a:hover {
      color: #1b4bb0;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <?php if ($this->session->flashdata('status')): ?>
      <div class="alert alert-info">
        <?= $this->session->flashdata('status'); ?>
      </div>
    <?php endif; ?>

    <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

    <form class="row g-3 needs-validation" action="<?= base_url('register') ?>" method="post" autocomplete="off">
      <a href="#" class="logo w-100 d-flex justify-content-center">
        <img src="./assets/resources/dswdLogo.png" alt="DSWD Logo" style="width: 100%;">
      </a>
      <div class="col-md-6">
        <div class="input-field">
          <input type="text" name="f_name" id="fname" value="<?= set_value('f_name'); ?>" required>
          <label for="fname">First Name</label>
          <div class="invalid-feedback">Please enter your first name!</div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field">
          <input type="text" name="l_name" id="lname" value="<?= set_value('l_name'); ?>" required>
          <label for="fname">Last Name</label>
          <div class="invalid-feedback">Please enter your last name!</div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field">
          <input type="text" name="emp_id" id="empID" maxlength="7" oninput="formatID(this)" value="<?= set_value('emp_id'); ?>" required>
          <label for="empID">ID No.</label>
          <div class="invalid-feedback">Please enter your ID Number!</div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-field">
          <select class="form-select text-white" name="role" id="role" aria-label="Role" required>
            <option disabled selected>Assign Role</option>
            <option class="text-dark" value="Preasses" <?= set_select('role', 'Preasses'); ?>>Step 1 Preassesment</option>
            <option class="text-dark" value="Encoder" <?= set_select('role', 'Encoder'); ?>>Step 2 Encode</option>
            <option class="text-dark" value="Assesment" <?= set_select('role', 'Assesment'); ?>>Step 3 Assesment</option>
            <option class="text-dark" value="Release" <?= set_select('role', 'Release'); ?>>Step 4 Release</option>
          </select>
          <div class="invalid-feedback">Please select your role!</div>
        </div>
      </div>

      <div class="col-md-6" id="windowDropdownWrapper">
        <div class="input-field">
          <select class="form-select text-white" name="window" id="window" aria-label="Window" required>
            <option disabled selected>Assign Window</option>
            <option class="text-dark" value="1" <?= set_select('window', '1'); ?>>1</option>
            <option class="text-dark" value="2" <?= set_select('window', '2'); ?>>2</option>
            <option class="text-dark" value="3" <?= set_select('window', '3'); ?>>3</option>
            <option class="text-dark" value="4" <?= set_select('window', '4'); ?>>4</option>
          </select>
          <div class="invalid-feedback">Please select your window!</div>
        </div>
      </div>

      <div class="col-md-6" id="categoryDropdownWrapper">
        <div class="input-field">
          <select class="form-select text-white" name="category" id="category" aria-label="Category" required>
            <option disabled selected>Category</option>
            <option class="text-dark" value="Priority" <?= set_select('category', 'Priority'); ?>>Priority</option>
            <option class="text-dark" value="Regular" <?= set_select('category', 'Regular'); ?>>Regular</option>
          </select>
          <div class="invalid-feedback">Please select your category!</div>
        </div>
      </div>

      <input type="submit" value="Register" class="btn btn-primary">
      <!--<button type="reset" class="btn btn-secondary">Reset</button>-->

      <div class="register">
        <p class="small mb-0">Already have an account? <a href="<?= base_url('login'); ?>">Log in</a></p>
      </div>
    </form>
  </div>

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
    document.addEventListener("DOMContentLoaded", function() {
      const roleSelect = document.getElementById("role");
      const windowSelect = document.getElementById("window");
      const windowWrapper = document.getElementById("windowDropdownWrapper");
      const categoryWrapper = document.getElementById("categoryDropdownWrapper");

      function updateWindowOptions() {
        const role = roleSelect.value;
        const options = windowSelect.options;

        // Show both wrappers by default
        windowWrapper.style.display = "block";
        categoryWrapper.style.display = "block";

        // Hide all options initially
        for (let i = 0; i < options.length; i++) {
          options[i].style.display = "none";
        }

        if (role === "Preasses") {
          // Hide window dropdown completely
          windowWrapper.style.display = "none";
        } else {
          // Show window options depending on role
          if (role === "Encoder") {
            // Show options 1, 2, 3 (indexes 0, 1, 2)
            options[0].style.display = "block";
            options[1].style.display = "block";
            options[2].style.display = "block";
          } else if (role === "Assesment") {
            // Show all options
            for (let i = 0; i < options.length; i++) {
              options[i].style.display = "block";
            }
          } else if (role === "Release") {
            // Show all options
            for (let i = 0; i < options.length; i++) {
              options[i].style.display = "block";
            }
          }
        }

        // Hide categoryWrapper if role is Assesment or Release
        if (role === "Assesment" || role === "Release") {
          categoryWrapper.style.display = "none";
        }

        // Reset to first visible option
        for (let i = 0; i < options.length; i++) {
          if (options[i].style.display === "block") {
            windowSelect.value = options[i].value;
            break;
          }
        }
      }

      roleSelect.addEventListener("change", updateWindowOptions);
      updateWindowOptions(); // Initial setup

    });
  </script>


  <!-- Only required JS -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>