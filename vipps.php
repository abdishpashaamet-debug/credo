<?php

require __DIR__ . '/vendor/autoload.php';

use Vipps\Vipps;
use Vipps\Config;
use Vipps\Ecommerce\Payment;


Vipps::setConfig(Config::create([
  'endpoint' => 'https://apitest.vipps.no',
  'clientId' => 'bf9b0045-f5d6-4e42-9253-47bf6b4925d4',
  'clientSecret' => '3B.8Q~uHnfQGRECPVIgWOo~5Goi0SMS~z0ZrCaQa',
  'merchantSerialNumber' => 350083,
  'accessTokenSubscriptionKey' => '00efb12c5ea54f6b9b2a7112e951fce3',
  'ecommerceSubscriptionKey' => '00efb12c5ea54f6b9b2a7112e951fce3',
  'callbackPrefix' => 'https://amet.testdff.site/callback.php',
  'fallBack' => 'https://amet.testdff.site/fallback.php'
]));

$payment = Payment::create([
  'customerInfo' => [
    'mobileNumber' => '4791726664'
  ],
  'transaction' => [
    'amount' => 1337,
    'transactionText' => 'Hello World!'
  ]
]);

$payment->charge();

header('Location: ' . $payment->url);
die();


?>