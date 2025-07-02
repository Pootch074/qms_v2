<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DSWD - QMS</title>
  <link href="../assets/resources/dswdIcon.png" rel="icon">
  <link href="../assets/css/encoding.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
  <div class="header">
    <!-- <img src="../assets/resources/dswd-color.png" alt=""> -->
    <!-- <div class="app__logout" id="logoutBtn">
      <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
        <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12" />
      </svg>
    </div> -->
    <div class="hcol1"></div>
    <div class="hcol2">
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
    <div class="hcol3">
      <div class="user-dropdown" id="userDropdown">
        <button class="user-button">
          <i class="bi bi-person-circle" style="color: white; font-size:5vh;"></i> Juan Dela Cruz
          <i class="bi bi-caret-down-fill" style="color: white; font-size:2vh;"></i>
        </button>
        <div class="dropdown-menu">
          <a href="<?php echo base_url('logout'); ?>">Sign out</a>
        </div>
      </div>
    </div>
  </div>