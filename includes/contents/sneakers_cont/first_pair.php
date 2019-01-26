<!--  -->
<?php $siteroot = '/group_web';?>
<html lang="en">
<head>
    <!-- requiring the headlinks -->
    <link rel="stylesheet" href="/group_web/public_files/css/materialize.min.css">
    <link rel="stylesheet" href="/group_web/public_files/iconfont/material-icons.css">
    <link rel="stylesheet" href="/group_web/public_files/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/group_web/public_files/css/animate.min.css">
    <link rel="stylesheet" href="/group_web/public_files/css/style.css">
    <link rel="stylesheet" href="/group_web/public_files/css/jqzoom_style.css">

</head>
<body>
    
    <!-- requiring the header-->
    

    <!-- first pair section -->
    <section class="section_cont">
        <a href="#">Back to previous page</a>
        <div class="row">
            <!-- image section -->
            <div class="col s12 m4">
            <div class="card-panel">
                    <!-- <div class="bzoom_wrap"> -->
                        <ul id="bzoom">
                            <li>
                                <img class="bzoom_thumb_image" src="/group_web/public_files/images/products/sneakers/Air_Jordan_XVI.jpg">
                                <img class="bzoom_big_image" src="/group_web/public_files/images/products/sneakers/Air_Jordan_XVI.jpg">
                            </li>
                            <li>
                                <img class="bzoom_thumb_image" src="/group_web/public_files/images/products/sneakers/Air_Jordan_XVI.jpg">
                                <img class="bzoom_big_image" src="/group_web/public_files/images/products/sneakers/Air_Jordan_XVI.jpg">
                            </li>
                            <li>
                                <img class="bzoom_thumb_image" src="/group_web/public_files/images/products/sneakers/Air_Jordan_XVI.jpg">
                                <img class="bzoom_big_image" src="/group_web/public_files/images/products/sneakers/Air_Jordan_XVI.jpg">
                            </li>
                            <li>
                                <img class="bzoom_thumb_image" src="/group_web/public_files/images/products/sneakers/Air_Jordan_XVI.jpg">
                                <img class="bzoom_big_image" src="/group_web/public_files/images/products/sneakers/Air_Jordan_XVI.jpg">
                            </li>
                        </ul>
                    <!-- </div> -->
                </div>
            </div>
            <!-- product section -->
            <div class="col s12 m4">
                <h5>JORDAN AIR XVI - BLACK</h5>
                <p class="red-text">196 views per day</p>
                <div class="divider"></div>
                <br>
                <div class="product_desc">
                    <div class="row">
                        <div class="col m3 push-m1">
                            <label>Condition: </label>
                        </div>
                        <div class="col m6">
                            <span><b>New with box</b></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m3 push-m1">
                            <label>Shoe Size: </label>
                        </div>
                        <div class="col m6">
                            <select class="browser-default">
                                <option value="" disabled selected>select shoe size</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m3 push-m1">
                            <label for="">Width: </label>
                        </div>
                        <div class="col m6">
                        <select class="browser-default">
                            <option value="" disabled selected>select size width</option>
                            <option value="1">extra small</option>
                            <option value="2">small</option>
                            <option value="3">medium</option>
                            <option value="3">wide</option>
                        </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m3 ">
                            <label for="quantity">Quantity: </label><input class="browser-default" type="number" id="qtyInputBox" name="qtyInputBox">
                        </div>
                        <div class="col s6 m8 right push-m1">
                            <label>Limited quantity available</label>
                            <label class="red-text">190 sold</label>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row displayPrice">
                    <div class="col s6 m6 details">
                        <label>List Price:</label><span><del>US $130.00</del></span>
                        <br>
                        <label>You save:</label><span>US $70.05(54% off)</span>
                        <br>
                        <label>Now:</label><span>USD $59.95</span>
                    </div>
                    <div class="col m6 buttons">
                        <a href="/group_web/purchase_page.php" class="btn btn-small green darken-2">Buy it Now</a>
                        <a href="#" class="btn btn-small blue orange-text">
                            add to cart<i class="material-icons right">shopping_cart</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 right-cards">
                <div class="card wow fadeInRight" data-wow-delay="0.5s">
                    <div class="card-title">Shop with confidence</div>
                    <i class="material-icons blue-text prefix left">star_border</i><h6>Top Rated Plus</h6>
                    <p>Trusted seller, fast shipping and easy returns.</p>
                    <div class="divider"></div>
                    <br>
                    <i class="material-icons blue-text prefix left">monetization_on</i><h6>Money Back Guarantee</h6>
                    <p>Get the product or get your money back</p>
                </div>
                <div class="card wow fadeInRight" data-wow-delay="0.8s">
                    <div class="card-title">Seller Information</div>
                    <span>99.9% postitive feedback</span>
                    <div class="divider"></div>
                    <br>
                    <i class="material-icons blue-text prefix left">favorite_border</i><h6>Save this seller</h6>
                    <ul>
                        <li>
                            <a href="#">contact seller</a>
                        </li>
                        <li>
                            <a href="#">see other item</a>
                        </li>
                        <li>
                            <a href="#">back to homepage</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>
    <!-- requiring the jsscripts-->
    <script src="/group_web/public_files/js/jquery-3.3.1.min.js"></script>
    <script src="/group_web/public_files/js/materialize.min.js"></script>
    <script src="/group_web/public_files/js/wow.min.js"></script>
    <script src="/group_web/public_files/js/jqzoom.js"></script>
    <script>
        new WOW().init();
         $('#bzoom').zoom({
            zoom_area_width: 300,
            autoplay_interval: 3000,
            autoplay: false
        });
    </script>

</html>



