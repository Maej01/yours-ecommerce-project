<?php $siteroot = '/group_web';
    

?>
<html lang="en">
<head>
   <!-- requiring the headlinks -->
   <?php require 'includes/templates/headlinks.php'; ?>

    <title>Contact Us | YOURS </title>
</head>
<body>

    <!-- requiring the header-->
    <?php require 'includes/templates/header.php'; ?>

    <!-- slider -->
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="public_files/images/sliderImg/contact_bg.jpg" alt="">
                <div class="caption center-align">
                    <h3 class="black-text text-lighten-3">24/7 Contact Center</h3>
                    <h5 class="orange-text text-lighten-2 hide-on-small-only">
                        Feel Free to contact us at any time!
                    </h5>
                </div>
            </li>
            <li>
                <img src="public_files/images/sliderImg/contact-bg.png" alt="">
                <div class="caption right-align">
                    <h3 class="black-text text-lighten-3">Quick Response</h3>
                    <h5 class="orange-text text-lighten-2 hide-on-small-only">
                        We respond to our customers in less than 24 hours 
                    </h5>
                </div>
            </li>
            <li>
                <img src="public_files/images/sliderImg/contact-us.jpg" alt="">
                <div class="caption left-align">
                    <h3 class="black-text text-lighten-3">Stay Up To Date</h3>
                    <h5 class="orange-text text-lighten-2 hide-on-small-only">
                        We update you when ever their is a new product, reduces in price etc.
                    </h5>
                </div>
            </li>
        </ul>
    </section>

    <!-- contact section -->
    <section class="section section-contact center">
        <div id="googlemap"></div>
        <div class="container">
            <div class="row">
                <div class="col s12 m6 offset-m6">
                    <div class="card-panel x-depth-5">
                        <h4>Contact Us</h4>
                        <form method="POST" action="contact.inc.php">
                        <div class="input-field">
                            <input class="black-text" type="text" id="name" placeholder="Name" name="contactFormName" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                            <input class="black-text" type="email" id="email" placeholder="Email" name="contactFormEmail" required>
                            <label for="email">Emai</label>
                        </div>
                        <div class="input-field">
                            <input class="black-text" type="text" id="phone" placeholder="Phone Number" name="contactFormPhoneNumber" required>
                            <label for="phone">Phone</label>
                        </div>
                        <div class="input-field">
                            <textarea class="materialize-textarea black-text" id="message" placeholder="Message" name="contactFormMessage" required></textarea>
                            <label for="message"></label>
                        </div>
                        <input type="submit" name="submitMessage" value="Submit" class="btn btn-large btn-extend blue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="public_files/js/jquery-3.3.1.min.js"></script>
    <script src="public_files/js/materialize.min.js"></script>
    <script src="public_files/js/wow.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD0bN3Y5v3OgRaS_tcua5XQZJDXmqLkD1I"></script>


    <script>
        $(document).ready(function(){
        
            // latitude and longitute position of our marker
            const position = [42.361145, -71.057083];
            const centerPosition = [42.377815, -70.91133];

            function showGoogleMaps(){
                const latLng = new google.maps.LatLng(position[0], position[1]);
                const centerLatLng = new google.maps.LatLng(centerPosition[0], centerPosition[1]);
            
                // mapoptions
                const mapOptions = {
                    zoom: 12,
                    streetViewControl: false,
                    scaleControl: true,
                    mapTypeId: google.maps.mapTypeId.ROADMAP,
                    center: centerLatLng
                }

                // creating the map
                map = new google.maps.Map(document.getElementById('googlemap'), mapOptions);

                // show marker
                marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    draggable: false,
                    animation: google.maps.Animation.DROP
                });

                
            }
            // event listener
            google.maps.event.addDomListener(window, 'load', showGoogleMaps);
        });
    </script>

    <!-- requiring the footer-->
    <?php require 'includes/templates/footer.php'; ?>
</body>
    <!-- requiring the jsscripts-->
    <?php require 'includes/templates/jsscripts.php'; ?>


</html>

