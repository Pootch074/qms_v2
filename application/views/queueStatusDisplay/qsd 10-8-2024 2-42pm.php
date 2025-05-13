<style>
    .main{
        background-color:;
        height:84vh;

    }
    .sectionA {
        background-color:;
        height:100%;
    }
    
</style>
<main id="main" class="main" style="margin-top: 8vh; overflow:hidden;">
<div class="container-fluid h-100">
    
    <div class="row h-100 pt-1" style="background: rgb(12,48,128);
        background: linear-gradient(180deg, rgba(12,48,128,1) 0%, rgba(28,75,178,1) 82%, rgba(101,130,194,1) 100%);">

    <div class="col-2 text-center border d-flex flex-column" style="background:;">
        <?php if (isset($queStep) && !empty($queStep)):?>
            <?php foreach ($queStep as $row): ?>
                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-center">
                    <h2 class="qsdStepFont">
                        <?php echo $row->step_number; ?>
                    </h2>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No steps available.</p>
        <?php endif; ?>
    </div>


  <div class="col-4 text-center border d-flex flex-column" style="background-color:;">
          <!--GIKAN SA PacdController.php-->
          <?php if (isset($queNumber) && !empty($queNumber)): ?> <!-- ICHECK NIYA ANG VARIABLE NA $queNumber IF SET UG NOT NULL AND DILI SYA EMPTY-->
            <?php foreach ($queNumber as $row): ?> 
            <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-center">
                <h2 class="qsdNumFont">
                    <?php echo str_pad($row->queue_num, 3, '0', STR_PAD_LEFT); ?>
                    <br>
                    <?php echo $row->category; ?>
                </h2>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No queues available.</p>
        <?php endif; ?>
    </div>



    <div class="col-6 text-center border" style="background: rgb(12,48,128); background: linear-gradient(180deg, rgba(12,48,128,1) 0%, rgba(28,75,178,1) 82%, rgba(101,130,194,1) 100%);">
          <div class="cardCstm flex-grow-1 mb-1 d-flex">
            <video width="100%" height="auto%" controls>
                <source src="assets\resources\qsdVideos\vid2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
          </div>

          <div class="card mb-1 d-flex align-items-center">
            <div class="clock">
                <!-- Hours -->
                <div class="hours">
                    <div class="first">
                    <div class="number">0</div>
                    </div>
                    <div class="second">
                    <div class="number">0</div>
                    </div>
                </div>
                <!-- Separator -->
                <div class="tick">:</div>
                <!-- Minutes -->
                <div class="minutes">
                    <div class="first">
                    <div class="number">0</div>
                    </div>
                    <div class="second">
                    <div class="number">0</div>
                    </div>
                </div>
                <!-- Separator -->
                <div class="tick">:</div>
                <!-- Seconds -->
                <div class="seconds">
                    <div class="first">
                    <div class="number">0</div>
                    </div>
                    <div class="second infinite">
                    <div class="number">0</div>
                    </div>
                </div>
                <!-- AM/PM Indicator -->
                <div class="am-pm">AM</div>
                </div>
                <div id="ww_bfc7f2428757d" v='1.3' loc='id' a='{"t":"responsive","lang":"en","sl_lpl":1,"ids":["wl860"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722","el_wfc":3}'><a href="https://weatherwidget.org/" id="ww_bfc7f2428757d_u" target="_blank">Widget weather</a></div>
          </div>
    </div>



</div>
    
</div>
  
</main>
  
<script src="<?=base_url('assets/')?>plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url('ui/')?>assets/js/digitalClock.js"></script>

<script async src="https://app3.weatherwidget.org/js/?id=ww_bfc7f2428757d"></script>

  
