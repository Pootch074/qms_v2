<main id="main" class="main">

  <div class="pagetitle">
    <h1>PACD</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('qnd'); ?>">PACD</a></li>
        <li class="breadcrumb-item active" id="categDisplay">
          <?php
          $selected_id = $this->session->userdata('selected_category_id');
          if ($selected_id) {
            $category = $this->PacdModel->getCategoryById($selected_id);
            if ($category) {
              echo htmlspecialchars($category->category_name, ENT_QUOTES, 'UTF-8');
            } else {
              echo 'Category not found';
            }
          } else {
            echo 'Null';
          }
          ?>
        </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section">
    <div class="row">

      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="d-grid gap-2 mt-3 h-100">

              <!--GIKAN SA PacdController.php-->
              <?php if (isset($xyz) && !empty($xyz)): ?> <!-- ICHECK NIYA ANG VARIABLE NA $xyz IF SET UG NOT NULL AND DILI SYA EMPTY-->
                <?php foreach ($xyz as $row): ?> <!-- ILOOP NIYA ANG DATA OBJECT IN $xyz -->
                  <!-- TAPOS MAG CREATE SYAG BUTTON DISPLAYING ANG id ug division_name-->
                  <!-- GIBUTANGAN ANG BUTTON UG ONCLICK ATRIBUTE NA divClick JAVASCRIPT FUNCTION, NA IPASA ANG id $row->id AS PARAMETER-->
                  <button onclick="divClick('<?php echo $row->id; ?>')"
                    type="button"
                    class="py-2 btn btn-primary">
                    <?php echo $row->division_name; ?>
                  </button>
                <?php endforeach; ?>
              <?php else: ?>
                <p>No divisions available.</p>
              <?php endif; ?>



            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="d-grid gap-2 mt-3" id="sections-container">
              <!-- Sections will be displayed here -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="d-grid gap-2 mt-3" id="ticketID">

            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

</main><!-- End #main -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




<script>
  function divClick(mnjk) {
    $.ajax({
      url: '<?php echo base_url('fetch_sections'); ?>', // AJAX URL
      method: 'POST',
      data: {
        mnjk: mnjk
      },

      success: function(response) {
        $('#sections-container').html(response);
      },
      error: function() {
        console.error('Failed to fetch sections.');
      }
    });
  }
</script>







<script>
  function ticket(efg) { // MA TRIGGER ANG ticket FUNTION PAG CLICK SA ONCLICK ticket SA DivisionController.php // efg IYANG PARAMETER
    $.ajax({ // MA INITIATE ANG AJAX REQUEST USING JQUERY // $.ajax ANG METHOD
      url: '<?php echo base_url('displayTicket'); ?>', // MAG SEND SYAG POST REQUEST ANI NA URL
      method: 'POST', // I SET NIYA ANG HTTP METHOD TO POST
      data: {
        efg: efg
      }, // I SEND ANG DATA DIDTO SA CONTROLLER WITH PROPERTY efg // CONTAINING THE VALUE OF efg PARAMETER

      // GIKAN SA DivisionController.php , KWAON NIYA ANG GI echo DIDTO
      success: function(response) { // I DEFINE ANG CALLBACK FUNCTION TO EXECUTE IF SUCCESFUL ANG REQUEST
        $('#ticketID').html(response); // I SELECT ANG ID ticketID TAS I SET ANG HMTL CONTENT BASE SA NADAWAT NA RESPONSE GIKAN SA DivisionController.php
      },
      error: function() { // I DEFINE ANG CALLBACK FUNCTION TO EXECUTE IF FAILED ANG REQUEST
        console.error('Failed to fetch sections.'); // THEN I DISPLAY ANG LOG ERROR MESSAGE
      }
    });
  }
  // KANI NA REQUEST DAWATON SYA SA CONTROLLER DivisionController.php displayTicket METHOD
</script>


<script>
  function catClick(id, categoryName) {
    // Update the category display in pacd_divisions.php
    document.getElementById('categDisplay').innerHTML = "Category ID: " + id + " - " + categoryName;
  }
</script>