<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <link rel="apple-touch-icon" href="assets/img/favicon.png" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&family=Oxanium:wght@700&display=swap" rel="stylesheet">
    <title>Visual Interaction Selector</title>
    <style>
        .preloaderBg {
            z-index: 1000000000000000000;
            position: fixed;
            z-index: 10000;
            top: 0;
            background: #7C81AD;
            min-width: 100%;
            height: 100%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .preloader-wrap {
            position: relative;
            width: 250px;
            height: 250px;
        }

        .preloader-logo {
            margin: auto;
            background: url(assets/img/favicon.png) no-repeat center;
            background-size: 150px;
            width: 200px;
            height: 200px;
            position: absolute;
            top: 25px;
            left: 25px;
        }

        .preloader-circle {
            border: 5px solid #2E4374;
            border-top: 5px solid #E5C3A6;
            border-radius: 50%;
            width: 250px;
            height: 250px;
            animation: spin 1.5s ease-in-out infinite;
            position: absolute;
            top: 0;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body>
    <div class="preloaderBg" id="preloader">
        <div class="preloader-wrap">
            <div class="preloader-logo"></div>
            <div class="preloader-circle"></div>
        </div>
    </div>
    <h1 class="heading-one" id="heading-one">Visual Interaction Selector</h1>

    <div class="btn-anchors">
        <div class="only-btns" id="only-btns">
            <button class="interactable" data-label="Subscribe">Subscribe</button>
            <button class="interactable" data-label="Download">Download</button>
            <button class="interactable" data-label="Contact Us">Contact Us</button>
        </div>
        <div class="anchors-select" id="anchors-select">
            <a href="#" class="interactable" data-label="Read More">Read More</a>
            <a href="#" class="interactable" data-label="Visit Our Store">Visit Our Store</a>
            <select class="interactable" data-label="Dropdown">
                <option value="Option 1">Option 1</option>
                <option value="Option 2">Option 2</option>
                <option value="Option 3">Option 3</option>
            </select>
        </div>
    </div>
    <video class="interactable" id="video-main" data-label="Video" controls>
        <source src="assets/videos/cover-v2-1.mp4" type="video/mp4">
    </video>
    <div id="dashboard">
        <h2>Selected Elements</h2>
        <!-- The dashboard will be updated dynamically using JavaScript -->
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>