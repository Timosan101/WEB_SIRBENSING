<?php
$atrion='<span class="A">A</span><span class="TRION">TRION</span>';
$tag="UPGRADE YOUR GAME EXPERIENCE...";
$desc="Worldwide’s first and authentic online pickleball market and events management center.";
$lux='<span class="kani">Luxury</span> at its finest..';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atrion.com</title>
</head>

<body>

<header class="header">

    <div class="LOGO">
        <?php echo $atrion; ?>
    </div>


    <nav class="top-navigation">
        <a href="#">About Us</a>
        <a href="#">Sign Up</a>
        <a href="#" class="login">Log In</a>
       
    </nav>


    <nav class="main-navigation">
        <a href="#">HOME</a>
        <a href="#">PADDLES</a>
        <a href="#">CATEGORY</a>
        <a href="#">APPAREL</a>
        <a href="#">CONTACT US</a>
    </nav>
</header>

<!-- ************************   FIRST PAGE STARTS HERE ****************************-->
<section class="first-page">

    <div class="gradient">
    <img src="images/first/kanisya.png" alt="SPORTS LUXURY">
    </div>

    <div class="content">
    <p class="tagline"> <?php echo $tag; ?> </p>
        <h1 class="bold">ASCEND<br>SPORTS<br><span class="luxury">LUXURY</span></h1>
        <p class="description">
            <?php echo $desc; ?>
        </p>

        <p class="lux"><?php echo $lux; ?> </p>

        <div class="group">
        <a href="#" class="shoppie">SHOP NOW!</a>
        <a href="#" class="explore">EXPLORE</a>
        </div>
    </div>


    <!-- ATHLETE -->

    <div class="image">
        <img src="images/first/trans backgrround.png" alt="ATRION LUXURY">
    </div>

    <!-- ENDING SA FIRST -->

    <div class="back">
        <img src="images/first/ending/cover.png">
    </div>


    <!-- FEATURES HERE -->

    <div class="features">

        <div class="authentic">
        <img src="images/first/ending/authentic.png" alt="authentic">
        <div class="text">
            <span>100%</span>
            <span>AUTHENTIC</span>
        </div>
        </div>


        <div class="worldwide">
        <img src="images/first/ending/shipping.png" alt="worldwide shipping">
        <div class="text">
            <span>WORLDWIDE</span>
            <span>SHIPPING</span>
        </div>
        </div>


        <div class="warranty">
        <img src="images/first/ending/warranty.png" alt="1 year warranty">
        <div class="text">
            <span>1 YEAR</span>
            <span>WARRANTY</span>
        </div>
        </div>


        <div class="payment">
        <img src="images/first/ending/secured.png" alt="secured payment">
        <div class="text">
            <span>SECURE</span>
            <span>PAYMENT</span>
        </div>
        </div>

    </div>

</section>


<!-- ************************   SECOND PAGE STARTS HERE ****************************-->
<section class="second-page">

<div class="back-sliding-gradient">
        <img src="images/second/kilid.png" alt="ATRION BESTSELLERS">
    </div> 

<div class="pikol">
        <img src="images/second/paddle.png" alt="ATRION BESTSELLERS">
    </div>

    <!-- RIGHT SIDE: HEADINGS & PRODUCT CARDS -->
    <div class="bestseller-right">
        
        <div class="bestseller-header">
            <span class="sub-heading">choose your game !</span>
            <h2 class="main-heading">BESTSELLER ?</h2>
        </div>

        <div class="products-grid">
    


    <!-- PRODUCT CARDS GRID (4 ITEMS) -->

    <!-- 1ST PLACE PRODUCT -->
    <div class="product-card card-1st">
        <span class="rank">1ST</span>
        <div class="card-image">
            <img src="images/second/perseus.jpg" alt="PERSEUS PRO IV">
        </div>
    </div>

    <!-- 2ND PLACE PRODUCT -->
    <div class="product-card card-2nd">
        <span class="rank">2ND</span>
        <div class="card-image">
            <img src="images/second/kani.jpg" alt="SELKIRK">
        </div>
    </div>

    <!-- 3RD PLACE PRODUCT -->
    <div class="product-card card-3rd">
        <span class="rank">3RD</span>
        <div class="card-image">
            <img src="images/second/lux.jpg" alt="LUXX PRO">
        </div>
    </div>

    <!-- 4TH PLACE PRODUCT -->
    <div class="product-card card-4th">
        <span class="rank">4TH</span>
        <div class="card-image">
            <img src="images/second/ikaupat.jpg" alt="FOURTH PADDLE">
        </div>
    </div>

</div>
    </div>
</section>


<!-- ************************   THIRD PAGE STARTS HERE ****************************-->

<section class="third_page">
    <!-- BLUE BANNER BACKGROUND STRIP -->
    <div class="banner-bg">
        <img src="images/third/3rd.png" alt="BANNER BACKGROUND">
    </div>

    <!-- MAIN CONTAINER -->
    <div class="third-content">

        <!-- LEFT SIDE: CARD WITH TEXT AND BUTTON -->
        <div class="vip-card">
            <span class="sub-title">BUNDLE EXPERIENCE</span>
            <h2>Join Our VIP's<br>best FREEBIES<br>& SERVICES !</h2>
            <a href="#" class="app-btn">GET THE APP</a>
        </div>

        <!-- RIGHT SIDE: BIG SPLIT BALL GRAPHIC AND OVERLAY TEXT -->
        <div class="ball-container">
            <img src="images/third/bigball.png" alt="VIP BUNDLEBALL" class="big-ball-img">
            <div class="overlay-text">
                <span class="yellow-text-sm">VIP</span>
                <span class="yellow-text-lg">BUNDLEBALL!</span>
            </div>
        </div>

    </div>

    <!-- FOOTER CAPTION -->
    <p class="bottom-caption">
        Experience the BEST EVER pickle ball bundle pack with your friends now !
    </p>
</section>


<!-- ************************   FOURTH PAGE STARTS HERE ****************************-->

<section class="third_page">
    
</section>

<!-- ************************   FIFTH PAGE STARTS HERE ****************************-->

<section class="third_page">
    
</section>




</body>
</html>