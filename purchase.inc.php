<?php
  require_once('./config.php');

  






  $token  = $_POST['stripeToken'];
  $cardNo  = $_POST['purCardNumber'];
  $cardCCV  = $_POST['purCardCCV'];
  $cardMonth  = $_POST['purCardExpMonth'];
  $cardYear  = $_POST['purCardExpYear'];
  $shippingAddress  = $_POST['purShippingAddress'];
  $phone  = $_POST['purPhoneNumber'];

  $customer = \Stripe\Customer::create([
      'email' => $email,
      'source'  => $token,
  ]);

  $charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => 5000,
      'currency' => 'usd',
  ]);

  echo '<h1>Successfully charged $50.00!</h1>';
?>