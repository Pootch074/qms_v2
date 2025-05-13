<style>
    .main{
        background-color:;
        height:84vh;

    }
    .sectionA {
        background-color:;
        height:100%;
    }
    .vnb {
        background-color:;
    }
    
</style>
<main id="main" class="main" 
style="background-color:; margin-top: 8vh;">

<!--
    <div class="pagetitle d-flex">

<h1>QMS</h1>
<nav>
  <ol class="breadcrumb">
      <li class="breadcrumb-item">TEXT</li>
      <li class="breadcrumb-item active">QMS</li>
  </ol>
</nav>
<h3>CRISIS INTERVENTION SECTION - STEP 1 WINDOW 1</h3>
    </div>
-->
    


    <section class="sectionA" style="background-color:red;">
    <div class="row h-100" style="background-color:red;">

    <div class="col-lg-4 vnb" style="background-color:orange;">
      <div class="card h-20">
        <div class="card-body text-center">
        <h3>STEP 1</h3>
        </div>
      </div>
      <div class="card h-50">
        <div id="nowServ" class="card-body text-center">
        <h3>NOW SERVING</h3>
            <p>No categories available.</p>
        </div>
      </div>
    </div>
      
    <div class="col-lg-3">
      <div class="card h-100">
        <div class="card-body">
            <h3 class="text-center">UPCOMING</h3>

            <?php if (isset($incoming) && !empty($incoming)): ?>
                <?php foreach ($incoming as $row): ?>
                    <div class="d-grid gap-2 mt-1">
                    <button class="btn btn-lg <?php echo ($row->category == 'PRIORITY') ? 'btn-danger' : 'btn-primary'; ?>">
                        <?php echo str_pad($row->queue_num, 3, '0', STR_PAD_LEFT); ?>
                        - <?php echo $row->category; ?>
                    </button>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No categories available.</p>
            <?php endif; ?>



        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card h-100">
        <div class="card-body">
            <h3 class="text-center">PENDING</h3>
            <?php if (isset($pending) && !empty($pending)): ?>
                <?php foreach ($pending as $row): ?>
                    <div class="d-grid gap-2 mt-1">

                    <button  class="btn btn-lg <?php echo ($row->category == 'PRIORITY') ? 'nxtPrio btn-danger' : ' nxtRegu btn-primary'; ?>">
                        <?php echo str_pad($row->queue_num, 3, '0', STR_PAD_LEFT); ?>
                        - <?php echo $row->category; ?>
                    </button>














                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No categories available.</p>
            <?php endif; ?>
        </div>
      </div>
    </div>

    

<div class="col-lg-2">
  <div class="card h-100">
    <div class="card-body text-center ">

      <button class="btn btn-secondary btn-lg defBtn w-100 my-2" onclick="skipButton()">
        <i class="bi bi-skip-backward-fill" style="font-size: 2em;"></i>
      </button>
      
      <button class="btn btn-primary btn-lg defBtn w-100 my-2">
        <i class="bi bi-volume-up-fill" style="font-size: 2em;"></i>
      </button>

      <button class="btn btn-primary btn-lg defBtn w-100 my-2" onclick="nextReguButton()">
        <i class="bi bi-people-fill" style="font-size: 2em;"></i>
      </button>

      <button class="btn btn-danger btn-lg defBtn w-100 my-2" onclick="nextPrioButton()">
        <i class="bi bi-people" style="font-size: 2em;"></i>
      </button>

      <button class="btn btn-success btn-lg defBtn w-100 my-2" onclick="proceedButton()">
        <i class="bi bi-check2-circle" style="font-size: 2em;"></i>
      </button>
      
    </div>
  </div>
</div>


<!--
    <div class="col-lg-2">
  <div class="card h-100">
            
            <div class="col-sm d-flex">
        <div class="card card-body flex-fill">
          <button class="btn btn-secondary btn-lg sKip" onclick="skipButton()">
          <i class="bi bi-skip-backward-fill" style="font-size: 2em;"></i></button>
        </div>
      </div>

      <div class="col-sm d-flex">
        <div class="card card-body flex-fill">
          
          <button class="btn btn-warning btn-lg cAll">
            <i class="bi bi-volume-up-fill" style="font-size: 2em;"></i>
          </button>
        </div>
      </div>

      <div class="col-sm d-flex">
        <div class="card card-body flex-fill">
          <button class="btn btn-primary btn-lg nxtRegu" onclick="nextReguButton()">
          <i class="bi bi-people-fill" style="font-size: 2em;"></i>
          </button>
        </div>
      </div>

      <div class="col-sm d-flex">
        <div class="card card-body flex-fill">
          <button class="btn btn-danger btn-lg nxtPrio" onclick="nextPrioButton()">
          <i class="bi bi-people" style="font-size: 2em;"></i></button>
        </div>
      </div>

      <div class="col-sm d-flex">
        <div class="card card-body flex-fill">
          <button class="btn btn-success btn-lg pRoceed">
          <i class="bi bi-check2-circle" style="font-size: 2em;"></i></button>
        </div>
      </div>
  </div>
</div>
    -->












    </div>
  </section>



            <!--
  <section class="sectionB">
    <div class="row">
    <div class="col-lg-12">
          <div class="row">

            <div class="col-sm d-flex">
              <div class="card card-body flex-fill">
                <button class="btn btn-secondary" onclick="skipButton()">SKIP</button>
              </div>
            </div>

            <div class="col-sm d-flex">
              <div class="card card-body flex-fill">
                <button class="btn btn-warning">CALL</button>
              </div>
            </div>


            <div class="col-sm d-flex">
              <div class="card card-body flex-fill">
                <button class="btn btn-primary" onclick="nextReguButton()">NEXT REGULAR</button>
              </div>
            </div>
            

            <div class="col-sm d-flex">
              <div class="card card-body flex-fill">
                <button class="btn btn-danger" onclick="nextPrioButton()">NEXT PRIORITY</button>
              </div>
            </div>

            <div class="col-sm d-flex">
              <div class="card card-body flex-fill">
                <button class="btn btn-success">PROCEED</button>
              </div>
            </div>

          </div>
        </div>
    </div>
  </section>
  -->
  
  
  
  </main>
  <script src="<?=base_url('assets/')?>plugins/jquery/jquery.min.js"></script>
  

<script> 
// REGULAR BUTTON STATUS = 1
  function nextReguButton() {
      $.ajax({
          url: '<?= base_url('nextRegularBtn') ?>', // URL of the controller method
          type: 'POST',
          success: function(response) {
              var data = JSON.parse(response);
              if (data.status === 'success') {
                  let rquenum = data.quenum;
                  //alert(data.catname);
                  $('#nowServ').html('<h3>NOW SERVING</h3><div class="d-grid gap-2 mt-1"><h1 id="' + data.quenum + '">' + rquenum.padStart(3,"0") + '<br>' + data.catname + '</h1></div></div>');
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
                  alert('Next Priority updated successfully!');
                  // You can also refresh the table or perform any other UI updates here
              }
          },
          error: function() {
              alert('Error while updating Next Regular');
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

