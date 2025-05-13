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

</script>




<script>
    // Function to handle speech synthesis of a given message
    function speakMessage(message) {
        var audioPlayer = document.getElementById('audioPlayer');
        audioPlayer.play();

        // Define a handler for when the audio ends
        function onAudioEnded() {
            // Remove the event listener to prevent multiple triggers
            audioPlayer.removeEventListener('ended', onAudioEnded);

            // Wait for 5 seconds before initiating speech synthesis
            setTimeout(function() {
                // Check if the browser supports the Speech Synthesis API
                if ('speechSynthesis' in window) {
                    let utterance = new SpeechSynthesisUtterance(message); // Create a new utterance
                    utterance.lang = 'en-US'; // Set the language to English (US)
                    utterance.pitch = 1; // Set the pitch (1 is default)
                    utterance.rate = 0.7; // Set the rate (0.7 is slower than normal)
                    utterance.volume = 1; // Set the volume (1 is maximum)

                    // Load voices and select a specific one
                    let voices = speechSynthesis.getVoices();
                    if (voices.length === 0) {
                        // Some browsers might not have voices loaded immediately
                        speechSynthesis.onvoiceschanged = () => {
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

                    // Event handlers for the utterance
                    utterance.onstart = () => {
                        console.log('Speech synthesis started.');
                    };

                    utterance.onend = () => {
                        console.log('Speech synthesis ended.');
                    };

                    utterance.onerror = (e) => {
                        console.error('Speech synthesis error:', e);
                    };
                } else {
                    // Warn the user if Speech Synthesis is not supported
                    console.warn('Speech Synthesis not supported in this browser.');
                }
            }, 100); // 1000 milliseconds = 5 seconds
        }

        // Add the event listener for when the audio ends
        audioPlayer.addEventListener('ended', onAudioEnded);
    }

    // Ensure the DOM is fully loaded before executing the script
    $(document).ready(function() {
        // Variables to store the previous queue number and category
        let prevQueueNum = null;
        let prevCategory = null;

        // Function to load available voices, ensuring they're ready before use
        function loadVoices() {
            return new Promise((resolve) => {
                // Get the list of available voices
                let voices = window.speechSynthesis.getVoices();

                // If voices are already loaded, resolve the promise
                if (voices.length !== 0) {
                    resolve(voices);
                } else {
                    // Otherwise, wait for the voices to change (load) and then resolve
                    window.speechSynthesis.onvoiceschanged = () => {
                        voices = window.speechSynthesis.getVoices();
                        resolve(voices);
                    };
                }
            });
        }

        // Asynchronous function to initialize voice settings
        async function initializeVoice() {
            await loadVoices(); // Wait for voices to load
            console.log(`Voice initialized.`);
        }

        // Call the function to initialize voices
        initializeVoice();

        // Variables to store the current queue number and category
        let currentQueueNum = null;
        let currentCategory = null;

        // Function to load and handle queue and priority data
        function qsdLoadStepFlow() {

            // Second AJAX request to fetch qsdStep2Prio data
            $.ajax({
                url: '<?= base_url('qsdStep2Prio') ?>', // AJAX URL generated by server-side code
                type: 'GET', // Using GET method for the request
                success: function(data) {
                    // On success, update the HTML content of the element with ID 'step2PrioID'
                    $('#step2PrioID').html(data);

                    // Select the first <h1> element within '#step2PrioID'
                    let h1 = $('#step2PrioID h1');

                    // Check if the <h1> element exists
                    if (h1.length > 0) {
                        // Get and trim the text content of the <h1> element
                        let text = h1.text().trim();

                        // Split the text by ' - ' to separate queue number and category
                        let parts = text.split(' - ');

                        // Ensure that the split resulted in exactly two parts
                        if (parts.length === 2) {
                            // Assign the first part to currentQueueNum and the second to currentCategory
                            currentQueueNum = parts[0];
                            currentCategory = parts[1];

                            // Check if the current queue number or category has changed from the previous values
                            if (currentQueueNum !== prevQueueNum || currentCategory !== prevCategory) {
                                // Update the previous queue number and category with the current values
                                prevQueueNum = currentQueueNum;
                                prevCategory = currentCategory;

                                // Construct the message to be spoken
                                let message = `Client number, ${currentQueueNum} ${currentCategory}. Please proceed to step 2.`;
                                console.log(`New message: ${message}`);

                                // Invoke the speakMessage function to announce the new client
                                speakMessage(message);
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    // Log any errors that occur during the request
                    console.error("Error fetching queue data:", error);
                }
            });
        }

        // Event listener for the button with ID 'callButton' to manually trigger an announcement
        $('#callButton').on('click', function() {
            // Check if currentQueueNum and currentCategory have valid values
            if (currentQueueNum && currentCategory) {
                // Construct the announcement message
                const message = `Client number ${currentQueueNum}, ${currentCategory}. Please proceed to step 2.`;

                // Invoke the speakMessage function to announce the client
                speakMessage(message);
            } else {
                // If no client information is available, announce accordingly
                speakMessage('No client information available to announce.');
            }
        });

        // Initial call to load the queue and priority data
        qsdLoadStepFlow();

        // Set up a periodic call to qsdLoadStepFlow every 2000 milliseconds (2 seconds)
        setInterval(qsdLoadStepFlow, 2000);
    });
</script>