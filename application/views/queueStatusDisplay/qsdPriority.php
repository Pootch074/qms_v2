<style>
    .main {
        height: 84vh;
    }

    .sectionA {
        height: 100%;
    }

    .elementID {
        animation: highlight 2s ease-in-out infinite;
    }

    @keyframes highlight {
        0% {
            background: rgb(255, 0, 0);
            background: radial-gradient(circle, rgba(255, 0, 0, 1) 7%, rgba(255, 228, 49, 1) 82%, rgba(232, 233, 0, 1) 100%);
            transform: scale(0.75);
            /* Start slightly smaller */
            box-shadow: 0px 0px 10px rgba(255, 0, 0, 0.5);
            /* Initial subtle shadow */
        }

        50% {
            background: rgb(255, 247, 0);
            background: radial-gradient(circle, rgba(255, 247, 0, 1) 0%, rgba(255, 251, 107, 1) 100%);
            transform: scale(1.15);
            /* Enlarge a bit more for a pulsing effect */
            box-shadow: 0px 0px 30px rgba(255, 247, 0, 0.7);
            /* Add stronger shadow */
        }

        80% {
            background: rgb(255, 0, 134);
            background: radial-gradient(circle, rgba(255, 0, 134, 1) 7%, rgba(49, 255, 118, 1) 82%, rgba(233, 199, 0, 1) 100%);
            transform: scale(1.05);
            /* Slightly shrink before final size */
            box-shadow: 0px 0px 20px rgba(255, 0, 134, 0.5);
            /* Adjust shadow */
        }

        100% {
            background: rgb(255, 0, 134);
            background: radial-gradient(circle, rgba(255, 0, 134, 1) 7%, rgba(49, 255, 118, 1) 82%, rgba(233, 199, 0, 1) 100%);
            transform: scale(1);
            /* Return to original size */
            box-shadow: 0px 0px 10px rgba(49, 255, 118, 0.4);
            /* Softer shadow */
        }
    }
</style>
<main id="main" class="main" style="margin-top: 8vh; overflow:hidden;">
    <div class="container-fluid h-100">
        <div class="row h-100 pt-1" style="background: rgb(12,48,128); background: linear-gradient(180deg, rgba(12,48,128,1) 0%, rgba(28,75,178,1) 82%, rgba(101,130,194,1) 100%);">
            <div class="col-6 text-center border d-flex flex-column">
                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-center" style="width:100%;">
                    <div class="h-100 d-flex align-items-center justify-content-center" id="qsdS2Prio" style="width:60%;">
                    </div>

                    <div class="h-100 d-flex align-items-center justify-content-center" style="width:20%;">
                        <h2 class="qsdStepFont">2</h2>
                    </div>

                    <div class="h-100 d-flex align-items-center justify-content-center" style="margin-right:2vw; width:20%;">
                    </div>
                </div>

                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-center" style="width:100%;">
                    <div class="h-100 d-flex align-items-center justify-content-center" id="qsdS3W1Prio" style="width:60%;">
                    </div>

                    <div class="h-100 d-flex align-items-center justify-content-center" style="width:20%;">
                        <h2 class="qsdStepFont">
                            3
                        </h2>
                    </div>



                    <div class="h-100 d-flex align-items-center justify-content-center" style="margin-right:2vw; width:20%;">
                        <h2 class="qsdStepFont">
                            1
                        </h2>
                    </div>
                </div>

                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-center" style="width:100%;">
                    <div class="h-100 d-flex align-items-center justify-content-center" id="qsdS3W2Prio" style="width:60%;">
                    </div>

                    <div class="h-100 d-flex align-items-center justify-content-center" style="width:20%;">
                        <h2 class="qsdStepFont">
                            3
                        </h2>
                    </div>


                    <div class="h-100 d-flex align-items-center justify-content-center" style="margin-right:2vw; width:20%;">
                        <h2 class="qsdStepFont">
                            2
                        </h2>
                    </div>
                </div>

                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-center" style="width:100%;">
                    <div class="h-100 d-flex align-items-center justify-content-center" id="qsdS3W3Prio" style="width:60%;">
                    </div>

                    <div class="h-100 d-flex align-items-center justify-content-center" style="width:20%;">
                        <h2 class="qsdStepFont">
                            3
                        </h2>
                    </div>


                    <div class="h-100 d-flex align-items-center justify-content-center" style="margin-right:2vw; width:20%;">
                        <h2 class="qsdStepFont">
                            3
                        </h2>
                    </div>
                </div>

                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-center" style="width:100%;">

                    <div class="h-100 d-flex align-items-center justify-content-center" id="qsdS4W1Prio" style="width:60%;">
                    </div>

                    <div class="h-100 d-flex align-items-center justify-content-center" style="width:20%;">
                        <h2 class="qsdStepFont">
                            4
                        </h2>
                    </div>


                    <div class="h-100 d-flex align-items-center justify-content-center" style="margin-right:2vw; width:20%;">
                        <h2 class="qsdStepFont">
                            1
                        </h2>
                    </div>
                </div>

                <div class="cardCstm flex-grow-1 mb-1 d-flex align-items-center justify-content-center" style="width:100%;">

                    <div class="h-100 d-flex align-items-center justify-content-center" id="qsdS4W2Prio" style="width:60%;">
                    </div>

                    <div class="h-100 d-flex align-items-center justify-content-center" style="width:20%;">
                        <h2 class="qsdStepFont">
                            4
                        </h2>
                    </div>

                    <div class="h-100 d-flex align-items-center justify-content-center" style="margin-right:2vw; width:20%;">
                        <h2 class="qsdStepFont">
                            2
                        </h2>
                    </div>
                </div>

            </div>
            <div class="col-6 text-center border" style="background: rgb(12,48,128); background: linear-gradient(180deg, rgba(12,48,128,1) 0%, rgba(28,75,178,1) 82%, rgba(101,130,194,1) 100%);">
                <div class="cardCstm flex-grow-1 mb-1 d-flex">
                    <video width="100%" height="auto%" autoplay loop muted>
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

