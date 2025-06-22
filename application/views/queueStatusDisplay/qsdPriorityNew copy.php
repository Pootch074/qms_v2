<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIS Display</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        html,
        body {
            background: #f0f4f8;
            color: #000;
            height: 100vh;
            margin: 0;

        }

        .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            /* margin: auto; */
            max-width: 100%;
            background: #e6f0ff;
            border: 1px solid black;

        }

        .main-content {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            /* gap: 10px; */
            /* padding: 10px; */
            box-sizing: border-box;
            height: 100%;
        }

        .leftCol,
        .rightCol {
            flex: 1 1 0;
            min-width: 300px;
        }

        .leftCol {
            display: flex;
            flex-direction: column;
            /* gap: 20px; */
            background: #eef;
            /* height: 90%; */

        }

        .queue-item {
            width: 100%;
            height: 100%;
        }

        .queue-header {
            background-color: #1b4bb0;
            color: white;
            font-weight: bold;
            text-align: center;
            /* padding: 20px; */
            font-size: 1.5rem;
        }

        .queue-body {
            display: flex;
            flex-direction: row;
            /* height: 100%; */
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

        .rightCol {
            display: flex;
            flex-direction: column;
            min-height: 200px;
            background: #ccc;
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
            /* padding: 10px; */
        }


        /* Responsive Tweaks */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
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