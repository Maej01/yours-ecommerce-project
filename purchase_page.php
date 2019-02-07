<html lang="en">
<head>
     <!-- requiring the headlinks -->
     <?php require 'includes/templates/headlinks.php'; ?>

     <?php require_once('./config.php'); ?>


    <title>Purchase | YOURS</title>
</head>
<body>
    <!-- requiring the header-->
    <?php require 'includes/templates/header.php'; ?>

    <!-- purchase page section -->
    <section class="section purchase-section center">
        <div class="row">
        <form action="charge.php" method="post">
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="<?php echo $stripe['publishable_key']; ?>"
                data-description="Access for a year"
                data-amount="5000"
                data-locale="auto"></script>
        </form>
            <!--
            <div class="col s4 m4">
                <div class="card-panel">
                    <div class="card-title green">Fill in the purchase form</div>
                    <div class="col s12 m12">
                        <select class="browser-default" name="cardType">
                            <option value="" disabled selected>select payment type</option>
                            <option value="1">Visa Card</option>
                            <option value="2">American Express</option>
                            <option value="3">Master Card</option>
                        </select>
                    </div>
                    <div class="col s12 m12">
                        <div class="input-field">
                            <input class="black-text" type="text" id="card_number" placeholder="Card Number" name="purCardNumber">
                            <label for="namcard_numbere">Card Number</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s4 m4">
                            <div class="input-field">
                                <input class="black-text" type="text" id="ccv_number" placeholder="Card CCV Number" name="purCardCCV">
                                <label for="ccv_number">CCV Number</label>
                            </div>
                        </div>
                        <div class="col s4 m4">
                            <div class="input-field">
                                <input class="black-text" type="text" id="expMonth" placeholder="Card Expiry Month" name="purCardExpMonth">
                                <label for="expMonth">Month</label>
                            </div>
                        </div>
                        <div class="col s4 m4">
                            <div class="input-field">
                                <input class="black-text" type="text" id="expYear" placeholder="Card Expiry Year" name="purCardExpYear">
                                <label for="expYear">Year</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s8 m8">
                            <div class="input-field">
                                <input class="black-text" type="text" id="shipping_address" placeholder="Shipping Address" name="purShippingAddress">
                                <label for="shipping_address">Shipping Address</label>
                            </div>
                        </div>
                        <div class="col s4 m4">
                            <div class="input-field">
                                <input class="black-text" type="text" id="phone" placeholder="Phone Number" name="purPhoneNumber">
                                <label for="phone">Phone Number</label>
                            </div>
                        </div>
                    </div>
                    
                    <input type="submit" name="makeOrder" value="order" class="btn blue" action="purchase.inc.php">
                </div>
            </div> -->
        </div>
    </section> 

    <!-- requiring the header-->
    <?php require 'includes/templates/jsscripts.php'; ?>
</body>
</html>