<audio id="audioPlayer" src="assets\resources\ascend.mp3"></audio>

<script>
    $(document).ready(function() {
        let prevData = {};
        let queue = []; // Queue to handle speech synthesis and audio
        let isSpeaking = false; // Flag to track if audio/speech synthesis is ongoing

        function processQueue() {
            if (queue.length > 0 && !isSpeaking) {
                isSpeaking = true;
                let nextMessage = queue.shift(); // Get the next message in the queue
                playAudioAndSpeak(nextMessage.message, nextMessage.callback);
            }
        }

        function playAudioAndSpeak(message, callback) {
            var audioPlayer = document.getElementById('audioPlayer');
            audioPlayer.play();

            // Ensure the message is spoken only after the audio finishes
            function onAudioEnded() {
                audioPlayer.removeEventListener('ended', onAudioEnded);
                if ('speechSynthesis' in window) {
                    let utterance = new SpeechSynthesisUtterance(message);
                    utterance.lang = 'en-US';
                    utterance.pitch = 1;
                    utterance.rate = 1;
                    utterance.volume = 1;
                    let voices = speechSynthesis.getVoices();
                    if (voices.length === 0) {
                        speechSynthesis.onvoiceschanged = () => {
                            voices = speechSynthesis.getVoices();
                            if (voices.length > 2) {
                                utterance.voice = voices[2];
                            }
                            window.speechSynthesis.speak(utterance);
                        };
                    } else {
                        if (voices.length > 2) {
                            utterance.voice = voices[2];
                        }
                        window.speechSynthesis.speak(utterance);
                    }

                    utterance.onstart = () => {
                        console.log('Speech synthesis started.');
                    };

                    utterance.onend = () => {
                        console.log('Speech synthesis ended.');
                        isSpeaking = false; // Reset the speaking flag
                        callback(); // Call the callback to process the next message in the queue
                    };

                    utterance.onerror = (e) => {
                        console.error('Speech synthesis error:', e);
                        isSpeaking = false;
                        callback(); // Proceed even if there is an error
                    };
                } else {
                    console.warn('Speech Synthesis not supported in this browser.');
                    isSpeaking = false;
                    callback(); // Proceed if speech synthesis is not supported
                }
            }
            audioPlayer.addEventListener('ended', onAudioEnded);
        }

        function handleQueueData(url, elementID, step, window) {
            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    $(elementID).html(data);
                    let h1 = $(elementID + ' h1');
                    if (h1.length > 0) {
                        let text = h1.text().trim();
                        let parts = text.split('-');
                        if (parts.length === 2) {
                            let currentQueueNum = parts[0];
                            let currentCategory = parts[1];
                            if (!prevData[url]) {
                                prevData[url] = {
                                    queueNum: null,
                                    category: null
                                };
                            }
                            // Check if the current data is different from previous
                            if (currentQueueNum !== prevData[url].queueNum || currentCategory !== prevData[url].category) {
                                prevData[url].queueNum = currentQueueNum;
                                prevData[url].category = currentCategory;

                                // Apply the animation class when new data arrives
                                $(elementID).addClass('elementID');

                                let message = `Client number, ${currentQueueNum} ${currentCategory}. Please proceed to step ${step} window ${window}. ${currentQueueNum} ${currentCategory}, to step ${step} window ${window}.`;
                                console.log(`New message: ${message}`);

                                // Add the message to the queue
                                queue.push({
                                    message: message,
                                    callback: processQueue // Add a callback to continue processing the queue
                                });

                                // Start processing the queue if not already speaking
                                processQueue();
                            } else {
                                // Remove the class if there's no change (optional)
                                $(elementID).removeClass('elementID');
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching queue data:", error);
                }
            });
        }

        function handleQueueDatas2(url, elementID, step) {
            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    $(elementID).html(data);
                    let h1 = $(elementID + ' h1');
                    if (h1.length > 0) {
                        let text = h1.text().trim();
                        let parts = text.split('-');
                        if (parts.length === 2) {
                            let currentQueueNum = parts[0];
                            let currentCategory = parts[1];
                            if (!prevData[url]) {
                                prevData[url] = {
                                    queueNum: null,
                                    category: null
                                };
                            }
                            // Check if the current data is different from previous
                            if (currentQueueNum !== prevData[url].queueNum || currentCategory !== prevData[url].category) {
                                prevData[url].queueNum = currentQueueNum;
                                prevData[url].category = currentCategory;

                                // Apply the animation class when new data arrives
                                $(elementID).addClass('elementID');

                                let message = `Client number, ${currentQueueNum} ${currentCategory}. Please proceed to step ${step}. ${currentQueueNum} ${currentCategory}, to step ${step}.`;
                                console.log(`New message: ${message}`);

                                // Add the message to the queue
                                queue.push({
                                    message: message,
                                    callback: processQueue // Add a callback to continue processing the queue
                                });

                                // Start processing the queue if not already speaking
                                processQueue();
                            } else {
                                // Remove the class if there's no change (optional)
                                $(elementID).removeClass('elementID');
                            }
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching queue data:", error);
                }
            });
        }



        function qsdLoadStepFlow() {
            handleQueueDatas2('<?= base_url('qsdS2PrioRou') ?>', '#qsdS2Prio', 2);
            handleQueueData('<?= base_url('qsdS3W1PrioRou') ?>', '#qsdS3W1Prio', 3, 1);
            handleQueueData('<?= base_url('qsdS3W2PrioRou') ?>', '#qsdS3W2Prio', 3, 2);
            handleQueueData('<?= base_url('qsdS3W3PrioRou') ?>', '#qsdS3W3Prio', 3, 3);
            handleQueueData('<?= base_url('qsdS4W1PrioRou') ?>', '#qsdS4W1Prio', 4, 1);
            handleQueueData('<?= base_url('qsdS4W2PrioRou') ?>', '#qsdS4W2Prio', 4, 2);
        }

        // Remove setInterval and instead chain the calls with a delay only after each message is processed
        function qsdLoadStepFlowWithDelay() {
            qsdLoadStepFlow();
            setTimeout(qsdLoadStepFlowWithDelay, 1000); // Adjust time based on expected message length
        }

        qsdLoadStepFlowWithDelay(); // Initial call to start the sequence
    });
</script>