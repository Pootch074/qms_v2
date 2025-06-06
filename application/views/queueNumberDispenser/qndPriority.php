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
        <li class="breadcrumb-item active"><?php echo $zxcvbnm; ?></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Right side columns -->
      <div class="col-lg-4">
        <!-- Sales Card -->
        <div class="col-xxl-12 col-md-12">
          <?php if (isset($zxcvbnm) && !empty($zxcvbnm)): ?>
            <div onclick="queueClick('<?php echo $zxcvbnm; ?>')" id="<?php echo $zxcvbnm; ?>" class="card info-card customers-card btn qmsRed">
              <div class="card-body customers-card">
                <h5 class="card-title"><span></span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h1 class="queueCat"><?php echo $zxcvbnm; ?></h1>
                  </div>
                </div>
              </div>
            </div>
          <?php else: ?>
            <p>No categories available.</p>
          <?php endif; ?>
        </div>




      </div><!-- End Right side columns -->

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
                <div class="modal-body text-center">
                  Add and print new client number?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <button type="button" id="confirmYes" class="btn btn-primary">Yes</button>
                </div>
              </div>
            </div>
          </div>





          <!-- Revenue Card -->
          <div class="col-xxl-6 col-md-6">
          </div><!-- End Revenue Card -->


          <!-- Recent Sales -->
          <div class="col-12 h-100">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Recent Clients <span>| Today</span></h5>

                <table class="display" id="ptyuz" style="width:100%">
                  <thead>
                    <tr>
                      <th class="text-center">Queue No.</th>
                      <th class="text-center">Category</th>
                      <th class="text-center">Date</th>
                      <th class="text-center">Step</th>
                      <th class="text-center">Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Left side columns -->
    </div>
  </section>
  <div id="printQueueNum" style="display: none;"></div>
  <div id="printQueueNumDate" style="display: none;"></div>
</main><!-- End #main -->
<script src="./assets/qnd/plugins/jquery/jquery.min.js"></script>

<!-- START FETCHING ROW VALUES -->
<script>
  $(document).ready(function() {

    var table = new DataTable('#ptyuz', {
      paging: false,
      scrollCollapse: true,
      scrollY: '500px',
      order: [
        [0, 'desc']
      ],
      ajax: '<?= base_url('jsonFetchPrio'); ?>',
      columns: [{
          data: "queue_num",
          className: "text-center"
        },
        {
          data: "category",
          className: "text-center"
        },
        {
          data: "datetoday",
          className: "text-center"
        },
        {
          data: "step_id",
          className: "text-center",
          render: function(data, type, row) {
            if (data == 2) {
              return '2 ENCODING';
            } else if (data == 3) {
              return '3 ASSESMENT';
            } else if (data == 4) {
              return '4 RELEASING';
            } else {
              return '<span class="status-default">' + data + '</span>';

            }
          }
        },
        {
          data: "status",
          className: "text-center",
          render: function(data, type, row) {
            if (data == 0) {
              return '<span class="status-waiting">WAITING</span>';
            } else if (data == 1) {
              return '<span class="status-serving">SERVING</span>';
            } else if (data == 2) {
              return '<span class="status-pending">PENDING</span>';
            } else {
              // return data;
              return '<span class="status-default">' + data + '</span>';

            }
          }
        }
      ]
    });


    // Use setInterval to refresh the table data every second (1000 ms)
    setInterval(function() {
      table.ajax.reload(null, false); // Reloads table data without resetting pagination
    }, 1000);
  });
</script>
<!-- END FETCHING ROW VALUES -->


<!-- START TICKET LAYOUT -->
<script>
  function queueClick(id) {
    $('#confirmationModal').modal('show'); // Show a modal with the id `confirmationModal` to confirm the action.
    $('#confirmYes').off('click').on('click', function() { // Remove any existing `click` handlers from the element with id `confirmYes`, then attach a new `click` event handler.
      $.ajax({ // Start an AJAX request.
        url: "<?php echo site_url('addQueNumPrio'); ?>", // Set the URL for the AJAX request to a PHP site URL.
        type: "POST", // Specify the request type as POST.
        dataType: "json", // Expect the server's response in JSON format.

        success: function(response) { // Define a callback function that runs if the request is successful.
          if (response.success) { // Check if the response indicates success.
            $('#confirmationModal').modal('hide'); // Hide the `confirmationModal`.
            $('#printQueueNum').text(response.queue_num); // Display the queue number.
            $('#printQueueNumDate').text(response.date_time);

            // Add the date to the print section
            $('#printQueueNumDate').text(response.date); // Display the date from the response.

            printQueueNumber(); // Call the function to print the queue number.
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

  function printQueueNumber() {
    // Get the queue number and date content
    let queueNumContent = document.getElementById('printQueueNum').innerHTML;
    queueNumContent = queueNumContent.padStart(3, '0'); // Pads to "001" if the number is "1"
    let queueDateContent = document.getElementById('printQueueNumDate').innerHTML;

    // Create a hidden iframe to hold the printable content
    const printIframe = document.createElement('iframe');
    printIframe.style.position = 'absolute';
    printIframe.style.width = '0';
    printIframe.style.height = '0';
    printIframe.style.border = 'none';

    // Append the iframe to the document body
    document.body.appendChild(printIframe);

    // Add content to the iframe with custom styles for thermal printing
    const printDocument = printIframe.contentDocument || printIframe.contentWindow.document;
    printDocument.open();
    printDocument.write(`
  <html>
    <head>
      <title>Print Queue Number</title>
      <style>
        @page {
          size: 58mm 70mm;
          margin: 0;
        }
        body {
          font-family: Arial, sans-serif;
          width: 58mm;
          height: 70mm;
          margin: 0;
          padding: 0;
          text-align: center;
        }
        h1, h2, h5 {
          margin: 2px 0;
          padding: 0;
          line-height: 1.1;
        }
        h1 {
          font-size: 4em;
        }
        h6 { line-height: 2; }
      </style>
    </head>
    <body>
      <br>
      <h5>DSWD FOXI</h5>
      <h5>PROTECTIVE SERVICE DIVISION</h5>
      <h5>CRISIS INTERVENTION SECTION</h5>
      <h1>P-${queueNumContent}</h1>
      <h5>${queueDateContent}</h5>
      <br>
      <h5>========================</h5>
      <h5>========================</h5>
    </body>
  </html>
  `);
    printDocument.close();

    // Trigger the first print
    printIframe.contentWindow.print();

    // Trigger the second print after a short delay
    setTimeout(() => {
      printIframe.contentWindow.print();
    }, 1000); // Adjust the delay as needed

    // Remove the iframe after printing
    printIframe.addEventListener('afterprint', () => {
      document.body.removeChild(printIframe);
    });
  }
</script>
<!-- END TICKET LAYOUT -->