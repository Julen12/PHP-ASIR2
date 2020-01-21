<?php
 $_POST['phone'];
$_POST['body'];
$data = [
    'phone' => $_POST['phone'], // Receivers phone
    'body' => $_POST['body'], // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://eu93.chat-api.com/instance93596/sendMessage?token=j78a2x7eauihs4h3';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);

