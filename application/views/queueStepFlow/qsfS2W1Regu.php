<style>
  .main {
    height: 84vh;
  }

  .sectionA {
    height: 100%;
  }
</style>
<main id="main" class="main" style="margin-top: 8vh; overflow:hidden;">
  <section class="sectionA px-1 py-1">


    <div class="row" style=" height:90%;">

      <div class="modal fade" id="reguBttnModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
              <button type="button" id="reguBtnCnfrmYes" class="btn btn-primary">Yes</button>
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
              Proceed serving client to next step?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" id="proceedBtnCnfrmYes" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="pendingBttnModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              Proceed pending client to next step?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" id="pendingBtnCnfrmYes" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-8">
        <div class="row h-100">
          <div class="col" style=" padding-right:0;">

            <div class="card" style="background: rgb(27, 75, 176, 0.9); border-top-left-radius:20px; border-bottom-right-radius:20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">QUEUES</h3>
              </div>
            </div>

            <div class="row m-0 h-100">
              <div class="card" style="background-color:#edf6f9; height:75vh;">
                <div class="card-body text-center overflow-auto" id="s2w1QueRegu">
                </div>
              </div>
            </div>
          </div>

          <div class="col" style=" padding-right:0;">
            <div class="card" style="background: rgb(27, 75, 176, 0.9); border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">PENDING</h3>
              </div>
            </div>

            <div class="row m-0 h-100">
              <div class="card" style="background-color:#edf6f9; height:75vh;">
                <div class="card-body text-center overflow-auto" id="s2w1PendRegu">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-4 h-75">
        <div class="card" style="background: rgb(27, 75, 176, 0.9); border-bottom-right-radius: 20px; border-top-left-radius: 20px;">
          <div class="card-body text-center" style="border-radius:20px;">
            <h3 class="qsfHeaderFont">SERVING STEP 2 WINDOW 1</h3>
          </div>
        </div>

        <div class="row m-0 h-100">
          <div class="h-100 cardCstmS2Regu" style="padding:0;">
            <img src=".\assets\resources\batikBLUE.PNG" alt="" style="width:100%; margin:0; display:block;">

            <div id="nowServHead" class="card-body" style=" margin-top:5%;">
              <h4>DSWD FOXI</h4>
              <h4>PROTECTIVE SERVICE DIVISION</h4>
              <h4>CRISIS INTERVENTION SECTION</h4>
            </div>

            <div id="nowServ" class="card-body text-center h-75">
              <div class="col h-75 d-flex align-items-center justify-content-center" id="s2w1ServRegu">
              </div>
            </div>
            <img src=".\assets\resources\batikBLUE.PNG" alt="" style="width:100%; margin:0; display:block;">
          </div>
        </div>

        <div class="container h-50">
          <div class="row">
            <div class="col">
              <button class="btn btn-primary btn-lg regular3dBtn my-2 w-100" onclick="s2w1ReguBtn()" id="reguBtnID">
                <i class="bi bi-people-fill" style="font-size: 2em;"></i>
              </button>
            </div>
            <div class="col">
            </div>
          </div>

          <div class="row">
            <div class="col">
              <button class="btn btn-secondary btn-lg skip3dBtn my-2 w-100" onclick="s2w1SkipReguBtn()" id="skipBtnID">
                <i class="bi bi-skip-backward-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-secondary btn-lg call3dBtn my-2 w-100" onclick="s2w1CallReguBtn()" id="callBtnID">
                <i class="bi bi-volume-up-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-success btn-lg proceed3dBtn my-2 w-100" onclick="s2ProceedReguBtn()" id="proceedBtnID">
                <i class="bi bi-check2-circle" style="font-size: 2em;"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  var ass_category = '<?= $ass_category ?>'; // Pass PHP variable to JavaScript
</script>

