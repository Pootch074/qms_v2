<!DOCTYPE html>
<html lang="en">

<head>
    <link href="./assets/css/style.css" rel="stylesheet">
    <style>
        .new-footer-container {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: stretch;
            align-content: stretch;
        }

        .flex-items:nth-child(1) {
            display: block;
            flex-grow: 0;
            flex-shrink: 1;
            flex-basis: auto;
            align-self: auto;
            order: 0;
        }

        .flex-items:nth-child(2) {
            display: block;
            flex-grow: 1;
            flex-shrink: 0;
            flex-basis: auto;
            align-self: auto;
            order: 0;
        }
    </style>
</head>

<body>
    <div class="new-footer-container">
        <div class="flex-items"></div>
        <div class="flex-items"></div>
    </div>
</body>

</html>