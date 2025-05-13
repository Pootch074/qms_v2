<style>
  .main {
    height: 84vh;

  }

  .sectionA {
    height: 100%;
  }
</style>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>QND</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('pacdAdmin'); ?>">Admin</a></li>
        <li class="breadcrumb-item active">QND</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="sectionA">
    <div class="row align-items-top">
      <div class="col-lg-12">
        <!-- Default Card -->
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">PLEASE SELECT</h1>
          </div>
        </div>
      </div>


      <div class="col-lg-4">
        <div class="card">


          <?php if (isset($tbl_categories) && !empty($tbl_categories)) {
            foreach ($tbl_categories as $row) {
              echo '<button class="py-5 btn ' . (($row->category_name == 'PRIORITY') ? 'qmsRed' : 'qmsBlue') . '" >
                ' . $row->category_name . '
              </button>';
            }
          } else {
            echo "<p>No categories available.</p>";
          }
          ?>


        </div>
      </div>


    </div>
  </section>

</main>
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>

<script>
  function catClick(catName) { // function named 'catClick' that takes 'catName' as a parameter
    $.ajax({
      url: '<?php echo base_url('chooseCateg'); ?>',
      method: 'POST',
      data: {
        catName: catName
      },

      success: function(response) {
        window.location.href = '<?php echo base_url("pacdDivisions"); ?>';
      },
      error: function() {
        console.error('Failed to fetch sections.');
      }


    });
  }
</script>