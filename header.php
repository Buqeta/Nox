<?php

echo '<div class="header">
        <div class="top-header">

            <div class="nox-logo-top">
                <img src="pics/NOX Logo.svg">
            </div>

            <div class="search-bar">
                <form action="">
                    <input type="text" placeholder="Search for products" name="search" id="search-input">
                    <button type="submit" id="search-button"><img src="pics/search_icon.svg"></button>
                </form>
            </div>

            <div class="right-top-icons">
                <div class="icon-div">
                    <button class="icons"><img src="pics/heart-icon.svg"></button>
                    <button class="icons"><img src="pics/cart-icon.svg"></button>
                    <button class="icons"><img src="pics/account-icon.svg"></button>
                </div>
            </div>
        </div>
        <hr>
        <div class="bottom-header">
            <div class="links">
                <a href="index.php"';
                    
                        $uri = $_SERVER['REQUEST_URI'];

                        if($uri === "/NOX_Project/Nox/" || $uri === "/NOX_Project/Nox/index.php")
                        echo "id = 'orange'";
                    
                
            echo    '>Home</a>
            </div>

            <div class="links">
                <a href="electronics.php"';
                    
                        $uri = $_SERVER['REQUEST_URI'];

                        if($uri === "/NOX_Project/Nox/electronics.php")
                        echo "id = 'orange'";
                    
                
            echo     '>Electronics</a>
            </div>
            
            <div class="links">
                <a href="homeAppliances.php"';
                    $uri = $_SERVER['REQUEST_URI'];

                    if($uri === "/NOX_Project/Nox/homeAppliances.php")
                    echo "id = 'orange'";
                    
                
                
            echo    '>Home Appliances</a>
            </div>

            <div class="links">
                <a href="clothing.php"';
                    $uri = $_SERVER['REQUEST_URI'];

                    if($uri === "/NOX_Project/Nox/clothing.php")
                    echo "id = 'orange'";
                
            echo    '>Clothing</a>
            </div>

            <div class="links">
                <a href="furniture.php"';
                    $uri = $_SERVER['REQUEST_URI'];

                    if($uri === "/NOX_Project/Nox/furniture.php")
                    echo "id = 'orange'";
                
            echo    '>Furniture</a>
            </div>
        </div>
    </div>';
?>

        