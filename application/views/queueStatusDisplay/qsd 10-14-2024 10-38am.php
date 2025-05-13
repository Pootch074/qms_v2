<style>
    .main {
        height: 84vh;
    }

    .sectionA {
        height: 100%;
    }
</style>
<main id="main" class="main" style="margin-top: 8vh; overflow:hidden;">
    <div class="container-fluid h-100">
        <div class="row h-100 pt-1" style="background: rgb(12,48,128); background: linear-gradient(180deg, rgba(12,48,128,1) 0%, rgba(28,75,178,1) 82%, rgba(101,130,194,1) 100%);">
            <div class="col-6 text-center border d-flex flex-column" style="background:;">








                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-between" style="background-color:;">
                    <div class="col col-lg-4 h-100 d-flex align-items-center justify-content-center" style="background-color:;">
                        <h2 class=" qsdStepFont">
                            2
                        </h2>
                    </div>

                    <div class="col col-lg-8 h-100 d-flex align-items-center justify-content-center" id="step2PrioID" style="background-color:;">
                    </div>
                </div>

                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-between" style="background-color:;">
                    <div class="col col-lg-4 h-100 d-flex align-items-center justify-content-center" style="background-color:;">
                        <h2 class=" qsdStepFont">
                            2
                        </h2>
                    </div>

                    <div class="col col-lg-8 h-100 d-flex align-items-center justify-content-center" id="step2ReguID" style="background-color:;">
                    </div>
                </div>
                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-between" style="background-color:;">
                    <div class="col col-lg-4 h-100 d-flex align-items-center justify-content-center" style="background-color:;">
                        <h3 class=" qsdStepFont">
                            3
                        </h3>
                    </div>

                    <div class="col col-lg-8 h-100 d-flex align-items-center justify-content-center" id="qsdDSStep3" style="background-color:;">
                    </div>
                </div>
                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-between" style="background-color:;">
                    <div class="col col-lg-4 h-100 d-flex align-items-center justify-content-center" style="background-color:;">
                        <h4 class=" qsdStepFont">
                            4
                        </h4>
                    </div>

                    <div class="col col-lg-8 h-100 d-flex align-items-center justify-content-center" id="qsdDSStep4" style="background-color:;">

                    </div>
                </div>






            </div>
            <div class="col-6 text-center border" style="background: rgb(12,48,128); background: linear-gradient(180deg, rgba(12,48,128,1) 0%, rgba(28,75,178,1) 82%, rgba(101,130,194,1) 100%);">
                <div class="cardCstm flex-grow-1 mb-1 d-flex">
                    <video width="100%" height="auto%" controls>
                        <source src="assets\resources\qsdVideos\dswd.mp4" type="video/mp4">
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

<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('ui/') ?>assets/js/digitalClock.js"></script>

<script async src="https://app3.weatherwidget.org/js/?id=ww_bfc7f2428757d"></script>

<script>
    $(document).ready(function() {
        qsdLoadStepFlow(); // Initial load
        setInterval(qsdLoadStepFlow, 2000); // Refresh every second
    });
    //refresh the upcoming column every second:
    function qsdLoadStepFlow() {
        /**/
        $.ajax({
            url: '<?= base_url('qsdStep2Prio') ?>',
            type: 'GET',
            success: function(data) {
                $('#step2PrioID').html(data);
            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
            }
        });

        $.ajax({
            url: '<?= base_url('qsdStep2Regu') ?>',
            type: 'GET',
            success: function(data) {
                $('#step2ReguID').html(data);
            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
            }
        });



        $.ajax({
            url: '<?= base_url('qsdStep3') ?>',
            type: 'GET',
            success: function(data) {
                $('#qsdDSStep3').html(data);
            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
            }
        });

        $.ajax({
            url: '<?= base_url('qsdStep4') ?>',
            type: 'GET',
            success: function(data) {
                $('#qsdDSStep4').html(data);
            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
            }
        });
    }
</script>