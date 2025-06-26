<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('assets/css/qsdPriorityNew.css') ?>" rel="stylesheet">
    <style>
        /* body {
            margin: 0;
            height: 100vh;
            background: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
        } */

        .app__logout {
            position: absolute;
            width: 25px;
            height: 25px;
            background: #1b0f9e;
            color: #fff;
            font-size: 2rem;
            border-radius: 50%;
            cursor: pointer;
            top: 1%;
            right: 2%;
            /* display: flex;
            align-items: center;
            justify-content: center; */
            transition: transform 0.2s 0.2s, opacity 0.1s 0.4s;
        }

        .app__logout.clicked {
            transform: scale(70);
            opacity: 0.9;
        }

        .app__logout-icon {
            width: 25px;
            height: 25px;
            transition: opacity 0.1s;
        }

        .app__logout.clicked .app__logout-icon {
            opacity: 0;
        }

        .app__logout-icon path {
            stroke-width: 4px;
            stroke: white;
            fill: none;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="assets/resources/dswd-color.png" alt="">
        <div class="app__logout" id="logoutBtn">
            <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
                <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12" />
            </svg>
        </div>
    </div>
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
                                        <div class="queueNum-box">A009</div>
                                    </div>
                                </div>
                                <div class="queueCard2">
                                    <div class="queueCard2Contents">
                                        <div class="window-box">2</div>
                                        <div class="queueNum-box">A008</div>
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
                                        <div class="queueNum-box">A003</div>
                                    </div>
                                </div>
                                <div class="queueCard4">
                                    <div class="queueCard4Contents">
                                        <div class="window-box">2</div>
                                        <div class="queueNum-box">R004</div>
                                    </div>
                                </div>
                            </div>
                            <div class="secondRow_queueBody2">
                                <div class="queueCard5">
                                    <div class="queueCard5Contents">
                                        <div class="window-box">3</div>
                                        <div class="queueNum-box">R003</div>
                                    </div>
                                </div>
                                <div class="queueCard6">
                                    <div class="queueCard6Contents">
                                        <div class="window-box">4</div>
                                        <div class="queueNum-box">A002</div>
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
                                        <div class="queueNum-box">R002</div>
                                    </div>
                                </div>
                                <div class="queueCard8">
                                    <div class="queueCard8Contents">
                                        <div class="window-box">2</div>
                                        <div class="queueNum-box">A001</div>
                                    </div>
                                </div>
                            </div>
                            <div class="thirdRow_queueBody2">
                                <div class="queueCard9">
                                    <div class="queueCard9Contents">
                                        <div class="window-box">3</div>
                                        <div class="queueNum-box">R001</div>
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
                                <source src="assets/resources/qsdVideos/vid1.mp4">
                            </video>
                            <div class="poweredBy">
                                <span>Powered by:</span>
                                <img src="assets/resources/dyme-logo.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="rThirdRow">
                        <div class="rThirdRowCard">
                            JUNE 24, 2025 04:37 PM
                        </div>
                    </div>
                    <div class="rFourthRow">
                        <div class="rFourthRowCard">
                            WELCOME TO DSWD
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        const logoutBtn = document.getElementById('logoutBtn');
        logoutBtn.addEventListener('click', function() {
            this.classList.add('clicked');

            // Redirect after the animation (approx. 1 second)
            setTimeout(function() {
                window.location.href = "<?= base_url('logout') ?>";
            }, 300);
        });
    </script>
</body>

</html>