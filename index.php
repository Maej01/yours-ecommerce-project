<?php
    $siteroot = '/group_web';
    include 'login.inc.php';
    // session_start();

    // if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //     echo "Welcome to the member's area, " . $_SESSION['loggedUser'] . "!";
    // } else {
    //     echo "Please log in first to see this page.";
    // }
?>

<html lang="en">
<head>
    <!-- requiring the headlinks -->
    <?php require 'includes/templates/headlinks.php'; ?>
    
    <title>Homepage</title>
</head>
<body>
    <!-- requiring the header-->
    <?php require 'includes/templates/header.php'; ?>


    <!-- slider -->
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="public_files/images/sliderImg/new.jpg" alt="">
                <div class="caption center-align">
                    <h3>Get Brand New Products</h3>
                    <h5 class="grey-text text-lighten-3 hide-on-small-only">
                        From the manufacturing factory to the store. You will be the first to use any product you buy!
                    </h5>
                </div>
            </li>
            <li>
                <img src="public_files/images/sliderImg/Apple-Responsive-Screen-Mockups-full.jpg" alt="">
                <div class="caption right-align">
                    <h3>Shop With Any Device</h3>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">
                        Accessibility is our objective.<br>
                        You can access our platform on any device!
                    </h5>
                </div>
            </li>
            <li>
                <img src="public_files/images/sliderImg/ecommerce.jpg" alt="">
                <div class="caption right-align">
                    <h3>Instant Delivery</h3>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">
                        We take no delay in forwarding your goods<br>
                        as soon as your payment has been processed!
                    </h5>
                </div>
            </li>
        </ul>
    </section>
    <!-- search-box -->
    <section class="section section-search blue darken-1 white-text center">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3>Search for products</h3>
                    <div class="input-field">
                        <input type="text" class="white grey-text autocomplete" placeholder="Search by name for a product" id="autocomplete-input">
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <section class="section section-showcase">
        <div class="row">
            <!-- categories -->
            <div class="col s12 m2 categories">
                <section class="section-categories">
                    <h5>Categories</h5>
                    <ul>
                        <li>
                            <a href="#">Sportware</a>
                        </li>
                        <li>
                            <a href="#">Electronics</a>
                        </li>
                        <li>
                            <a href="#">Cellphone & Accessories</a>
                        </li>
                        <li>
                            <a href="#">Bags</a>
                        </li>
                        <li>
                            <a href="#">Shoes</a>
                        </li>
                    </ul>
                </section>
                <!-- brands -->
                <section class="section-categories">
                    <h5>Brands</h5>
                    <ul>
                        <li>
                            <a href="#">Adidas</a>
                        </li>
                        <li>
                            <a href="#">Jordan</a>
                        </li>
                        <li>
                            <a href="#">Nike</a>
                        </li>
                        <li>
                            <a href="#">Vans</a>
                        </li>
                        <li>
                            <a href="#">Yeezy Boost</a>
                        </li>
                    </ul>
                </section>
            </div>
            <!-- trending -->
            <h4 id="trending-title">Trending</h4>
            <div class="col s12 m9">
                <!-- first set -->
                <div class="col s12 m3 sneakers">
                    <div class="card">
                        <div class="card-image center">
                            <img src="public_files/images/products/sneakers/Air_Jordan_XVI.jpg">
                        </div>
                        <h3 class="center orange-text">$80</h3>
                        <h5 class="center"><a href="includes/contents/first_pair.php" class="black-text">JORDAN AIR</a></h5>
                        <a href="#" class="btn btn-small blue white-text push-m2">
                            add to cart<i class="material-icons orange-text right">shopping_cart</i>
                        </a>

                    </div>
                </div>
                <div class="col s12 m3 sneakers">
                    <div class="card">
                        <div class="card-image center">
                            <img src="public_files/images/products/sneakers/Adidas.jpg">
                        </div>
                        <h3 class="center orange-text">$76</h3>
                        <h5 class="center"><a href="includes/contents/second_pair.php" class="black-text">ADIDAS</a></h5>
                        <a href="#" class="btn btn-small blue white-text push-m2">
                            add to cart<i class="material-icons orange-text right">shopping_cart</i>
                        </a>
                    </div>
                </div>
                <div class="col s12 m3 sneakers">
                    <div class="card">
                        <div class="card-image center">
                            <img src="public_files/images/products/sneakers/Adidas-Yeezy-Boost-350.jpg">
                        </div>
                        <h3 class="center orange-text"><del>$90</del>  $80</h3>
                        <h5 class="center"><a href="includes/contents/third_pair.php" class="black-text">ADIDAS YEEZY BOOST</a></h5>
                        <a href="#" class="btn btn-small blue white-text push-m2">
                            add to cart<i class="material-icons orange-text right">shopping_cart</i>
                        </a>
                    </div>
                </div>
                <div class="col s12 m3 sneakers">
                    <div class="card">
                        <div class="card-image center">
                            <img src="public_files/images/products/sneakers/nike-air-vapormax-plus.jpg">
                        </div>
                        <h3 class="center orange-text">$150</h3>
                        <h5 class="center"><a href="includes/contents/fourth_pair.php" class="black-text">NIKE AIR VAPOUR MAX</a></h5>
                        <a href="#" class="btn btn-small blue white-text push-m2">
                            add to cart<i class="material-icons orange-text right">shopping_cart</i>
                        </a>
                    </div>
                </div>
                <!-- second set -->
                <div class="col s12 m3 sneakers">
                    <div class="card">
                        <div class="card-image center">
                            <img src="public_files/images/products/sneakers/shield-man-shoe.jpg">
                        </div>
                        <h3 class="center orange-text">$45</h3>
                        <h5 class="center"><a href="#" class="black-text">SHIELD MAN SHOE</a></h5>
                        <a href="#" class="btn btn-small blue white-text push-m2">
                            add to cart<i class="material-icons orange-text right">shopping_cart</i>
                        </a>
                    </div>
                </div>
                <div class="col s12 m3 sneakers">
                    <div class="card">
                        <div class="card-image center">
                            <img src="public_files/images/products/sneakers/vans_3.JPG">
                        </div>
                        <h3 class="center orange-text">$67.99</h3>
                        <h5 class="center"><a href="#" class="black-text">VANS</a></h5>
                        <a href="#" class="btn btn-small blue white-text push-m2">
                            add to cart<i class="material-icons orange-text right">shopping_cart</i>
                        </a>
                    </div>
                </div>
                <div class="col s12 m3 sneakers">
                    <div class="card">
                        <div class="card-image center">
                            <img src="public_files/images/products/sneakers/nike_acc.jpg">
                        </div>
                        <h3 class="center orange-text">$57</h3>
                        <h5 class="center"><a href="#" class="black-text">NIKE SPON</a></h5>
                        <a href="#" class="btn btn-small blue white-text push-m2">
                            add to cart<i class="material-icons orange-text right">shopping_cart</i>
                        </a>
                    </div>
                </div>
                <div class="col s12 m3 sneakers">
                    <div class="card">
                        <div class="card-image center">
                            <img src="public_files/images/products/sneakers/nike_men_air.jpg">
                        </div>
                        <h3 class="center orange-text">$50</h3>
                        <h5 class="center"><a href="#" class="black-text">NIKE AIR</a></h5>
                        <a href="#" class="btn btn-small blue white-text push-m2">
                            add to cart<i class="material-icons orange-text right">shopping_cart</i>
                        </a>
                    </div>
                </div>
            </div> <!-- end of the trendin column -->
        </div> <!-- end of main row -->
    </section>
    
    <!-- requiring the footer-->
    <?php require 'includes/templates/footer.php'; ?>
</body>

    <!-- requiring the jsscripts-->
    <?php require 'includes/templates/jsscripts.php'; ?>
</html>