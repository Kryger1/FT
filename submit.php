<?php
require_once __DIR__ . '/vendor/autoload.php';

use Inmobile\InmobileSDK\InmobileApi;
use Inmobile\InmobileSDK\RequestModels\Message;

header('Content-Type: application/json'); // Angiv at svaret er JSON

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumber = $_POST['phonenumber'];
    $senderNumber = 'your_sender_number'; // Din afsendernummer
    $apiKey = '283f3d5f-be9b-42f6-aa7e-2d5f95553c9a'; // Din API-nøgle

    // Gem telefonnummeret i en database eller en fil
    $file = 'phone_numbers.txt';
    file_put_contents($file, $phoneNumber . PHP_EOL, FILE_APPEND);

    // Send en SMS for at bekræfte tilmeldingen
    $api = new InmobileApi($apiKey);
    $message = Message::create('Tak for din tilmelding til vores SMS-tjeneste!')
        ->from($senderNumber)
        ->to($phoneNumber);

    $response = $api->messages()->send($message);

    if ($response->isOk()) {
        $responseMessage = 'Tak for din tilmelding til vores SMS-tjeneste!';
        $status = 'success';
    } else {
        $responseMessage = 'Der opstod en fejl. Prøv igen senere.';
        $status = 'error';
    }

    echo json_encode(['status' => $status, 'message' => $responseMessage]);
    exit;
}
?>
