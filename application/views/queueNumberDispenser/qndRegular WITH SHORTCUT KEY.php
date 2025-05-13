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
      <!-- Right side columns -->
      <div class="col-lg-4">
        <!-- Sales Card -->
        <div class="col-xxl-12 col-md-12">
          <?php if (isset($grc) && !empty($grc)): ?>
            <?php foreach ($grc as $row): ?>

              <div onclick="queueClick('<?php echo $row->id; ?>')"
                id="<?php echo $row->id; ?>"
                class="card info-card sales-card btn qmsBlue"
                data-id="<?php echo $row->id; ?>"
                tabindex="0">

                <div class="card-body sales-card">
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





          <!-- Revenue Card -->
          <div class="col-xxl-6 col-md-6">
          </div><!-- End Revenue Card -->

          <div class="col-12 h-100">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Recent Clients <span>| Today</span></h5>

                <table class="display" id="fghj" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">Queue No.</th>
                      <th scope="col">Category</th>
                      <th scope="col">Date</th>
                      <th scope="col">Step</th>
                      <th scope="col">Status</th>
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
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>

<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

<script>
  $(document).ready(function() {

    var table = new DataTable('#fghj', {
      paging: false,
      scrollCollapse: true,
      scrollY: '500px',
      order: [
        [0, 'desc']
      ],
      ajax: '<?= base_url('jsonFetchRegu'); ?>',
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
          className: "text-center"
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


<script>
  function queueClick(id) {
    $('#confirmationModal').modal('show');
    $('#confirmYes').off('click').on('click', function() {
      $.ajax({
        url: "<?php echo site_url('addQueNumRegu'); ?>",
        type: "POST",
        dataType: "json",
        success: function(response) {
          if (response.success) {
            $('#confirmationModal').modal('hide');
            $('#printQueueNum').text(response.queue_num);
            $('#printQueueNumDate').text(response.date_time);
            $('#printQueueNumDate').text(response.date);
            printQueueNumber();
          } else {
            alert('Failed to add queue number.');
          }
        },
        error: function() {
          alert('Error processing request.');
        }
      });
    });
  }

  // Global keydown listener
  document.addEventListener('keydown', function(event) {
    if (event.key === 'p') { // Check if 'p' key is pressed
      // Get the ID of the card you want to trigger
      const cardId = 'yourCardId'; // Replace with your logic to get the correct ID
      queueClick(cardId); // Call the function directly with the ID
    }
  });

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
      <h1>${queueNumContent}</h1>
      <h2>REGULAR</h2>
      <h5>${queueDateContent}</h5>
      <br>
      <h5>========================</h5>
      <h5>========================</h5>
    </body>
  </html>
  `);
    printDocument.close();
    printIframe.contentWindow.print();
    setTimeout(() => {
      printIframe.contentWindow.print();
    }, 1000);
    printIframe.addEventListener('afterprint', () => {
      document.body.removeChild(printIframe);
    });
  }
</script>