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
          <?php
          $section = $this->session->userdata('section');
          $ass_step = $this->session->userdata('ass_step');
          $ass_category = $this->session->userdata('ass_category');

          // Determine the background color based on $ass_step value
          $card_background = 'rgb(27, 75, 176, 0.9)'; // Default background

          if ($ass_category === 'REGULAR') {
            $card_background = 'rgb(27, 75, 176, 0.9)';
          } elseif ($ass_category === 'PRIORITY') {
            $card_background = 'rgb(27, 75, 176, 0.9)';
          }
          ?>

          <div class="col" style="background-color:; padding-right:0;">

            <div class="card" style="background: <?= $card_background ?>; border-top-left-radius:20px; border-bottom-right-radius:20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">QUEUES</h3>
              </div>
            </div>

            <div class="row m-0 h-100">
              <div class="card h-100" style="background-color:#edf6f9;">
                <div class="card-body text-center" id="autoDispQueues">
                </div>
              </div>
            </div>


            <!--
            <div class="row m-0 h-100">
              <div class="card h-100 w-50 p-0" style="background-color:#edf6f9;">
                <div class="card-body text-center" id="autoDisplayUpcoming" style="background-color:;">
                </div>
              </div>

              <div class="card h-100 w-50 p-0" style="background-color:#edf6f9;">
                <div class="card-body text-center" id="autoDisplayQueuePriority" style="background-color:;">
                </div>
              </div>
            </div>
            -->
          </div>

          <div class="col" style="background-color:; padding-right:0;">
            <div class="card" style="background: <?= $card_background ?>; border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
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
        <!-- Use the PHP variable to set the background color dynamically -->
        <div class="card" style="background: <?= $card_background ?>; border-bottom-right-radius: 20px; border-top-left-radius: 20px;">
          <div class="card-body text-center">
            <h1 class="qsfHeaderFont" id="crrntUserLog">
              <?php
              if ($fname && $lname) {
                echo htmlspecialchars($section . ' ' . 'STEP ' . $ass_step . ' ' . $ass_category, ENT_QUOTES, 'UTF-8');
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
              <button class="btn btn-secondary btn-lg skip3dBtn my-2 w-100" onclick="skipButton()" id="skipBtnID">
                <i class="bi bi-skip-backward-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-secondary btn-lg call3dBtn my-2 w-100" onclick="callButton()" id="callBtnID">
                <i class="bi bi-volume-up-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-success btn-lg proceed3dBtn my-2 w-100" onclick="proceedButton()" id="proceedBtnID">
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
  var ass_category = '<?= $ass_category ?>'; // Pass PHP variable to JavaScript
</script>

<script>
  $(document).ready(function() {
    loadStepFlow(); // Initial load
    setInterval(loadStepFlow, 2000); // Refresh every second
  });
  //refresh the upcoming column every second:
  function loadStepFlow() {

    $.ajax({
      url: '<?= base_url('fetch-serving-queues') ?>',
      type: 'GET',
      success: function(data) {
        $('#autoDisplayServing').html(data); // Update #autoDisplayServing with the response

        // Check if #autoDisplayServing has any content
        if ($('#autoDisplayServing').html().trim() !== '') {
          // Disabled buttons if naa sulod
          $('#reguBtnID').prop('disabled', true);
          $('#prioBtnID').prop('disabled', true);
          $('#skipBtnID').prop('disabled', false);
          $('#callBtnID').prop('disabled', false);
          $('#proceedBtnID').prop('disabled', false);
        } else {
          // Disabled buttons if wala sulod
          if (ass_category === 'REGULAR') {
            $('#reguBtnID').prop('disabled', false); // Enable Regular button
            $('#prioBtnID').remove();
          } else if (ass_category === 'PRIORITY') {
            $('#reguBtnID').remove();
            $('#prioBtnID').prop('disabled', false); // Enable Priority button
          }

          $('#skipBtnID').prop('disabled', true);
          $('#callBtnID').prop('disabled', true);
          $('#proceedBtnID').prop('disabled', true);
        }
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });

    $.ajax({
      url: '<?= base_url('fetchQueues') ?>', // AJAX URL
      type: 'GET', // Using GET method
      success: function(data) {
        $('#autoDispQueues').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error); // Handle errors
      }
    });



    $.ajax({
      url: '<?= base_url('fetchReguQueue') ?>',
      type: 'GET',
      success: function(data) {
        $('#autoDisplayUpcoming').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });

    $.ajax({
      url: '<?= base_url('fetchPrioQueue') ?>',
      type: 'GET',
      success: function(data) {
        $('#autoDisplayQueuePriority').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });

    $.ajax({
      url: '<?= base_url('fetch-pending-queues') ?>', // AJAX URL
      type: 'GET', // Using GET method
      success: function(data) {
        $('#autoDisplayPending').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error); // Handle errors
      }
    });
  }
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
          alert('Proceed updated successfully!');
          // You can also refresh the table or perform any other UI updates here
        }
      },
      error: function() {
        alert('Error while updating Next Regular');
      }
    });
  }
</script>