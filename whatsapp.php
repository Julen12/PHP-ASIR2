<?php
$data = [
    'phone' => '15034365851', // Receivers phone
    'body' => 'Hello, world!', // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://app.chat-api.com/instance/93398';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);
