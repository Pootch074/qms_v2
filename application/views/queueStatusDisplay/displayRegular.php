<div class="main">
    <div class="container">
        <div class="leftCol">
            <div class="leftColCard">
                <div class="firstRow">
                    <div class="firstRowCard">
                        <div class="firstRow_queueHeader">
                            STEP 2 ENCODE
                        </div>
                        <div class="firstRow_queueBody">
                            <div class="queueCard1">
                                <div class="queueCard1Contents">
                                    <div class="window-box">1</div>
                                    <div class="queueNum-box" id="qsdS2W1Regu">
                                    </div>
                                </div>
                            </div>
                            <div class="queueCard2">
                                <div class="queueCard2Contents">
                                    <div class="window-box">2</div>
                                    <div class="queueNum-box" id="qsdS2W2Regu"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="secondRow">
                    <div class="secondRowCard">
                        <div class="secondRow_queueHeader">
                            STEP 3 ASSESMENT
                        </div>
                        <div class="secondRow_queueBody">
                            <div class="queueCard3">
                                <div class="queueCard3Contents">
                                    <div class="window-box">1</div>
                                    <div class="queueNum-box" id="qsdS3W1"></div>
                                </div>
                            </div>
                            <div class="queueCard4">
                                <div class="queueCard4Contents">
                                    <div class="window-box">2</div>
                                    <div class="queueNum-box" id="qsdS3W2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="secondRow_queueBody2">
                            <div class="queueCard5">
                                <div class="queueCard5Contents">
                                    <div class="window-box">3</div>
                                    <div class="queueNum-box" id="qsdS3W3"></div>
                                </div>
                            </div>
                            <div class="queueCard6">
                                <div class="queueCard6Contents">
                                    <div class="window-box">4</div>
                                    <div class="queueNum-box" id="qsdS3W4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thirdRow">
                    <div class="thirdRowCard">
                        <div class="thirdRow_queueHeader">
                            STEP 4 RELEASE
                        </div>
                        <div class="thirdRow_queueBody">
                            <div class="queueCard7">
                                <div class="queueCard7Contents">
                                    <div class="window-box">1</div>
                                    <div class="queueNum-box" id="qsdS4W1"></div>
                                </div>
                            </div>
                            <div class="queueCard8">
                                <div class="queueCard8Contents">
                                    <div class="window-box">2</div>
                                    <div class="queueNum-box" id="qsdS4W2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="thirdRow_queueBody2">
                            <div class="queueCard9">
                                <div class="queueCard9Contents">
                                    <div class="window-box">3</div>
                                    <div class="queueNum-box" id="qsdS4W3"></div>
                                </div>
                            </div>
                            <div class="dummyCard">
                                <div class="dummyCardContents">
                                    <div class="dummy-window-box">4</div>
                                    <div class="dummy-queueNum-box">A010</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightCol">
            <div class="rightColCard">
                <div class="rFirstRow">
                    <div class="rFirstRowCard">
                        CRISIS INTERVENTION SECTION
                    </div>
                </div>
                <div class="rSecondRow">
                    <div class="rSecondRowCard">
                        <video class="videoCard" autoplay muted loop>
                            <source src="../assets/resources/qsdVideos/vid1.mp4">
                        </video>
                        <div class="poweredBy">
                            <span>Powered by:</span>
                            <img src="../assets/resources/dyme-logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="rThirdRow">
                    <div class="rThirdRowCard">
                        <div class="queueCard11">
                            <div class="philippine-date"></div>
                        </div>
                        <div class="queueCard12">
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
                        </div>
                    </div>
                </div>
                <div class="rFourthRow">
                    <div class="rFourthRowCard">
                        <div id="footerMarquee" class="footer">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<audio id="audioPlayer" src="../assets/resources/ascend.mp3"></audio>
<script src="<?= base_url('../assets/') ?>plugins/jquery/jquery.minQSD.js"></script>
<script defer src="<?= base_url('../assets/js/qsdPriority.js') ?>"></script>
<script src="../assets/js/digitalClock.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
    const logoutBtn = document.getElementById('logoutBtn');
    logoutBtn.addEventListener('click', function() {
        this.classList.add('clicked');
        setTimeout(function() {
            window.location.href = "<?= base_url('logout') ?>";
        }, 300);
    });
</script>



<script>
    $(document).ready(function() {
        loadFooterMarquee();
        setInterval(loadFooterMarquee, 1000); // Check for updates every 10 seconds
    });

    let previousContent = '';

    function loadFooterMarquee() {
        $.ajax({
            url: '<?= base_url('qsdFooterMarquee') ?>',
            type: 'GET',
            success: function(data) {
                if (data !== previousContent) {
                    $('#footerMarquee').html(data);
                    previousContent = data;
                }
            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
            }
        });
    }
