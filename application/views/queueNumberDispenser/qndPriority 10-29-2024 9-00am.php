<style>
  .main {
    margin-top: 8vh;
    height: 92vh;
  }
</style>
<main id="main" class="main p-4">
  <?php
  $fname = $this->session->userdata('fname');
  $lname = $this->session->userdata('lname');
  ?>
  <div class="pagetitle">
    <?php
    if ($fname && $lname) {
      echo '<h1>
      ' . ($sctn) . '
    </h1>';
    } else {
      echo 'Guest';
    }
    ?>

    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Queue Number Dispenser</li>
        <li class="breadcrumb-item active"><?php echo $ac; ?></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Modal -->
          <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel">Confirmation</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Add and print new client number?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <button type="button" id="confirmYes" class="btn btn-primary">Yes</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Sales Card -->
          <div class="col-xxl-12 col-md-12">
            <?php if (isset($gpc) && !empty($gpc)): ?>
              <?php foreach ($gpc as $row): ?>
                <div onclick="queueClick('<?php echo $row->id; ?>')" id="<?php echo $row->id; ?>" class="card info-card customers-card btn qmsRed">
                  <div class="card-body customers-card">
                    <h5 class="card-title"><span></span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo ($row->category_name); ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <p>No categories available.</p>
            <?php endif; ?>
          </div>



          <!-- Revenue Card -->
          <div class="col-xxl-6 col-md-6">
          </div><!-- End Revenue Card -->


          <!-- Recent Sales -->
          <div class="col-12 h-100">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Recent Clients <span>| Today</span></h5>

                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">Queue No.</th>
                      <th scope="col">Category</th>
                      <th scope="col">Date</th>
                      <th scope="col">Step</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody id="autoDispTrans">
                    <tr>
                    </tr>
                  </tbody>
                </table>

              </div>

            </div>
          </div>


        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Website Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Website Traffic <span>| Today</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'Search Engine'
                      },
                      {
                        value: 735,
                        name: 'Direct'
                      },
                      {
                        value: 580,
                        name: 'Email'
                      },
                      {
                        value: 484,
                        name: 'Union Ads'
                      },
                      {
                        value: 300,
                        name: 'Video Ads'
                      }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div><!-- End Website Traffic -->

      </div><!-- End Right side columns -->

    </div>
  </section>
  <div id="printQueueNum" style="display: none;"></div>

</main><!-- End #main -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    loadTransactions();
    setInterval(loadTransactions, 1000);
  });

  function loadTransactions() {

    $.ajax({
      url: '<?= base_url('qndPrioFetch') ?>',
      type: 'GET',
      success: function(data) {
        $('#autoDispTrans').html(data);
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });

  }
</script>


<script>
  function queueClick(id) { // Define a function named `queueClick` that takes an argument `id`.
    $('#confirmationModal').modal('show'); // Show a modal with the id `confirmationModal` to confirm the action.
    $('#confirmYes').off('click').on('click', function() { // Remove any existing `click` handlers from the element with id `confirmYes`, then attach a new `click` event handler.
      $.ajax({ // Start an AJAX request.
        url: "<?php echo site_url('addQueNum'); ?>", // Set the URL for the AJAX request to a PHP site URL.
        type: "POST", // Specify the request type as POST.
        dataType: "json", // Expect the server's response in JSON format.

        success: function(response) { // Define a callback function that runs if the request is successful.
          if (response.success) { // Check if the response indicates success.
            $('#confirmationModal').modal('hide'); // Hide the `confirmationModal` modal.
            $('#printQueueNum').text('Queue Number: ' + response.queue_num); // Display the queue number from the response in the element with id `printQueueNum`.
            printQueueNumber(); // Call the `printQueueNumber` function to print the queue number.
          } else { // If the request is not successful.
            alert('Failed to add queue number.'); // Display an alert with a failure message.
          }
        },
        error: function() { // Define a callback function that runs if the request fails.
          alert('Error processing request.'); // Display an alert with an error message.
        }
      });
    });
  }

  // Function to print the queue number without opening a new window
  function printQueueNumber() {
    // Get the content to print
    const queueNumContent = document.getElementById('printQueueNum').innerHTML;

    // Save the current page content to restore after printing
    const originalContent = document.body.innerHTML;

    // Set up the print content on the current page
    document.body.innerHTML = `
    <html>
      <head>
        <title>Print Queue Number</title>
        <style>
          h1 { font-size: 3em; } // Larger font for visibility
        </style>
      </head>
      <body>
        <h1>${queueNumContent}</h1>
        <h1>${queueNumContent}</h1>
        <h1>${queueNumContent}</h1>
      </body>
    </html>
  `;

    // Open the print dialog
    window.print();

    // Restore the original page content
    document.body.innerHTML = originalContent;

    // Reload any JavaScript or state required for the page to function as expected
    location.reload();
  }
</script>