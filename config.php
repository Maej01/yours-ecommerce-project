<?php
require_once('vendor/autoload.php');

$stripe = [
  'secret_key'      => 'sk_test_cgLcl4noLukPLFfeT5EQW6qq',
  'publishable_key' => 'pk_test_w0ff8PQHopZix7YWajPigC5i',
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?> 