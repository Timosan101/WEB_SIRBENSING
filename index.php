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

<section class="third-page">
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
        Experience the BEST EVER pickle ball bundle <br> pack with your friends now !
    </p>
</section>



<!-- ************************   FOURTH PAGE STARTS HERE ****************************-->
`
<section class="fourth-page">

<!-- HANDSHAKE BACKGROUND IMAGE -->

    <div class="handshake-bg">
        <img src="images/fourth/SPORTSMANSHIP.jpg" alt="Sportsmanship Background">
    </div>

    <!-- TOP SECTION: MODEL CARD & MAIN HEADING -->
    <div class="fourth-top">
        
        <!-- FEMALE MODEL CARD -->
        <div class="model-card">
            <img src="images/fourth/bayenisya.png" alt="Female Model" class="model-img">
            <div class="model-info">
                <span>female</span>
                <span>26</span>
                <span>5'11</span>
                <span>MVP: 16X</span>
            </div>
        </div>

        <!-- RIGHT SIDE HEADINGS -->
        <div class="fourth-heading">
            <h2>Check Our<br>High Quality <span class="cyan-text">Luxury</span><br>Clothing & Equipments !</h2>
            <p>Worldwide's best and luxurious equipment a company has to offer </p>
        </div>

    </div>

    <!-- BOTTOM SECTION: 3 PRODUCT CATEGORIES -->
    <div class="fourth-bottom">

        <!-- CATEGORY 1: APPAREL -->
        <div class="category-item">
            <span class="cat-title">APPAREL</span>
            <div class="cat-card">
                <img src="images/fourth/shirts.jpg" alt="Apparel Shirts">
            </div>
        </div>

        <!-- CATEGORY 2: PADDLES -->
        <div class="category-item">
            <span class="cat-title">PADDLES</span>
            <div class="cat-card">
                <img src="images/fourth/quality101.jpg" alt="Paddle Equipment">
            </div>
        </div>

        <!-- CATEGORY 3: SNEAKERS -->
        <div class="category-item">
            <span class="cat-title">SNEAKERS</span>
            <div class="cat-card">
                <img src="images/fourth/shoes.jpg" alt="Pickleball Shoes">
            </div>
        </div>

    </div>
</section>




<!-- ************************   FIFTH PAGE STARTS HERE ****************************-->

<section class="fifth-page">
    <!-- COURT BACKGROUND IMAGE -->
    <div class="fifth-bg">
        <img src="images/fifth/court.jpg" alt="Court Background">
    </div>

    <!-- MAIN FEEDBACK CONTAINER -->
    <div class="fifth-container">

        <!-- TOP PART: FEEDBACK TEXT & LADY MODEL CARD -->
        <div class="fifth-top">
            
            <div class="feedback-text">
                <h2>FEEDBACK</h2>
                <p>Where concerns and demands meets with your awaited answer.</p>
                <p>Your feedback is seen, answered and valued.<br>Feel free to vent out anything.</p>
                <p class="tagline">For the goodness of all luxuriness.</p>
            </div>

            <div class="lady-card">
                <span class="lady-caption">Mary jane's response: <br><br><br>The BEST experience<br>EVER !</span>
                <img src="images/fifth/janiii.png" alt="Model Lady" class="lady-img">
            </div>

        </div>

        <!-- MIDDLE PART: 4 GALLERY IMAGES -->
        <div class="fifth-gallery">
            <div class="gallery-card">
                <img src="images/fifth/pretty.jpg" alt="Pretty">
            </div>
            <div class="gallery-card">
                <img src="images/fifth/Negra.jpg" alt="Negra">
            </div>
            <div class="gallery-card">
                <img src="images/fifth/sitting.jpg" alt="Sitting">
            </div>
            <div class="gallery-card">
                <img src="images/fifth/couple.jpg" alt="Couple">
            </div>
        </div>

        <!-- FOOTER PART: BRAND, CONTACTS & SPONSORS -->
        <div class="fifth-footer">
            
            <div class="footer-left">
                <div class="footer-logo">
                    <?php echo $atrion; ?>
                </div>
                <div class="contact-info">
                    <p><span class="icon gmail">@</span> atrion.luxury@gmail.com</p>
                    <p><span class="icon ig">IG</span> atrion_sports&luxury101</p>
                    <p><span class="icon fb">FB</span> atrion luxury</p>
                </div>
            </div>

            <div class="footer-right">
                <span class="sponsors-title">SPONSORS</span>
                <div class="sponsors-grid">
                    <span>BALENCIAGA</span>
                    <span>VERSACE</span>
                    <span>NIKE</span>
                    <span>POLO</span>
                    <span>LOUIS VUITTON</span>
                    <span>ADIDAS</span>
                    <span>LACOSTE</span>
                    <span>PUMA</span>
                    <span>GUCCI</span>
                    <span>UNDER ARMOUR</span>
                </div>
            </div>

        </div>

        <!-- COPYRIGHT BOTTOM -->
        <div class="copyright">
            © Atrion 2026. All rights reserved
        </div>

    </div>
</section>




</body>
</html>