<main id="main" class="main">

  <div class="pagetitle">
    <h1>PACD</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('qnd'); ?>">PACD</a></li>
        <li class="breadcrumb-item active">Divisions</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

      <div class="col-lg-5">
        <!-- Default Card -->
        <div class="card">
          <div class="card-body">
            <div class="d-grid gap-2 mt-3">
              <?php if (isset($tbl_sections) && !empty($tbl_sections)): ?>
                <?php foreach ($tbl_sections as $row): ?>
                  <button onclick="secClick('<?php echo $row->section_name; ?>')" id="<?php echo $row->id; ?>" type="button" class="py-2 btn btn-primary">
                    <?php echo $row->section_name; ?>
                  </button>
                <?php endforeach; ?>
              <?php else: ?>
                <p>No sections available.</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="card">
          <div class="card-body">
            <div class="d-grid gap-2 mt-3">

            </div>
          </div>
        </div>
      </div>









    </div>
  </section>

</main><!-- End #main -->

<script>
  // JavaScript to handle button clicks and redirection
  function secClick(section_name) {
    // Use window.location.href to redirect to the desired URL
    window.location.href = 'pacdSections';
  }
</script>