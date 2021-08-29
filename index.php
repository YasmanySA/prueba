<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Creates an API instance
$QrAPI = new daxslab\enzona\QrAPI();

// Get access token
$accessToken = $QrAPI->requestAccessToken('XxI7cyeBLc2S1hCOBYai3oqexR4a', 'UB4YPIxTJmQZL8zSD_EWT3_00boa');
//echo $accessToken;
// Configure OAuth2 access token for authorization: default
$QrAPI->setAccessToken($accessToken);

// creates an api endpoint object
$apiObject = $QrAPI->createQrAccount();

// define parameters
$amount= '5.02';
$currency = "cup"; // string | 
$description = "Prueba"; // string | 

 
$payload = new \daxslab\enzona\qr\model\Payload();// call endpoint
$payload->setAmount($amount);
$payload->setCurrency($currency);
$payload->setDescription($description);
//$payload = 'sas';


//$payload= '{  "amount": "23.00",  "currency": "cup",  "description": "descripción"}';
//echo $payload;

try {
    $result = $apiObject->qrAccountPost($payload);
    echo($result);
} catch (Exception $e) {
    echo 'Error: ', $e->getMessage(), PHP_EOL;
}



?>
