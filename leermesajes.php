<?php
$data = [
    'chatid' => '34688813345@c.es',
    'phone' => '34688813345', // Receivers phone
    "body"=> "https://upload.wikimedia.org/wikipedia/ru/3/33/NatureCover2001.jpg",
    'filename' => 'cover.jpg', // Message
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