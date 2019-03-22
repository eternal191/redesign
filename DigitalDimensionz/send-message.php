<?php


require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$sid = 'ACd7bb4793594301e6096cbced9609b8bd';
$token = 'da3f58609b17cc8a4f768bd1ba76d191';
// A Twilio number you own with SMS capabilities
$twilio_number = "+12486218275";


$usermessage = $_POST['textmeElement'];

$client = new Client($sid, $token);

$client->messages->create(
    '13136516669',
    array(
        'from' => $twilio_number,
        'body' => $usermessage
        ));


echo true;


?>