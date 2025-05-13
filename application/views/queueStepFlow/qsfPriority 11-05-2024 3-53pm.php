<style>
  .main {
    background-color: ;
    height: 84vh;

  }

  .sectionA {
    background-color: ;
    height: 100%;
  }
</style>
<main id="main" class="main" style="margin-top: 8vh; overflow:hidden;">
  <section class="sectionA px-1 py-1" style="background-color:;">


    <div class="row" style="background-color:; height:90%;">

      <div class="modal fade" id="prioBttnModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              Are you sure to serve new client?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" id="prioBtnCnfrmYes" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="skipBttnModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              Are you sure to skip client?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" id="skipBtnCnfrmYes" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="proceedBttnModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              Proceed client to next step?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" id="proceedBtnCnfrmYes" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>

      <!--SUGOD-->
      <div class="col-8" style="background-color:;">
        <div class="row h-100" style="background-color:;">
          <div class="col" style="background-color:; padding-right:0;">

            <div class="card" style="background: #cb3e3d; border-top-left-radius:20px; border-bottom-right-radius:20px;">
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


          </div>

          <div class="col" style="background-color:; padding-right:0;">

            <div class="card" style="background: #cb3e3d; border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">PENDING</h3>
              </div>
            </div>

            <div class="row m-0 h-100">
              <div class="card h-100" style="background-color:#edf6f9;">
                <div class="card-body text-center" id="autoDisplayPending">
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>


      <div class="col-4 h-75" style="background-color:;">
        <div class="card" style="background: #cb3e3d; border-bottom-right-radius: 20px; border-top-left-radius: 20px;">
          <div class="card-body text-center" style="border-radius:20px;">
            <h3 class="qsfHeaderFont">SERVING STEP 2</h3>
          </div>
        </div>

        <div class="row m-0 h-100">
          <div class="h-100 cardCstmS2Prio" style="padding:0;">
            <img src=".\assets\resources\batik.PNG" alt="" style="width:100%; margin:0; display:block;">

            <div id="nowServHead" class="card-body" style="background-color:; margin-top:5%;">
              <h4>DSWD FOXI</h4>
              <h4>PROTECTIVE SERVICE DIVISION</h4>
              <h4>CRISIS INTERVENTION SECTION</h4>
            </div>

            <div id="nowServ" class="card-body text-center h-75" style="background-color:;">
              <div class="col h-75 d-flex align-items-center justify-content-center" id="autoDisplayServing">
              </div>
            </div>
            <img src=".\assets\resources\batik.PNG" alt="" style="width:100%; margin:0; display:block;">

          </div>
        </div>


        <div class="container h-50" style="background-color:; margin-right:;">
          <div class="row">
            <div class="col">
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
              <button class="btn btn-secondary btn-lg call3dBtn my-2 w-100" id="callBtnID">
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
    setInterval(loadStepFlow, 1000); // Refresh every second
  });
  //refresh the upcoming column every second:
  function loadStepFlow() {

    $.ajax({
      url: '<?= base_url('s2fetchServingPrio') ?>',
      type: 'GET',
      success: function(data) {
        $('#autoDisplayServing').html(data);
        if ($('#autoDisplayServing').html().trim() !== '') {
          // Disabled buttons if naa sulod
          $('#prioBtnID').prop('disabled', true);
          $('#skipBtnID').prop('disabled', false);
          $('#callBtnID').prop('disabled', false);
          $('#proceedBtnID').prop('disabled', false);
        } else {
          $('#prioBtnID').prop('disabled', false);
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
      url: '<?= base_url('s2fetchQueuePrio') ?>', // AJAX URL
      type: 'GET', // Using GET method
      success: function(data) {
        $('#autoDispQueues').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error); // Handle errors
      }
    });


    $.ajax({
      url: '<?= base_url('s2fetchPendingPrio') ?>', // AJAX URL
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
  // PRIORITY BUTTON STATUS = 1
  function nextPrioButton() {
    $('#prioBttnModal').modal('show'); // Show a modal with the id `prioBttnModal` to confirm the action.
    $('#prioBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('nextPriorityBtn') ?>', // URL of the controller method
        type: 'POST',
        success: function(response) {
          var data = JSON.parse(response);
          $('#prioBttnModal').modal('hide');
        },
        error: function() {
          alert('Error while updating Next Priority');
        }
      });
    });
  }

  // SKIP BUTTON STATUS = 1
  function skipButton() {
    $('#skipBttnModal').modal('show'); // Show a modal with the id `skipBttnModal` to confirm the action.
    $('#skipBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('skipBtn') ?>', // URL of the controller method
        type: 'POST',
        success: function(response) {
          var data = JSON.parse(response);
          $('#skipBttnModal').modal('hide');
        },
        error: function() {
          alert('Error while updating Next Regular');
        }
      });
    });
  }

  function callButton() {
    $.ajax({
      url: '<?= base_url('callBtn') ?>', // URL of the controller method
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
    $('#proceedBttnModal').modal('show'); // Show a modal with the id `proceedBttnModal` to confirm the action.
    $('#proceedBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('proceedBtn') ?>',
        type: 'POST',
        success: function(response) {
          var data = JSON.parse(response);
          $('#proceedBttnModal').modal('hide');
        },
        error: function() {
          alert('Error while updating Next Regular');
        }
      });

    });

  }
</script>