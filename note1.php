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
<script src="../assets/js/qsfdigitalClock.js"></script>


<!-- <script>
    var ass_category = '<?= $ass_category ?>'; // Pass PHP variable to JavaScript
</script> -->

<script>
    // General Modal Control Variables
    let selectedPendingId = null;
    let selectedPrioId = null;
    let selectedSkipId = null;
    let selectedProceedId = null;

    // ======================= Modal Control =======================
    function openModal(modalId) {
        document.getElementById(modalId).style.display = "block";
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }

    // ======================= Pending Client =======================
    function pendingBtnMdl(id) {
        selectedPendingId = id;
        openModal("pendingBtnMdl");
    }

    function closePendingModal() {
        closeModal("pendingBtnMdl");
        selectedPendingId = null;
    }

    // ======================= Priority Serve =======================
    function s2w1PrioBtn(id) {
        selectedPrioId = {
            id,
            route: 's2w1nextServe'
        };
        openModal("prioBttnModal");
    }

    function s2w2PrioBtn(id) {
        selectedPrioId = {
            id,
            route: 's2w2PrioBtnRou'
        };
        openModal("prioBttnModal");
    }

    function closePrioModal() {
        closeModal("prioBttnModal");
        selectedPrioId = null;
    }

    // ======================= Skip Client =======================
    function s2w1SkipPrioBtn(id) {
        selectedSkipId = {
            id,
            route: 's2w1nextSkip'
        };
        openModal("skipbttnModal");
    }

    function skipModal() {
        closeModal("skipbttnModal");
        selectedSkipId = null;
    }

    // ======================= Proceed Client =======================
    function s2w1ProceedPrioBtn(id) {
        selectedProceedId = {
            id,
            route: 's2w1ProceedPrioBtnRou'
        };
        openModal("proceedbttnModal");
    }

    function proceedModal() {
        closeModal("proceedbttnModal");
        selectedProceedId = null;
    }

    // ======================= AJAX Request Handler =======================
    function sendPostRequest(target, data, callback) {
        $.ajax({
            url: `<?= base_url(); ?>${target}`,
            type: 'POST',
            data,
            success: function(response) {
                console.log("Success:", response);
                callback();
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
                alert("There was an error. Please try again.");
            }
        });
    }

    // ======================= DOMContentLoaded Events =======================
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("pendingBtnCnfrmYes").addEventListener("click", function() {
            if (selectedPendingId) {
                sendPostRequest('s2w1updatePending/', {
                    id: selectedPendingId
                }, closePendingModal);
            }
        });

        document.getElementById("prioBtnCnfrmYes").addEventListener("click", function() {
            if (selectedPrioId) {
                sendPostRequest(selectedPrioId.route, {
                    id: selectedPrioId.id
                }, closePrioModal);
            }
        });

        document.getElementById("skipBtnCnfrmYes").addEventListener("click", function() {
            if (selectedSkipId) {
                sendPostRequest(selectedSkipId.route, {
                    id: selectedSkipId.id
                }, skipModal);
            }
        });

        document.getElementById("proceedBtnCnfrmYes").addEventListener("click", function() {
            if (selectedProceedId) {
                sendPostRequest(selectedProceedId.route, {
                    id: selectedProceedId.id
                }, proceedModal);
            }
        });

        // Load initial state and set refresh
        loadStepFlow();
        setInterval(loadStepFlow, 1000);
    });

    // ======================= Step Flow Loader =======================
    let isCallCooldown = false;

    function loadStepFlow() {
        const windows = ['s2w1', 's2w2'];
        windows.forEach(win => {
            $.ajax({
                url: `<?= base_url(); ?>${win}/serve`,
                type: 'GET',
                success: function(data) {
                    $(`#${win}serving`).html(data);
                    const isServing = $(`#${win}serving`).text().trim() !== '';
                    toggleButtons(isServing);
                }
            });
        });

        // s2w1-specific updates
        $.get('<?= base_url('s2w1/upcoming') ?>', data => $('#s2w1upcoming').html(data));
        $.get('<?= base_url('s2w1/pending') ?>', function(response) {
            const data = JSON.parse(response).data;
            let html = '';
            if (data && data.length > 0) {
                data.forEach(item => {
                    html += `
                        <div class="pendingQueues">
                            <button data-id="${item.id}" onclick="pendingBtnMdl(${item.id})">A${item.queue_num}</button>
                        </div>`;
                });
            }
            $('#s2w1pending').html(html);
        });
    }

    // ======================= Toggle Buttons =======================
    function toggleButtons(isServing) {
        const prio = $('#prioBtnID');
        const skip = $('#skipBtnID');
        const call = $('#callBtnID');
        const proceed = $('#proceedBtnID');

        if (isServing) {
            prio.prop('disabled', true).addClass('disabled-style');
            skip.prop('disabled', false).removeClass('disabled-style');
            if (!isCallCooldown) {
                call.prop('disabled', false).removeClass('disabled-style');
            }
            proceed.prop('disabled', false).removeClass('disabled-style');
        } else {
            prio.prop('disabled', false).removeClass('disabled-style');
            skip.prop('disabled', true).addClass('disabled-style');
            call.prop('disabled', true).addClass('disabled-style');
            proceed.prop('disabled', true).addClass('disabled-style');
        }
    }



    // ======================= Dropdown Toggle =======================
    const dropdown = document.getElementById('userDropdown');
    const button = dropdown.querySelector('.user-button');

    button.addEventListener('click', () => {
        dropdown.classList.toggle('active');
    });

    document.addEventListener('click', e => {
        if (!dropdown.contains(e.target)) {
            dropdown.classList.remove('active');
        }
    });
</script>