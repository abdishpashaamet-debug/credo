<?php
// Тестовая оплата Vipps MobilePay — ePayment API

// Настройки (подставь свои)
$clientId = 'bf9b0045-f5d6-4e42-9253-47bf6b4925d4';
$clientSecret = '3B.8Q~uHnfQGRECPVIgWOo~5Goi0SMS~z0ZrCaQa';
$subscriptionKey = '00efb12c5ea54f6b9b2a7112e951fce3';
$merchantSalesNumber = '8896b115e1f74fc4bfa21abef9bf1695';  // Merchant Serial Number
$redirectUrl = 'https://amet.testdff.site/callback.php';  // куда вернётся пользователь
$returnUrl = 'https://amet.testdff.site/return.php';

// 1) Получаем access token  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://apitest.vipps.no/auth/v1/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'grant_type' => 'client_credentials'
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded',
    'Ocp-Apim-Subscription-Key: ' . $subscriptionKey,
    'client_id: ' . $clientId,
    'client_secret: ' . $clientSecret
]);
$response = curl_exec($ch);
if (!$response) {
    die('error: ' . curl_error($ch));
}
$data = json_decode($response, true);
$accessToken = $data['access_token'] ?? null;
if (!$accessToken) {
    die('No access token returned');
}
curl_close($ch);

// 2) Создаём платёж
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://apitest.vipps.no/epayment/v1/payments');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

$body = [
    'merchant' => [
        'merchantSerialNumber' => $merchantSalesNumber,
        'merchantName' => 'My Test Store',
        'merchantLogoUrl' => 'https://your‑site.com/logo.png',
    ],
    'amount' => [
        'value' => 1000,  // например, 10.00 NOK — зависит от валюты sales unit
        'currency' => 'NOK'
    ],
    'paymentMethod' => [
        'type' => 'WALLET'
    ],
    'reference' => 'order‑' . time(),
    'userFlow' => 'WEB_REDIRECT',
    'returnUrl' => $returnUrl
];

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $accessToken,
    'Ocp-Apim-Subscription-Key: ' . $subscriptionKey,
    'Merchant-Serial-Number: ' . $merchantSalesNumber
]);

$response = curl_exec($ch);
if (!$response) {
    die('error: ' . curl_error($ch));
}
$data = json_decode($response, true);
curl_close($ch);

if (isset($data['redirectUrl'])) {
    // Перенаправляем пользователя на Vipps для подтверждения
    header('Location: ' . $data['redirectUrl']);
    exit;
} else {
    echo 'Ошибка при создании платежа: ';
    var_dump($data);
}
?>