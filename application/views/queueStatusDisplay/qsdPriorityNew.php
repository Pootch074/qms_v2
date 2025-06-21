<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Queue Display</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        html,
        body {
            background: #f0f4f8;
            color: #000;
            height: 100%;
            margin: 0;
        }

        .container {
            height: 100%;
            padding: 0;
            display: flex;
            flex-direction: column;

            max-width: 100%;
            margin: auto;
            background: #e6f0ff;
            border: 1px solid black;
        }

        /* Header Layout */
        .header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            background: #2E3192;
            color: white;
            padding: 15px 20px;
            border-radius: 6px;
        }

        .hospital-info {
            display: flex;
            align-items: center;
            gap: 15px;
            flex: 1;
            min-width: 250px;
        }

        .hospital-info .logo {
            width: 60px;
            height: 60px;
        }

        .date-time {
            text-align: right;
            font-weight: bold;
            min-width: 150px;
        }

        /* Main layout */
        .main-content {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 10px;
        }

        /* Video section */
        .rightCol {
            flex: 1 1 300px;
            min-height: 200px;
            background: #ccc;
            display: flex;
            flex-direction: column;
        }


        .rightCol video {
            width: 100%;
            height: 70%;
            /* object-fit: contain; */
            border-radius: 6px;
            object-fit: fill;
        }

        .rightCol-caption {
            height: 30%;
            background-color: #f4f4f4;
            color: #333;
            font-size: 1rem;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        /* Queue Grid */
        .leftCol {
            display: grid;
            flex: 1 1 300px;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .queue-item {
            border: 2px solid #1b4bb0;
            border-radius: 5px;
            overflow: hidden;
            display: flex;
            flex-direction: column;

        }

        .queue-header {
            background-color: #1b4bb0;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 6px;
            font-size: 0.9rem;
        }

        .queue-body {
            display: flex;
            flex-direction: row;
            height: 100%;
        }

        .counter-box {
            background-color: #2E3192;
            color: white;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        .counter-label {
            font-size: 0.8rem;
        }

        .counter-number {
            font-size: 2.5rem;
        }

        .queue-number-box {
            background-color: white;
            color: black;
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .queue-number {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .queue-item h3 {
            font-size: 1rem;
            color: #1b4bb0;
            margin-bottom: 5px;
        }

        .queue-item p {
            font-size: 0.9rem;
            margin-bottom: 10px;
        }


        /* Responsive Tweaks */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .date-time {
                text-align: left;
                margin-top: 10px;
            }

            .main-content {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .queue-number {
                font-size: 1.5rem;
            }

            .queue-item h3 {
                font-size: 0.95rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- <header class="header">
            <div class="hospital-info">
                <img src="hospital-logo.png" alt="Hospital Logo" class="logo">
                <div>
                    <h1>Department of Social Welfare and Development</h1>
                    <p>of Davao City, Inc.<br><em>Serving with Compassion</em></p>
                </div>
            </div>
            <div class="date-time">
                <div>June 16, 2025</div>
                <div>09:29 AM</div>
            </div>
        </header> -->

        <main class="main-content">

            <div class="leftCol">
                <div class="queue-item">
                    <div class="queue-header">STEP 2 ENCODING</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">1</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 2 ENCODING</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">2</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 3 ASSESMENT</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">1</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 3 ASSESMENT</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">2</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 3 ASSESMENT</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">3</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 3 ASSESMENT</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">4</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 4 RELEASE</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">1</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 4 RELEASE</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">2</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 4 RELEASE</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">3</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="queue-item">
                    <div class="queue-header">STEP 4 RELEASE</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">1</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 4 RELEASE</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">1</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div>
                <div class="queue-item">
                    <div class="queue-header">STEP 4 RELEASE</div>
                    <div class="queue-body">
                        <div class="counter-box">
                            <span class="counter-label">Window</span>
                            <span class="counter-number">1</span>
                        </div>
                        <div class="queue-number-box">
                            <span class="queue-number">P001</span>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="rightCol">
                <video autoplay loop muted>
                    <source src="assets/resources/qsdVideos/vid2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="rightCol-caption">
                    Now Playing: Video Info
                </div>
            </div>

        </main>
    </div>
</body>

</html>