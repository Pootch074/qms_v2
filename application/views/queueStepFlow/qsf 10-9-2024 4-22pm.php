<style>
  .main {
    background-color: ;
    height: 84vh;

  }

  .sectionA {
    background-color: ;
    height: 100%;
  }

  .vnb {
    background-color: ;
  }
</style>
<main id="main" class="main" style="margin-top: 8vh; overflow:hidden;">
  <section class="sectionA px-1 py-1" style="background-color:;">


    <div class="row" style="background-color:; height:90%;">

      <!--SUGOD-->
      <div class="col-8" style="background-color:;">
        <div class="row h-100" style="background-color:;">

          <div class="col" style="background-color:; padding-right:0;">
            <div class="card" style="background: #1b4bb0; border-top-left-radius:20px; border-bottom-right-radius:20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">UPCOMING</h3>
              </div>
            </div>

            <div class="card h-100" style="background-color:#edf6f9;">
              <div class="card-body text-center" id="autoDisplayUpcoming" style="background-color:;">

              </div>
            </div>
          </div>

          <div class="col" style="background-color:; padding-right:0;">
            <div class="card" style="background: #1b4bb0; border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">PENDING</h3>
              </div>
            </div>

            <div class="card h-100" style="background-color:#edf6f9;">
              <div class="card-body text-center" id="autoDisplayPending">

              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-4 h-75" style="background-color:;">
        <div class="card" style="background: #1b4bb0; border-bottom-right-radius: 20px; border-top-left-radius: 20px;">
          <div class="card-body text-center">
            <h1 class="qsfHeaderFont" id="crrntUserLog">
              <?php
              $section = $this->session->userdata('section');
              $ass_step = $this->session->userdata('ass_step');
              if ($fname && $lname) {
                echo htmlspecialchars($section . ' ' . 'STEP ' . $ass_step, ENT_QUOTES, 'UTF-8');
              } elseif ($fname) {
                echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8');
              } else {
                echo 'Guest'; // Default if fname is not set
              }
              ?>
            </h1>
          </div>

          <div class="card-body text-center" style="border-radius:20px;">
            <h3 class="qsfHeaderFont">NOW SERVING</h3>
          </div>
        </div>

        <!--<div class="card h-100" style="background-color:#edf6f9;">-->
        <div class="h-75 cardCstm2" style="background-color:;">
          <div id="nowServ" class="card-body text-center h-75">
            <div class="col h-75 d-flex align-items-center justify-content-center" id="autoDisplayServing">
            </div>
          </div>
        </div>


        <div class="container h-50" style="background-color:; margin-right:;">
          <div class="row">
            <div class="col">
              <button class="btn btn-primary btn-lg regular3dBtn my-2 w-100" onclick="nextReguButton()" id="reguBtnID">
                <i class="bi bi-people-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-danger btn-lg priority3dBtn my-2 w-100" onclick="nextPrioButton()" id="prioBtnID">
                <i class="bi bi-people" style="font-size: 2em;"></i>
              </button>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <button class="btn btn-secondary btn-lg skip3dBtn my-2 w-100" onclick="skipButton()">
                <i class="bi bi-skip-backward-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-secondary btn-lg call3dBtn my-2 w-100">
                <i class="bi bi-volume-up-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-success btn-lg proceed3dBtn my-2 w-100" onclick="proceedButton()">
                <i class="bi bi-check2-circle" style="font-size: 2em;"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>


<script>
  //refresh the upcoming column every second:
  function loadStepFlow() {

    $.ajax({
      url: '<?= base_url('fetch-serving-queues') ?>',
      type: 'GET',
      success: function(data) {
        $('#autoDisplayServing').html(data); // Update the #autoDisplayServing with the response
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });

    $.ajax({
      url: '<?= base_url('fetch-upcoming-queues') ?>',
      type: 'GET',
      success: function(data) {
        $('#autoDisplayUpcoming').html(data); // Update the #autoDisplayUpcoming with the response
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });

    $.ajax({
      url: '<?= base_url('fetch-pending-queues') ?>', // AJAX URL
      type: 'GET', // Using GET method
      success: function(data) {
        $('#autoDisplayPending').html(data); // Update the #autoDisplayUpcoming with the response
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error); // Handle errors
      }
    });
  }

  $(document).ready(function() {
    loadStepFlow(); // Initial load
    setInterval(loadStepFlow, 2000); // Refresh every second
  });
</script>




<script>
  // REGULAR BUTTON STATUS = 1
  function nextReguButton() {
    $.ajax({
      url: '<?= base_url('nextRegularBtn') ?>', // URL of the controller method
      type: 'POST',
      success: function(response) {
        var data = JSON.parse(response);
        if (data.status === 'success') {
          alert('Next regular updated successfully!');
          // You can also refresh the table or perform any other UI updates here
        }
      },
      error: function() {
        alert('Error while updating Next Regular');
      }
    });
  }




  // PRIORITY BUTTON STATUS = 1
  function nextPrioButton() {
    $.ajax({
      url: '<?= base_url('nextPriorityBtn') ?>', // URL of the controller method
      type: 'POST',
      success: function(response) {
        var data = JSON.parse(response);
        if (data.status === 'success') {
          alert('Next priority updated successfully!');
          // You can also refresh the table or perform any other UI updates here
        }
      },
      error: function() {
        alert('Error while updating Next Priority');
      }
    });
  }

  // SKIP BUTTON STATUS = 1
  function skipButton() {
    $.ajax({
      url: '<?= base_url('skipBtn') ?>', // URL of the controller method
      type: 'POST',
      success: function(response) {
        var data = JSON.parse(response);
        if (data.status === 'success') {
          alert('Skip updated successfully!');
          // You can also refresh the table or perform any other UI updates here
        }
      },
      error: function() {
        alert('Error while updating Next Regular');
      }
    });
  }

  // PROCEED BUTTON STEP = 2
  function proceedButton() {
    $.ajax({
      url: '<?= base_url('proceedBtn') ?>', // URL of the controller method
      type: 'POST',
      success: function(response) {
        var data = JSON.parse(response);
        if (data.status === 'success') {
          alert('Skip updated successfully!');
          // You can also refresh the table or perform any other UI updates here
        }
      },
      error: function() {
        alert('Error while updating Next Regular');
      }
    });
  }
</script>