<script>
  function loadPendingData() {
    $.ajax({
      url: '<?= base_url('s2w1PendReguRou'); ?>', // Fetch data from server
      type: 'GET',
      success: function(response) {
        var data = JSON.parse(response).data; // Parse the JSON response
        var html = '';

        // Build HTML content for each item
        if (data && data.length > 0) {
          data.forEach(function(item) {
            html += `
              <div class="d-grid gap-2 mt-1">
              <button data-id="${item.id}" 
                class="qsfS2PendingVal btn btnCstmRegularPending"
                onclick="bastaKuan(${item.id})">
                R-${item.queue_num}
              </button>
            </div>
            `;
          });
        } else {
          html = '<p>Empty</p>';
        }

        $('#s2w1PendRegu').html(html);
      },
      error: function(xhr, status, error) {
        console.error("Error fetching data:", error); // Log any errors
      }
    });
  }

  function bastaKuan(id) {
    $('#pendingBttnModal').modal('show');
    $('#pendingBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('s2w1UpdPendReguRou/') ?>' + id, // Pass ID in the URL
        type: 'POST',
        success: function(response) {
          var data = JSON.parse(response);
          $('#pendingBttnModal').modal('hide');
        },
        error: function() {
          alert('Error while updating Next Priority');
        }
      });

    });

  }


  $(document).ready(function() {
    loadPendingData(); // Initial load
    setInterval(loadPendingData, 1000); // Refresh data every second
  });
</script>

<script>
  $(document).ready(function() {
    loadStepFlow(); // Initial load
    setInterval(loadStepFlow, 1000); // Refresh every second
  });

  function loadStepFlow() {

    $.ajax({
      url: '<?= base_url('s2w1ServReguRou') ?>',
      type: 'GET',
      success: function(data) {
        $('#s2w1ServRegu').html(data);
        if ($('#s2w1ServRegu').html().trim() !== '') {
          $('#reguBtnID').prop('disabled', true);
          $('#skipBtnID').prop('disabled', false);
          if (!isCallCooldown) {
            $('#callBtnID').prop('disabled', false);
          }
          $('#proceedBtnID').prop('disabled', false);
        } else {
          $('#reguBtnID').prop('disabled', false);
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
      url: '<?= base_url('s2w1QueReguRou') ?>', // AJAX URL
      type: 'GET', // Using GET method
      success: function(data) {
        $('#s2w1QueRegu').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error); // Handle errors
      }
    });
  }
</script>

<script>
  // REGULAR BUTTON STATUS = 1
  function s2w1ReguBtn() {
    $('#reguBttnModal').modal('show'); // Show a modal with the id `reguBttnModal` to confirm the action.
    $('#reguBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('s2w1ReguBtnRou') ?>', // URL of the controller method
        type: 'POST',
        success: function(response) {
          var data = JSON.parse(response);
          $('#reguBttnModal').modal('hide');
        },
        error: function() {
          alert('Error while updating Next Regular');
        }
      });

    });

  }

  // SKIP BUTTON STATUS = 1
  function s2w1SkipReguBtn() {
    $('#skipBttnModal').modal('show'); // Show a modal with the id `skipBttnModal` to confirm the action.
    $('#skipBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('s2w1SkipReguBtnRou') ?>', // URL of the controller method
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
  function s2ProceedReguBtn() {
    $('#proceedBttnModal').modal('show');
    $('#proceedBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('s2w1ProceedReguBtnRou') ?>',
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


<script>
  function s2w1CallReguBtn() {
    if ($('#s2w1ServRegu').html().trim() !== '' && !$('#callBtnID').prop('disabled')) {
      isCallCooldown = true;
      $('#callBtnID').prop('disabled', true);

      setTimeout(function() {
        isCallCooldown = false;
      }, 15000);
    }

    $.ajax({
      url: '<?= base_url('s2w1CallReguRou') ?>',
      type: 'POST',
      success: function(response) {
        var data = JSON.parse(response);
      },
      error: function() {
        alert('Error while updating Next Regular');
      }
    });
  }
</script>