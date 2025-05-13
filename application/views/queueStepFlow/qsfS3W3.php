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


    <div class="row" style="height:90%;">
      <div class="modal fade" id="prioBttnModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              Are you sure to serve new priority client?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" id="prioBtnCnfrmYes" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="reguBttnModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              Are you sure to serve new regular client?
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

      <!--SUGOD-->
      <div class="col-8">
        <div class="row h-100">

          <div class="col-lg-4" style="padding-right:0;">
            <div class="card" style="background: rgb(27, 75, 176, 0.9); border-top-left-radius:20px; border-bottom-right-radius:20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">REGULAR</h3>
              </div>
            </div>

            <div class="row m-0 h-100">
              <div class="card" style="background-color:#edf6f9; height:75vh;">
                <div class="card-body text-center overflow-auto" id="s3w3autoDQRegu">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" style="padding-right:0;">
            <div class="card" style="background: rgb(27, 75, 176, 0.9); border-top-left-radius:20px; border-bottom-right-radius:20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">PRIORITY</h3>
              </div>
            </div>

            <div class="row m-0 h-100">
              <div class="card" style="background-color:#edf6f9; height:75vh;">
                <div class="card-body text-center overflow-auto" id="s3w3autoDQPrio">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" style="padding-right:0;">
            <div class="card" style="background: rgb(27, 75, 176, 0.9); border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
              <div class="card-body text-center">
                <h3 class="qsfHeaderFont">PENDING</h3>
              </div>
            </div>
            <div class="row m-0 h-100">
              <div class="card" style="background-color:#edf6f9; height:75vh;">
                <div class="card-body text-center overflow-auto" id="s3w3autoDP">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="col-4 h-100">
        <div class="card" style="background: rgb(27, 75, 176, 0.9); border-bottom-right-radius: 20px; border-top-left-radius: 20px;">
          <div class="card-body text-center" style="border-radius:20px;">
            <h3 class="qsfHeaderFont">SERVING STEP 3 WINDOW 3</h3>
          </div>
        </div>

        <div class="row m-0 h-75">
          <div class="h-100 cardCstmS3" style="padding:0;">
            <img src=".\assets\resources\batik.PNG" alt="" style="width:100%; margin:0; display:block;">
            <div id="nowServHead" class="card-body" style="margin-top:5%;">
              <h4>DSWD FOXI</h4>
              <h4>PROTECTIVE SERVICE DIVISION</h4>
              <h4>CRISIS INTERVENTION SECTION</h4>
            </div>

            <div id="nowServ" class="card-body text-center h-75">
              <div class="col h-75 d-flex align-items-center justify-content-center" id="s3w3Serving">
              </div>
            </div>
            <img src=".\assets\resources\batikBLUE.PNG" alt="" style="width:100%; margin:0; display:block;">
          </div>
        </div>



        <div class="container">
          <div class="row">
            <div class="col">
              <button class="btn btn-primary btn-lg regular3dBtn my-2 w-100" onclick="s3w1ReguBtn()" id="s3w1nextReguID">
                <i class="bi bi-people-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-danger btn-lg priority3dBtn my-2 w-100" onclick="s3w1PrioBtn()" id="s3nextPrioID">
                <i class="bi bi-people" style="font-size: 2em;"></i>
              </button>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <button class="btn btn-secondary btn-lg skip3dBtn my-2 w-100" onclick="s3w1SkipBtn()" id="s3skipID">
                <i class="bi bi-skip-backward-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-secondary btn-lg call3dBtn my-2 w-100" onclick="callButton()" id="callBtnID">
                <i class="bi bi-volume-up-fill" style="font-size: 2em;"></i>
              </button>
            </div>

            <div class="col">
              <button class="btn btn-success btn-lg proceed3dBtn my-2 w-100" onclick="s3w1ProceedBtn()" id="s3proceedID">
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
  function S3loadPendingData() {
    $.ajax({
      url: '<?= base_url('s3w3QueReguRou'); ?>',
      type: 'GET',
      success: function(response) {
        var data = JSON.parse(response).data;
        var html = '';
        if (data && data.length > 0) {
          data.forEach(function(item) {
            html += `
                      <div class="d-grid gap-2 mt-1"> 
                          <button class="qsfS2PendingVal btn pe-none btnCstmRegularUpcoming">
                              R-${item.queue_num}
                          </button>
                      </div>
                    `;
          });
        } else {
          html = '<p>Empty</p>';
        }

        $('#s3w3autoDQRegu').html(html);
      },
      error: function(xhr, status, error) {
        console.error("Error fetching data:", error);
      }
    });

    $.ajax({
      url: '<?= base_url('s3w3QuePrioRou'); ?>',
      type: 'GET',
      success: function(response) {
        var data = JSON.parse(response).data;
        var html = '';
        if (data && data.length > 0) {
          data.forEach(function(item) {
            html += `
                      <div class="d-grid gap-2 mt-1"> 
                          <button class="qsfS2PendingVal btn pe-none btnCstmPriorityUpcoming">
                              P-${item.queue_num} 
                          </button>
                      </div>
                    `;
          });
        } else {
          html = '<p>Empty</p>';
        }

        $('#s3w3autoDQPrio').html(html);
      },
      error: function(xhr, status, error) {
        console.error("Error fetching data:", error);
      }
    });

    $.ajax({
      url: '<?= base_url('s3w3PendRou'); ?>',
      type: 'GET',
      success: function(response) {
        var data = JSON.parse(response).data;
        var html = '';
        if (data && data.length > 0) {
          data.forEach(function(item) {
            var btnClass = item.category === "REGULAR" ? "btnCstmRegularPending" : "btnCstmPriorityPending";
            var queueLabel = item.category === "REGULAR" ? `R-${item.queue_num}` : `P-${item.queue_num}`;
            html += `
                      <div class="d-grid gap-2 mt-1">
                          <button data-id="${item.id}" 
                              class="qsfS2PendingVal btn ${btnClass}"
                              onclick="bastaKuan(${item.id})">
                              ${queueLabel}
                          </button>
                      </div>
                    `;
          });
        } else {
          html = '<p>Empty</p>';
        }

        $('#s3w3autoDP').html(html);
      },
      error: function(xhr, status, error) {
        console.error("Error fetching data:", error);
      }
    });
  }


  function bastaKuan(id) {
    $('#pendingBttnModal').modal('show');
    $('#pendingBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('qsfS3UpdPend/') ?>' + id,
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
    S3loadPendingData();
    setInterval(S3loadPendingData, 1000);
  });
