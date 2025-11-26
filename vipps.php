<?php
// Тестовая оплата Vipps MobilePay — ePayment API
$file = 'data.json';
$data = json_decode(file_get_contents($file), true);


// добавляем новое поле
$data['test'] = 'test';

// сохраняем
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
// Настройки (подставь свои)



$clientId = 'bf9b0045-f5d6-4e42-9253-47bf6b4925d4';
$clientSecret = '3B.8Q~uHnfQGRECPVIgWOo~5Goi0SMS~z0ZrCaQa';
$subscriptionKey = '00efb12c5ea54f6b9b2a7112e951fce3';
$merchantSerialNumber = '4747203209';  
$callbackUrl = 'https://amet.testdff.site/callback.php'; 
$returnUrl = 'https://amet.testdff.site/return.php';


// --------------------
// Настройки тестового аккаунта
// --------------------


// --------------------
// 1. Получаем access token
// --------------------
function getAccessToken($clientId, $clientSecret, $subscriptionKey, $merchantSerialNumber) {
    $ch = curl_init('https://apitest.vipps.no/accesstoken/get');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "client_id: $clientId",
        "client_secret: $clientSecret",
        "Ocp-Apim-Subscription-Key: $subscriptionKey",
        "Merchant-Serial-Number: $merchantSerialNumber"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '');
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response, true);
    return $data['access_token'] ?? null;
}

$accessToken = getAccessToken($clientId, $clientSecret, $subscriptionKey, $merchantSerialNumber);

// --------------------
// 2. Регистрируем вебхук
// --------------------
function registerWebhook($accessToken, $subscriptionKey, $merchantSerialNumber, $callbackUrl) {
    $ch = curl_init('https://apitest.vipps.no/webhooks/v1/webhooks');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $accessToken",
        "Ocp-Apim-Subscription-Key: $subscriptionKey",
        "Merchant-Serial-Number: $merchantSerialNumber",
        "Content-Type: application/json"
    ]);
    $payload = json_encode([
        'url' => $callbackUrl,
        'events' => ['epayments.payment.created.v1']
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

$webhook = registerWebhook($accessToken, $subscriptionKey, $merchantSerialNumber, $callbackUrl);

// --------------------
// 3. Создаем платеж
// --------------------
function createPayment($accessToken, $subscriptionKey, $merchantSerialNumber, $phoneNumber) {
    $ch = curl_init('https://apitest.vipps.no/epayment/v1/payments');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $accessToken",
        "Ocp-Apim-Subscription-Key: $subscriptionKey",
        "Merchant-Serial-Number: $merchantSerialNumber",
        "Content-Type: application/json",
        "Idempotency-Key: " . uniqid()
    ]);
    $payload = json_encode([
        'amount' => [
            'currency' => 'NOK',
            'value' => 49900
        ],
        'paymentMethod' => [
            'type' => 'WALLET'
        ],
        'customer' => [
            'phoneNumber' => $phoneNumber
        ],
        'reference' => 'acme-shop-123-order123abc',
        'returnUrl' => 'https://yourwebsite.com/redirect?reference=abcc123',
        'userFlow' => 'WEB_REDIRECT',
        'paymentDescription' => 'One pair of socks'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    $response = curl_exec($ch);
    if(curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}
    curl_close($ch);
    return json_decode($response, true);
}

$payment = createPayment($accessToken, $subscriptionKey, $merchantSerialNumber, 'YOUR-PHONE');

// --------------------
// 4. Обработка вебхука (файл webhook.php)
// --------------------
// В webhook.php вы будете принимать POST от Vipps
/*
<?php
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Здесь можно проверять secret, idempotencyKey и другие данные
file_put_contents('webhook_log.txt', print_r($data, true), FILE_APPEND);

// Отправляем 200 OK Vipps
http_response_code(200);
?>
*/


echo "<hr>accessToken <hr>";
print_r($accessToken);
echo "<hr>webhook <hr>";
print_r($webhook);
echo "<hr>payment <hr>";
print_r($payment);

?>