</script>


<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.minQSD.js"></script>
<script>
    const BASE_URL = "<?= base_url() ?>";
</script>
<script>
    $(document).ready(function() {
        let prevData = {};
        let queue = [];
        let isSpeaking = false;

        function processQueue() {
            if (queue.length > 0 && !isSpeaking) {
                isSpeaking = true;
                let {
                    message,
                    callback
                } = queue.shift();
                playAudioAndSpeak(message, callback);
            }
        }

        function playAudioAndSpeak(message, callback) {
            const audioPlayer = document.getElementById('audioPlayer');

            audioPlayer.addEventListener('ended', function onEnded() {
                audioPlayer.removeEventListener('ended', onEnded);

                if (!('speechSynthesis' in window)) {
                    console.warn('Speech Synthesis not supported');
                    isSpeaking = false;
                    callback();
                    return;
                }

                const utterance = new SpeechSynthesisUtterance(message);
                utterance.lang = 'en-US';
                utterance.pitch = 1;
                utterance.rate = 1;
                utterance.volume = 1;

                const setVoiceAndSpeak = () => {
                    const voices = speechSynthesis.getVoices();
                    if (voices.length > 2) utterance.voice = voices[2];
                    speechSynthesis.speak(utterance);
                };

                if (speechSynthesis.getVoices().length === 0) {
                    speechSynthesis.onvoiceschanged = setVoiceAndSpeak;
                } else {
                    setVoiceAndSpeak();
                }

                utterance.onend = () => {
                    console.log('Speech synthesis ended.');
                    isSpeaking = false;
                    callback();
                };

                utterance.onerror = (e) => {
                    console.error('Speech synthesis error:', e);
                    isSpeaking = false;
                    callback();
                };
            });

            audioPlayer.play();
        }

        function handleQueueData(url, elementID, step, windowNum = null) {
            $.get(url, function(data) {
                $(elementID).html(data);
                const h1 = $(elementID + ' ');
                if (!h1.length) return;
                const rawText = h1.text().trim();
                if (!rawText) return;
                const queueNum = rawText;


                const normalizedQueueNum = queueNum.replace(/[^\d]/g, '');
                if (parseInt(normalizedQueueNum, 10) === 0) {
                    console.log(`Skipped audio/speech for queue number ${queueNum}`);
                    return;
                }

                if (parseInt(normalizedQueueNum, 10) === 0) {
                    console.log(`Skipped audio/speech for queue number ${queueNum}`);
                    return;
                }
                if (!prevData[url]) prevData[url] = {
                    queueNum: null
                };
                const changed = queueNum !== prevData[url].queueNum;
                if (!changed) {
                    $(elementID).removeClass('elementID');
                    return;
                }

                prevData[url] = {
                    queueNum
                };
                $(elementID).addClass('elementID');

                const baseMsg = `Client number, ${queueNum}. Please proceed to step ${step}`;
                const fullMessage = windowNum ?
                    `${baseMsg} window ${windowNum}. ${queueNum}, to step ${step} window ${windowNum}.` :
                    `${baseMsg}. ${queueNum}, to step ${step}.`;

                console.log(`New message: ${fullMessage}`);
                queue.push({
                    message: fullMessage,
                    callback: processQueue
                });
                processQueue();
            }).fail(function(xhr, status, error) {
                console.error("Error fetching queue data:", error);
            });
        }

        function qsdLoadStepFlow() {
            handleQueueData('<?= base_url('qsdS2W1ReguRou') ?>', '#qsdS2W1Regu', 2, 1);
            handleQueueData('<?= base_url('qsdS2W2ReguRou') ?>', '#qsdS2W2Regu', 2, 2);
            handleQueueData('<?= base_url('qsdS3W1Rou') ?>', '#qsdS3W1', 3, 1);
            handleQueueData('<?= base_url('qsdS3W2Rou') ?>', '#qsdS3W2', 3, 2);
            handleQueueData('<?= base_url('qsdS3W3Rou') ?>', '#qsdS3W3', 3, 3);
            handleQueueData('<?= base_url('qsdS3W4Rou') ?>', '#qsdS3W4', 3, 4);
            handleQueueData('<?= base_url('qsdS4W1Rou') ?>', '#qsdS4W1', 4, 1);
            handleQueueData('<?= base_url('qsdS4W2Rou') ?>', '#qsdS4W2', 4, 2);
            handleQueueData('<?= base_url('qsdS4W3Rou') ?>', '#qsdS4W3', 4, 3);
        }

        function qsdLoadStepFlowWithDelay() {
            qsdLoadStepFlow();
            setTimeout(qsdLoadStepFlowWithDelay, 1000);
        }

        qsdLoadStepFlowWithDelay();
    });
</script>
</body>

</html>