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



          <!-- Sales Card -->
          <div class="col-xxl-6 col-md-6">
            <?php if (isset($gpc) && !empty($gpc)): ?>
              <?php foreach ($gpc as $row): ?>

                <div onclick="catClick('<?php echo $row->id; ?>')" id="<?php echo $row->id; ?>" class="card info-card sales-card btn <?php echo (($row->category_name == 'PRIORITY') ? 'qmsRed' : 'qmsBlue') ?>">
                  <div class="card-body customers-card">
                    <h5 class="card-title"><span></span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <!--<h6><?php echo ($row->id); ?></h6>-->
                        <h6><?php echo ($row->category_name); ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <p>No categories available.</p>
            <?php endif; ?>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-6 col-md-6">

          </div><!-- End Revenue Card -->




          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Recent Clients <span>| Today</span></h5>

                <table class="table table-borderless datatable">
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
                    <tr></tr>
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->




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
            <h5 class="card-title">col-lg-4 Website Traffic <span>| Today</span></h5>

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

</main><!-- End #main -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    loadTransactions();
    setInterval(loadTransactions, 1000);
  });

  function loadTransactions() {

    $.ajax({
      url: '<?= base_url('qndFetchTransactions') ?>',
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
  function catClick(catName) { // function named 'catClick' that takes 'catName' as a parameter
    $.ajax({
      url: '<?php echo base_url('chooseCateg'); ?>',
      method: 'POST',
      data: {
        catName: catName
      },

      success: function(response) {
        window.location.href = '<?php echo base_url("pacdDivisions"); ?>';
      },
      error: function() {
        console.error('Failed to fetch sections.');
      }


    });
  }
</script>