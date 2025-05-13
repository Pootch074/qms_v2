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

                    <i id="toggleSpeechButton" style="font-size:20px; color: white; cursor:pointer; position:relative; margin-right:1%; background-color:#1b4bb0; border-radius:5px 5px 5px 5px; padding:5px 10px 5px 10px;" class="fas"></i>
                    <i id="volumeIcon" class="fas fa-volume-up"></i>
                    <i class="bi bi-volume-up-fill" style="font-size: 2em;"></i>

                    <input type="range" id="volumeSlider" min="0" max="1" step="0.01" value="0.1">

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
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.minQSD.js"></script>
<script src="<?= base_url('ui/') ?>assets/js/digitalClock.js"></script>
<script async src="https://app3.weatherwidget.org/js/?id=ww_bfc7f2428757d"></script>

<!-- Ensure this script is placed after the jQuery library is loaded -->
<script>
    // Define speakMessage globally or attach to window
    function speakMessage(message) {
        if ('speechSynthesis' in window) {
            let utterance = new SpeechSynthesisUtterance(message);

            utterance.lang = 'en-US'; // Ensure consistency with desiredLang
            utterance.pitch = 1;
            utterance.rate = 1;
            utterance.volume = 1;

            // Select the desired voice
            let selectedVoice = speechSynthesis.getVoices().find(voice => voice.lang === 'en-US') || speechSynthesis.getVoices()[0];
            utterance.voice = selectedVoice;

            utterance.onstart = () => {
                console.log('Speech synthesis started.');
            };
            utterance.onend = () => {
                console.log('Speech synthesis ended.');
            };
            utterance.onerror = (e) => {
                console.error('Speech synthesis error:', e);
            };
            window.speechSynthesis.speak(utterance);
        } else {
            console.warn('Speech Synthesis not supported in this browser.');
        }
    }

    $(document).ready(function() {
        // Initialize previous values as null
        let prevQueueNum = null;
        let prevCategory = null;

        // Initialize voices
        function loadVoices() {
            return new Promise((resolve) => {
                let voices = window.speechSynthesis.getVoices();
                if (voices.length !== 0) {
                    resolve(voices);
                } else {
                    window.speechSynthesis.onvoiceschanged = () => {
                        voices = window.speechSynthesis.getVoices();
                        resolve(voices);
                    };
                }
            });
        }

        async function initializeVoice() {
            await loadVoices();
            console.log(`Voice initialized.`);
        }

        initializeVoice();

        let currentQueueNum = null;
        let currentCategory = null;

        // Function to load queue data and handle speech synthesis
        function qsdLoadStepFlow() {
            $.ajax({
                url: '<?= base_url('qsdStep2Prio') ?>',
                type: 'GET',
                success: function(data) {
                    // Update the HTML content
                    $('#step2PrioID').html(data);

                    // Parse the queue_num and category from the returned HTML
                    let h1 = $('#step2PrioID h1');
                    if (h1.length > 0) {
                        let text = h1.text().trim();
                        let parts = text.split(' - ');

                        if (parts.length === 2) {
                            // Remove leading zeros from queue_num
                            currentQueueNum = parts[0].replace(/^0+/, '');
                            currentCategory = parts[1];

                            // Check if there's a change in queue_num or category
                            if (currentQueueNum !== prevQueueNum || currentCategory !== prevCategory) {
                                // Update previous values
                                prevQueueNum = currentQueueNum;
                                prevCategory = currentCategory;

                                // Construct the message
                                let message = `Client number ${currentQueueNum}, ${currentCategory}. Please proceed to step 2.`;
                                console.log(`New message: ${message}`);

                                // Trigger speech synthesis
                                speakMessage(message);
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching queue data:", error);
                }
            });
        }

        // Function to handle speech synthesis is already defined globally

        // Click event handler for the 'Call' button with dynamic message
        $('#callButton').on('click', function() {
            if (currentQueueNum && currentCategory) {
                const message = `Client number ${currentQueueNum}, ${currentCategory}. Please proceed to step 2.`;
                speakMessage(message);
            } else {
                speakMessage('No client information available to announce.');
            }
        });

        // Initial load and periodic updates
        qsdLoadStepFlow();
        setInterval(qsdLoadStepFlow, 2000);
    });
</script>