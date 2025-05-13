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
            <div class="card" style="background: rgb(27, 75, 176, 0.9); border-top-left-radius:20px; border-bottom-right-radius:20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">QUEUES</h3>
              </div>
            </div>

            <div class="row m-0 h-100">
              <div class="card h-100 w-50 p-0" style="background-color:#edf6f9;">
                <div class="card-body text-center" id="s3autoDisplayQueuePriority">
                </div>
              </div>

              <div class="card h-100 w-50 p-0" style="background-color:#edf6f9;">
                <div class="card-body text-center" id="s3autoDisplayQueueRegular">
                </div>
              </div>
            </div>

          </div>

          <div class="col" style="background-color:; padding-right:0;">
            <div class="card" style="background: rgb(27, 75, 176, 0.9); border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">PENDING</h3>
              </div>
            </div>

            <div class="row m-0 h-100">
              <div class="card h-100" style="background-color:#edf6f9;">
                <div class="card-body text-center" id="s3autoDisplayPending">
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>


      <div class="col-4 h-75" style="background-color:;">
        <!-- Use the PHP variable to set the background color dynamically -->
        <div class="card" style="background: rgb(27, 75, 176, 0.9); border-bottom-right-radius: 20px; border-top-left-radius: 20px;">
          <div class="card-body text-center">
            <h1 class="qsfHeaderFont" id="crrntUserLog">
              <?php
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

        <div class="h-75 cardCstm2" style="background-color:;">
          <div id="nowServ" class="card-body text-center h-75">
            <div class="col h-75 d-flex align-items-center justify-content-center" id="s3autoDisplayServing">
            </div>
          </div>
        </div>


        <div class="container h-50" style="background-color:; margin-right:;">
          <div class="row">
            <div class="col">
              <button class="btn btn-primary btn-lg regular3dBtn my-2 w-100" onclick="s3nextRegu()" id="s3nextReguID">
                <i class="bi bi-people-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-danger btn-lg priority3dBtn my-2 w-100" onclick="s3nextPrio()" id="s3nextPrioID">
                <i class="bi bi-people" style="font-size: 2em;"></i>
              </button>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <button class="btn btn-secondary btn-lg skip3dBtn my-2 w-100" onclick="s3skip()" id="s3skipID">
                <i class="bi bi-skip-backward-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-secondary btn-lg call3dBtn my-2 w-100" onclick="callButton()" id="callBtnID">
                <i class="bi bi-volume-up-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-success btn-lg proceed3dBtn my-2 w-100" onclick="s3proceed()" id="s3proceedID">
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
  $(document).ready(function() {
    loadStepFlow(); // Initial load
    setInterval(loadStepFlow, 2000); // Refresh every second
  });
  //refresh the upcoming column every second:
  function loadStepFlow() {
    $.ajax({
      url: '<?= base_url('s3fetchServing') ?>',
      type: 'GET',
      success: function(data) {
        $('#s3autoDisplayServing').html(data);
        if ($('#s3autoDisplayServing').html().trim() !== '') {
          // Disabled buttons if naa sulod
          $('#s3nextReguID').prop('disabled', true);
          $('#s3nextPrioID').prop('disabled', true);
          $('#s3skipID').prop('disabled', false);
          $('#callBtnID').prop('disabled', false);
          $('#s3proceedID').prop('disabled', false);
        } else {
          $('#s3nextReguID').prop('disabled', false);
          $('#s3nextPrioID').prop('disabled', false);
          $('#s3skipID').prop('disabled', true);
          $('#callBtnID').prop('disabled', true);
          $('#s3proceedID').prop('disabled', true);
        }
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });




    $.ajax({
      url: '<?= base_url('s3fetchQueues') ?>', // AJAX URL
      type: 'GET', // Using GET method
      success: function(data) {
        $('#s3autoDispQueues').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error); // Handle errors
      }
    });


    $.ajax({
      url: '<?= base_url('s3fetchPrioQueue') ?>',
      type: 'GET',
      success: function(data) {
        $('#s3autoDisplayQueuePriority').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });

    $.ajax({
      url: '<?= base_url('s3fetchReguQueue') ?>',
      type: 'GET',
      success: function(data) {
        $('#s3autoDisplayQueueRegular').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });

    $.ajax({
      url: '<?= base_url('s3fetchPending') ?>', // AJAX URL
      type: 'GET', // Using GET method
      success: function(data) {
        $('#s3autoDisplayPending').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error); // Handle errors
      }
    });
  }
</script>




<script>
  function s3nextRegu() {
    $.ajax({
      url: '<?= base_url('s3nextRegularBtn') ?>', // URL of the controller method
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


  function s3nextPrio() {
    $.ajax({
      url: '<?= base_url('s3nextPriorityBtn') ?>', // URL of the controller method
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

  function s3skip() {
    $.ajax({
      url: '<?= base_url('s3skipBtn') ?>', // URL of the controller method
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


  function s3proceed() {
    $.ajax({
      url: '<?= base_url('s3proceedBtn') ?>', // URL of the controller method
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