</script>



<script>
  $(document).ready(function() {
    loadStepFlow(); // Initial load
    setInterval(loadStepFlow, 1000); // Refresh every second
  });

  function loadStepFlow() {
    $.ajax({
      url: '<?= base_url('s3w3ServingRou') ?>',
      type: 'GET',
      success: function(data) {
        $('#s3w3Serving').html(data);
        if ($('#s3w3Serving').html().trim() !== '') {
          $('#s3w1nextReguID').prop('disabled', true);
          $('#s3nextPrioID').prop('disabled', true);
          $('#s3skipID').prop('disabled', false);
          $('#callBtnID').prop('disabled', false);
          $('#s3proceedID').prop('disabled', false);
        } else {
          $('#s3w1nextReguID').prop('disabled', false);
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
  }
</script>




<script>
  function s3w1ReguBtn() {
    $('#reguBttnModal').modal('show');
    $('#reguBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('s3w1RegBtnRou') ?>',
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


  function s3w1PrioBtn() {
    $('#prioBttnModal').modal('show');
    $('#prioBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('s3w1PrioBtnRou') ?>',
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

  function s3w1SkipBtn() {
    $('#skipBttnModal').modal('show');
    $('#skipBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('s3w1SkipRou') ?>',
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


  function s3w1ProceedBtn() {
    $('#proceedBttnModal').modal('show');
    $('#proceedBtnCnfrmYes').off('click').on('click', function() {
      $.ajax({
        url: '<?= base_url('s3w1ProceedRou') ?>',
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