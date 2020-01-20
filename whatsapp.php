<?php
$data = [
    'phone' => '5656565656', // Receivers phone
    'body' => 'HEEEEYYYYYYYYY', // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://eu92.chat-api.com/instance93398/sendMessage?token=dp6kk14irlsk4b4i';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);
