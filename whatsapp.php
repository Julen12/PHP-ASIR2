<?php
$data = [
    'phone' => '34688866966', // Receivers phone
    'body' => 'Hello, iban!', // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://api.chat-api.com/message?token=dp6kk14irlsk4b4i';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);
