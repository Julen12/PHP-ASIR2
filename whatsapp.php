<?php
$_POST['phone'];
 $_POST['body'];
$data = [
    'phone' =>  $_POST['phone'],
    'body' =>  $_POST['body'],
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

