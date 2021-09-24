<?php
    require 'classes/product.class.php';
    require 'classes/productManagement.class.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css_files/index.css">
    </head>

    <body>
        <div class="main">
            <div class="top">
                <?php
                    include_once("header.php");
                ?>
                <div class="slider">
                    
                    <button id="right-arrow" onclick="plusSlides(1)"><img src="pics/right-arrow-slider.svg"></button>
                    <button id="left-arrow" onclick="plusSlides(-1)"><img src="pics/left-arrow-slider.svg"></button>
                    <div id="first" class="slides">
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

                    <div id="second" class="slides">
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

                    <div id="third" class="slides">
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
                        <span class="dot active" onclick="currentSlide(0)"></span>
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
            </div>

            <div class="middle">

                <button id="left-arrow2"><img src="pics/left-arrow-slider.svg"></button>
                <button id="right-arrow2" ><img src="pics/right-arrow-slider.svg"></button>


                
                <div class="slider2">
                    <?php
                        $p = new ProductManagement();

                        $products = $p->getProducts();

                        for($i = 0; $i < count($products); $i++){
                    ?>  
                            <div class="element">
                                <button class="heart"><img src="pics/heart.svg" class="heart-img" alt="test"></button>
                                <img class="product-img" src="pics/airtag.jpeg">
                                <?php
                                    echo "<p class='product-name'>" .$products[$i]['ProductName']. "</p>";
                                    echo "<p class='product-price'>" .$products[$i]['Price']. "$</p>"; 
                                ?>
                                <button class="add-to-cart-btn">Add to cart</button>
                            </div>
                    <?php
                        }
                    ?>
                </div>

                <div class="dots">
                    <span class="dot2 active" onclick="currentSlide(0)"></span>
                    <span class="dot2" onclick="currentSlide(1)"></span>
                    <span class="dot2" onclick="currentSlide(2)"></span>
                    <span class="dot2" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>

        
        
    <script type="text/javascript" src="javascript/slider.js"></script>
    </body>
</html>