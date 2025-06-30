<div class="footer">
    <span>"Pusong Dabawenyo, Serbisyong May Malasakit At Totoo." © Copyright <a href="https://fo11.dswd.gov.ph/" style="color:#0096FF;">DSWD</a>. All Rights Reserved</span>
</div>


<script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/chart.js/chart.umd.js"></script>
<script src="../assets/vendor/echarts/echarts.min.js"></script>
<script src="../assets/vendor/quill/quill.js"></script>


<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>

<script src="../assets/js/main.js"></script>
<!-- <script src="../assets/js/dataTables.js"></script> -->
<!-- <script src="../assets/js/qsfdigitalClock.js"></script> -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>


<!-- <script>
    var ass_category = '<?= $ass_category ?>'; // Pass PHP variable to JavaScript
</script> -->
<script>
    let isCallCooldown = false;

    $(document).ready(function() {
        loadStepFlow();
        setInterval(loadStepFlow, 1000);
    });

    function loadStepFlow() {
        $.ajax({
            url: '<?= base_url('s2w1/upcoming') ?>',
            type: 'GET',
            success: function(data) {
                $('#s2w1upcoming').html(data);
            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
            }
        });

        $.ajax({
            url: '<?= base_url('s2w1/pending') ?>',
            type: 'GET',
            success: function(data) {
                $('#s2w1pending').html(data);
            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
            }
        });


        $.ajax({
            url: '<?= base_url('s2w1/serve') ?>',
            type: 'GET',
            success: function(data) {
                $('#s2w1serving').html(data);
                if ($('#s2w1serving').html().trim() !== '') {
                    $('#prioBtnID').prop('disabled', true);
                    $('#skipBtnID').prop('disabled', false);
                    if (!isCallCooldown) {
                        $('#callBtnID').prop('disabled', false);
                    }
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


    }
</script>

</body>

</html>