
<?php

require __DIR__ . '/vendor/autoload.php'; // 👈 добавь ЭТУ строку

use Vipps\Vipps;
use Vipps\Config;
use Vipps\Ecommerce\Payment;

Vipps::setConfig(Config::create([
  'endpoint' => 'https://apitest.vipps.no',
  'clientId' => '12345678-1234-5678-1234-56781234',
  'clientSecret' => 'A1bcdEFGHijkL2MNOpQrsTUVW34=',
  'merchantSerialNumber' => 10000,
  'accessTokenSubscriptionKey' => '123456789abcdef123456789abcdef12',
  'ecommerceSubscriptionKey' => '123456789abcdef123456789abcdef12',
  'callbackPrefix' => 'https://amet.testdff.site/callback.php',
  'fallBack' => 'https://amet.testdff.site/fallback.php'
]));

$payment = Payment::create([
  'customerInfo' => [
    'mobileNumber' => '12345678'
  ],
  'transaction' => [
    'amount' => 1337,
    'transactionText' => 'Hello World!'
  ]
]);

// $payment->charge();

header('Location: ' . $payment->url);
exit;
