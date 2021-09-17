<?php

require_once 'vendor/autoload.php';

$basic  = new \Vonage\Client\Credentials\Basic("5d1aec98", "Rw0BHbjDdyI5J6SW");
$client = new \Vonage\Client($basic);

define('BRAND_NAME','Oryza technologies');

$response = $client->sms()->send(
    new \Vonage\SMS\Message\SMS("94774772184", BRAND_NAME, 'A text message sent using the Nexmo SMS API')
);

$message = $response->current();

if ($message->getStatus() == 0) {
    echo "The message was sent successfully\n";
} else {
    echo "The message failed with status: " . $message->getStatus() . "\n";
}
