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
    let selectedPendingId = null;

    function pendingBtnMdl(id) {
        selectedPendingId = id;
        document.getElementById("pendingBtnMdl").style.display = "block";
    }

    function closePendingModal() {
        document.getElementById("pendingBtnMdl").style.display = "none";
        selectedPendingId = null;
    }

    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("pendingBtnCnfrmYes").addEventListener("click", function() {
            if (selectedPendingId !== null) {
                $.ajax({
                    url: '<?= base_url('s2w1updatePending/'); ?>',
                    type: 'POST',
                    data: {
                        id: selectedPendingId
                    },
                    success: function(response) {
                        console.log("Client confirmed:", response);
                        closePendingModal();
                    },
                    error: function(xhr, status, error) {
                        console.error("Error confirming client:", error);
                        alert("There was an error. Please try again.");
                    }
                });
            }
        });
    });

    let selectedPrioId = null;

    function s2w1PrioBtn(id) {
        selectedPrioId = id;
        document.getElementById("prioBttnModal").style.display = "block";
    }

    function closePrioModal() {
        document.getElementById("prioBttnModal").style.display = "none";
        selectedPrioId = null;
    }

    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("prioBtnCnfrmYes").addEventListener("click", function() {
            if (selectedPrioId !== null) {
                $.ajax({
                    url: '<?= base_url('s2w1nextServe'); ?>',
                    type: 'POST',
                    data: {
                        id: selectedPrioId
                    },
                    success: function(response) {
                        console.log("Client confirmed:", response);
                        closePrioModal();
                    },
                    error: function(xhr, status, error) {
                        console.error("Error confirming client:", error);
                        alert("There was an error. Please try again.");
                    }
                });
            }
        });
    });


    // ================================== SKIP FUNCTIONS START ==================================
    let skipPrioId = null;

    function s2w1SkipPrioBtn(id) {
        skipPrioId = id;
        document.getElementById("skipbttnModal").style.display = "block";
    }

    function skipModal() {
        document.getElementById("skipbttnModal").style.display = "none";
        skipPrioId = null;
    }

    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("skipBtnCnfrmYes").addEventListener("click", function() {
            if (skipPrioId !== null) {
                $.ajax({
                    url: '<?= base_url('s2w1nextSkip'); ?>',
                    type: 'POST',
                    data: {
                        id: skipPrioId
                    },
                    success: function(response) {
                        console.log("Client confirmed:", response);
                        skipModal();
                    },
                    error: function(xhr, status, error) {
                        console.error("Error confirming client:", error);
                        alert("There was an error. Please try again.");
                    }
                });
            }
        });
    });

    // ================================== SKIP FUNCTIONS END ==================================


    let isCallCooldown = false;
    $(document).ready(function() {
        loadStepFlow();
        setInterval(loadStepFlow, 1000);
    });

    function loadStepFlow() {
        $.ajax({
            url: '<?= base_url('s2w1/serve') ?>',
            type: 'GET',
            success: function(data) {
                $('#s2w1serving').html(data);
                if ($('#s2w1serving').text().trim() !== '') {
                    // $('#prioBtnID').prop('disabled', true);
                    // $('#prioBtnID').prop('disabled', true).hide();

                    $('#prioBtnID').prop('disabled', true).addClass('disabled-style');
                    $('#skipBtnID').prop('disabled', false).removeClass('disabled-style');
                    if (!isCallCooldown) {
                        $('#callBtnID').prop('disabled', false).removeClass('disabled-style');
                    }
                    $('#proceedBtnID').prop('disabled', false).removeClass('disabled-style');
                } else {
                    // $('#prioBtnID').prop('disabled', false);
                    // $('#prioBtnID').prop('disabled', false).show();
                    $('#prioBtnID').prop('disabled', false).removeClass('disabled-style');
                    $('#skipBtnID').prop('disabled', true).addClass('disabled-style');
                    $('#callBtnID').prop('disabled', true).addClass('disabled-style');
                    $('#proceedBtnID').prop('disabled', true).addClass('disabled-style');
                }

            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
            }
        });

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
            url: '<?= base_url('s2w1/pending'); ?>', // Fetch data from server
            type: 'GET',
            success: function(response) {
                var data = JSON.parse(response).data; // Parse the JSON response
                var html = '';
                if (data && data.length > 0) {
                    data.forEach(function(item) {
                        html += `
                    <div class="pendingQueues">
                        <button data-id="${item.id}"
                            class=""
                            onclick="pendingBtnMdl(${item.id})">
                            A${item.queue_num}
                        </button>
                    </div>
              `;
                    });
                } else {
                    // html = '<p>Empty</p>';
                    html = '';
                }

                $('#s2w1pending').html(html);
            },
            error: function(xhr, status, error) {
                console.error("Error fetching data:", error); // Log any errors
            }
        });



    }
</script>

</body>

</html>