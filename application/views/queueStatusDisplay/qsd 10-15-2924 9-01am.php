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
                    <div class="speech" id="speechID">

                    </div>


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

<!--C:\laragon\www\qms\application\views\queueStatusDisplay\ascend.mp3-->
<audio id="audioPlayer" src="assets\resources\ascend.mp3"></audio>

<script>
    function speakMessage(message) { // Function to handle speech synthesis of a given message
        var audioPlayer = document.getElementById('audioPlayer');
        audioPlayer.play();


        function onAudioEnded() { // Define a handler for when the audio ends
            audioPlayer.removeEventListener('ended', onAudioEnded); // Remove ang event listener to prevent multiple triggers
            setTimeout(function() { // Wait for 100 ms before initiating speech synthesis
                if ('speechSynthesis' in window) { // Check if the browser supports the Speech Synthesis API
                    let utterance = new SpeechSynthesisUtterance(message); // Create a new utterance
                    utterance.lang = 'en-US'; // Set the language to English (US)
                    utterance.pitch = 1; // Set the pitch (1 is default)
                    utterance.rate = 0.7; // Set the rate (0.7 is slower than normal)
                    utterance.volume = 1; // Set the volume (1 is maximum)
                    let voices = speechSynthesis.getVoices(); // Load voices and select a specific one
                    if (voices.length === 0) {
                        speechSynthesis.onvoiceschanged = () => { // Some browsers might not have voices loaded immediately
                            voices = speechSynthesis.getVoices();
                            if (voices.length > 2) {
                                utterance.voice = voices[2]; // Select the third voice in the list
                            }
                            window.speechSynthesis.speak(utterance);
                        };
                    } else {
                        if (voices.length > 2) {
                            utterance.voice = voices[2]; // Select the third voice in the list
                        }
                        window.speechSynthesis.speak(utterance);
                    }
                    utterance.onstart = () => { // Event handlers for the utterance
                        console.log('Speech synthesis started.');
                    };
                    utterance.onend = () => {
                        console.log('Speech synthesis ended.');
                    };
                    utterance.onerror = (e) => {
                        console.error('Speech synthesis error:', e);
                    };
                } else {
                    console.warn('Speech Synthesis not supported in this browser.'); // Warn the user if Speech Synthesis is not supported
                }
            }, 100); // Wait for 100 ms before initiating speech synthesis
        }
        audioPlayer.addEventListener('ended', onAudioEnded); // Add the event listener for when the audio ends
    }
    $(document).ready(function() { // Ensure the DOM is fully loaded before executing the script
        let prevQueueNum = null; // Variables to store the previous queue number and category
        let prevCategory = null;

        function loadVoices() { // Function to load available voices, ensuring they're ready before use
            return new Promise((resolve) => {
                let voices = window.speechSynthesis.getVoices(); // Get the list of available voices
                if (voices.length !== 0) { // If voices are already loaded, resolve the promise
                    resolve(voices);
                } else {
                    window.speechSynthesis.onvoiceschanged = () => { // Otherwise, wait for the voices to change (load) and then resolve
                        voices = window.speechSynthesis.getVoices();
                        resolve(voices);
                    };
                }
            });
        }

        async function initializeVoice() { // Asynchronous function to initialize voice settings
            await loadVoices(); // Wait for voices to load
            console.log(`Voice initialized.`);
        }

        initializeVoice(); // Call the function to initialize voices
        let currentQueueNum = null; // Variables to store the current queue number and category
        let currentCategory = null;

        function qsdLoadStepFlow() {
            function handleQueueData(url, elementID) { // Helper function for AJAX and data processing
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        $(elementID).html(data); // Update the HTML content of the element
                        let h1 = $(elementID + ' h1'); // Select the first <h1> element within the element
                        if (h1.length > 0) {
                            let text = h1.text().trim();
                            let parts = text.split(' - '); // Split the text by ' - '
                            if (parts.length === 2) {
                                currentQueueNum = parts[0];
                                currentCategory = parts[1];
                                if (currentQueueNum !== prevQueueNum || currentCategory !== prevCategory) {
                                    prevQueueNum = currentQueueNum;
                                    prevCategory = currentCategory;
                                    let message = `Client number, ${currentQueueNum} ${currentCategory}. Please proceed to step 2.`;
                                    console.log(`New message: ${message}`);
                                    speakMessage(message); // Announce the message
                                }
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching queue data:", error);
                    }
                });
            }

            handleQueueData('<?= base_url('qsdStep2Prio') ?>', '#step2PrioID'); // Fetch qsdStep2Prio data
            handleQueueData('<?= base_url('qsdStep2Regu') ?>', '#step2ReguID'); // Fetch qsdStep2Regu data

            $.ajax({
                url: '<?= base_url('qsdStep3') ?>',
                type: 'GET',
                success: function(data) {
                    $('#qsdDSStep3').html(data);
                    let h1 = $('#qsdDSStep3 h1'); // Select the first <h1> element within the element
                    if (h1.length > 0) {
                        let text = h1.text().trim();
                        let parts = text.split(' - '); // Split the text by ' - '
                        if (parts.length === 2) {
                            currentQueueNum = parts[0];
                            currentCategory = parts[1];
                            if (currentQueueNum !== prevQueueNum || currentCategory !== prevCategory) {
                                prevQueueNum = currentQueueNum;
                                prevCategory = currentCategory;
                                let message = `Client number, ${currentQueueNum} ${currentCategory}. Please proceed to step 3.`;
                                console.log(`New message: ${message}`);
                                speakMessage(message); // Announce the message
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error: " + error);
                }
            });
            /*

            */
            $.ajax({
                url: '<?= base_url('qsdStep4') ?>', // NAA SULOD
                type: 'GET',
                success: function(data) {
                    $('#qsdDSStep4').html(data);
                    let h1 = $('#qsdDSStep4 h1'); // Select the first <h1> element within the element
                    if (h1.length > 0) {
                        let text = h1.text().trim();
                        let parts = text.split(' - '); // Split the text by ' - '
                        if (parts.length === 2) {
                            currentQueueNum = parts[0];
                            currentCategory = parts[1];
                            if (currentQueueNum !== prevQueueNum || currentCategory !== prevCategory) {
                                prevQueueNum = currentQueueNum;
                                prevCategory = currentCategory;
                                let message = `Client number, ${currentQueueNum} ${currentCategory}. Please proceed to step 4.`;
                                console.log(`New message: ${message}`);
                                speakMessage(message); // Announce the message
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error: " + error);
                }
            });
        }
        qsdLoadStepFlow(); // Initial call to load the queue and priority data
        setInterval(qsdLoadStepFlow, 2000); // Set up a periodic call to qsdLoadStepFlow every 2000 milliseconds (2 seconds)
    });
</script>