

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css_files/index.css">
    </head>

    <body>
        <div class="main">
            <?php
                include_once("header.php");
            ?>
            <div class="slider" >
                <button id="left-arrow"><img src="pics/left-arrow-slider.svg"></button>
                <button id="right-arrow"><img src="pics/right-arrow-slider.svg"></button>
                <div id="first" class="slides" style="display: none">
                    <div class="left">
                        <div class="left-text-button">
                            <h2 id="h2-text">GET THE BEST-SELLER</h2>
                            <h2 id="h2-text-2">iPhone 12 Pro</h2>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>

                    <div class="right">
                        <img src="pics/iphone-home.jpg">
                    </div>
                </div>

                <div id="second" class="slides" style="display: none">
                    <div class="left">
                        <div class="left-text-button">
                            <h2 id="h2-text">GET THE BEST-SELLER</h2>
                            <h2 id="h2-text-2">LG Smart Double Freezer Refrigerator</h2>
                            <p class="p-slide">Where unparallelled design meets flexible functionality</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>

                    <div class="right">
                        <img src="pics/refrigerator.jpg">
                    </div>

                </div>

                <div id="third" class="slides" style="display:none">
                    <div class="left">
                        <div class="left-text-button">
                            <h2 id="h2-text">GET THE BEST-SELLER</h2>
                            <h2 id="h2-text-2">The North Face Venture 2 Jacket</h2>
                            <p class="p-slide">Head into the great outdoors in capable gear with a hint of print</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>

                    <div class="right">
                        <img src="pics/jacket.jpg">
                    </div>

                </div>

                <div id="fourth" class="slides">
                    <div class="left">
                        <div class="left-text-button">
                            <h2 id="h2-text">GET THE BEST-SELLER</h2>
                            <h2 id="h2-text-2">Malm High Bed Frame</h2>
                            <p class="p-slide">Create the space you will love to live in</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>

                    <div class="right">
                        <img src="pics/bed.jpg">
                    </div>

                </div>

                <div class="dots">
                    <span class="dot" id="colored-dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>

    </body>
</html>